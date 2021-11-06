<?php

namespace App\Http\Controllers;
use Session;
use Stripe;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    //
    public function stripeCreate()
   {
       return view('stripe.create');
   }

   /**
    * success response method.
    *
    * @return \Illuminate\Http\Response
    */
   public function stripePay(Request $request)
   {
       Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
       Stripe\Charge::create ([
               "amount" => 100 * 15,
               "currency" => "usd",
               "source" => $request->stripeToken,
               "description" => "Test payment from itsolutionstuff.com."
       ]);

       Session::flash('success', 'Payment successful!');

       return back();
   }
}
