<?php

namespace App\Http\Controllers;

use App\Http\Requests\DonationRequest;
use App\Library\Response;
use App\Library\Str;
use App\Library\Token;
use App\Models\Donations;
use App\Services\NotificationService;
use App\Services\PaymentService;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

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

        $notificationService->subject("Your donation has been received")
                            ->text("Thank you for your kind Donation to our ".env('APP_NAME'))
                            ->text("We are really grateful for your support to our work towards empowering, improving and inspiring hope to the under-privileged, children and the elderly")
                            ->text("Please you can click the link below, to download an invoice recognizing your kind support to our organization.")
                            ->action('Download Invoice', env('APP_URL').'/donate/invoice/'.$donation->unique_id)
                            ->text("We are highly grateful for your support. Thank you!")
                            ->send($donation, ['mail']);

        return Response::redirect('/donate', 'success', "Your Donation has been received! Please check your Email");
    }

    function downloadInvoice(Donations $donation){
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

}
