<?php

namespace App\Library;

use App\Models\Withdrawal;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Http;

class Flutterwave {

    private $url;
    private $key;

    function __construct(){
        $this->url = env('RAVE_API_BASE_URL');
        $this->key = env('RAVE_SECRET_KEY');
    }

    function initiateWithdrawal($withdrawal, $user, $amount){
        $response = Http::withToken($this->key)->post($this->url.'/transfers', [
            'account_bank' => $user->bank,
            'account_number' => $user->account_no,
            'amount' => $amount,
            'narration' => 'Payout from Libraclass',
            'currency' => $withdrawal->currency,
            'reference' => $withdrawal->reference,
            'callback_url' => env('MAIN_APP_URL')."/bank/withdrawal/status",
            'debit_currency' => $withdrawal->currency
        ]);
        return $response->collect();
    }

    function initiateTestWithdrawal($withdrawal, $user, $amount){
        $response = Http::withToken($this->key)->post($this->url.'/transfers', [
            'account_bank' => '044',
            'account_number' => '0690000031',
            'amount' => $amount,
            'narration' => 'Payout from Libraclass',
            'currency' => 'NGN',
            'reference' => $withdrawal->reference,
            'callback_url' => env('MAIN_APP_URL')."/bank/withdrawal/status",
            'debit_currency' => 'NGN'
        ]);
        return $response->collect();
    }

}
