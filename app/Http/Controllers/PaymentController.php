<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $customer = Customer::create(array(
                'email' => $request->email,
                'source' => $request->stripeToken
        ));
        $charge = Charge::create(array(
            'amount' => $request->amount,
            'currency' => 'jpy',
            'customer' => $customer->id
        ));
        return response()->json($customer, 200);
    }
}
