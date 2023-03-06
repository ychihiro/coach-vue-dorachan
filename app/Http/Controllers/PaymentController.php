<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use Illuminate\Support\Facades\Mail;
use App\Mail\DeliveryMail;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET')); //シークレットキー
        Stripe::setApiKey('sk_test_51MhDWaIyOIzAJ2a5XcQXivoAxxNAwqPKLoEsYMuw8rZjpsddBE8E8v7KOsFf8v7fhgQG5V5Ji1bMHXT4btYy2T4b00NX74Beaq'); //シークレットキー

        $customer = Customer::create(array(
                'email' => $request->email,
                'source' => $request->stripeToken
        ));

        $charge = Charge::create(array(
            'amount' => $request->amount,
            'currency' => 'jpy',
            'customer' => $customer->id
        ));
        // dd($customer);
        return response()->json($customer, 200);
    }

    public function send(Request $request)
    {
        $content = $request->input('content');

    	Mail::to('y.chihiro0510@gmail.com')->send(new DeliveryMail($content));
    }
}
