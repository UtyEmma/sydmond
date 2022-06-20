<?php

namespace App\Http\Controllers;

use App\Http\Requests\DonationRequest;
use App\Http\Requests\DonorRequest;
use App\Library\FileHandler;
use App\Library\Response;
use App\Library\Str;
use App\Library\Token;
use App\Models\Donations;
use App\Models\Donor;
use App\Services\NotificationService;
use App\Services\PaymentService;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Redirect;

class DonationController extends Controller{

    function index (){
        return Response::view('donate', [
            'siteName' => env('SITE_NAME')
        ]);
    }

    function initiate(DonationRequest $request, PaymentService $paymentService){
        $reference = Token::text(8, 'donations', 'reference');

        $donation = Donations::create($request->safe()->merge([
            'reference' => $reference
        ])->all());

        $redirect = env('APP_URL')."/donate/complete?ref=$donation->id";
        $payment_link = $paymentService->initialize($donation->reference, $donation, $redirect);

        if(!$payment_link) return Response::redirectBack('error', "Payment could not be initiated");
        return redirect()->away($payment_link);
    }

    function verify(Request $request, PaymentService $paymentService, NotificationService $notificationService){
        $donation = Donations::find($request->ref);
        $status = $paymentService->verify($donation, $request->transaction_id);
        if(!$status) return Response::redirect('/donate', 'error', "Your Donation was not be completed");

        $donation->status = 'completed';
        $donation->save();

        if($donation->email){
            $notificationService->subject("Your donation has been received")
                                ->text("Thank you for your kind Donation to our ".env('APP_NAME'))
                                ->text("We are really grateful for your support to our work towards empowering, improving and inspiring hope to the under-privileged, children and the elderly")
                                ->text("Please you can click the link below, to download an invoice recognizing your kind support to our organization.")
                                ->action('Download Invoice', env('APP_URL').'/donate/invoice/'.$donation->id.'?email='.$donation->email)
                                ->text("We are highly grateful for your support. Thank you!")
                                ->send($donation, ['mail']);
        }

        return Response::redirect('/donate', 'success', "Your Donation has been received! Please check your Email");
    }

    function downloadInvoice(Request $request, Donations $donation){
        if($request->email !== $donation->email) return abort(404);

        if($donation->status === 'completed') {
            $pdf = Pdf::setOptions(['dpi' => 150,]);
            $pdf->loadView('components.invoice', [
                'donation' => $donation
            ]);
            $pdf->render();
            return $pdf->download(Str::slug(env('APP_NAME')." invoice").".pdf");
        }else{
            return Response::redirect('/donate', 'error', "Your Donation was not completed");
        }
    }

    function donors(){
        return Response::view('donors', [
            'siteName' => env('APP_NAME')
        ]);
    }

    private $folder = 'images/donor';

    function donations(){
        $donors = Donations::paginate();
        return Response::view('admin.donations', [
            'donations' => $donors
        ]);
    }

    function list(){
        $donors = Donor::paginate();
        return Response::view('admin.donors', [
            'donors' => $donors
        ]);
    }

    public function create(DonorRequest $request){
        $file = $request->file('image');
        $image = FileHandler::upload($file, $this->folder, $request->name);
        $values = collect($request->validated())->merge(['image' => $image]);
        Donor::create($values->all());
        return Response::redirectBack('success', 'Donor Created');
    }

    public function status($id){
        $donor = Donor::findOrFail($id);
        $donor->status = !$donor->status;
        $donor->save();
        $status = $donor->status ? 'Enabled' : 'Disabled';

        return Response::redirectBack('success', "Donor $status");
    }

    public function update(DonorRequest $request, $id){
        $donors = Donor::findOrFail($id);
        $image = $request->hasFile('image')
                    ? FileHandler::update($request->file('image'), $this->folder, $request->name, $donors->image)
                    : $donors->image;

        $values = collect($request->validated())->merge(['image' => $image]);
        $donors->update($values->all());
        return Response::redirectBack('success', "Donor Info Updated");
    }

    public function destroy($id){
        $donors = Donor::findOrFail($id);
        FileHandler::deleteFile($donors->image);
        $donors->delete();
        return Response::redirectBack('success', 'Donor Deleted');
    }

}
