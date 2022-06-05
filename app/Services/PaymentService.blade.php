<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\User;

class PaymentService {

    function initialize($reference, $details, $redirect){
        $response = Http::withHeaders([
            'Authorization' => "Bearer ".env('RAVE_SECRET_KEY')
        ])->post(env('RAVE_API_BASE_URL').'/payments', [
            'tx_ref' => $reference,
            'amount' => $details->amount,
            'currency' => "NGN",
            'redirect_url' => $redirect,
            'customer' => [
                'email' => $details->email,
                'name' => "$details->firstname $details->lastname"
            ],
            'customizations' => [
                'title' => env('APP_NAME')
            ]
        ]);

        if($response->ok() && $response->status() === 200) {
            $res = $response->collect();
            if($res['status'] === 'success') return $res['data']['link'];
        }

        return false;
    }

}
