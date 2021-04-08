<?php

namespace App\Http\Controllers;


use Braintree\Gateway;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    public function generateToken()
    {
        $gateway = $this->getGateway();

        return response()->json([
            'token' => $gateway->clientToken()->generate()
        ]);
    }

    public function checkout(Request $request)
    {
        $nonce = $request->payment_method_nonce;
        $gateway = $this->getGateway();

        $result = $gateway->transaction()->sale([
            'amount' => '1.00',
            'paymentMethodNonce' => $nonce,
            'options' => [
                'submitForSettlement' => True
            ]
        ]);

        Log::info('transaction result ' . $result->__toString());

        return back()->withInput([
            'success' => true
        ]);
    }

    private function getGateway(): Gateway
    {
        return new Gateway([
            'environment' => env('APP_ENV') === 'prod' ? 'prod' : 'sandbox',
            'merchantId' => env('PAYMENT_MER_ID'),
            'publicKey' => env('PAYMENT_PUB_KEY'),
            'privateKey' => env('PAYMENT_PRI_KEY')
        ]);
    }
}
