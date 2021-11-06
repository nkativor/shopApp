<?php

namespace App\Http\Controllers;
use Session;
use Stripe;
use Illuminate\Http\Request;

class StripePaymentController extends Controller
{
  public function create()
 {
     return view('stripepay.stripe');
 }

 /**
  * success response method.
  *
  * @return \Illuminate\Http\Response
  */
 public function stripePost(Request $request)
 {

     Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
     Stripe\Charge::create ([
             "amount" => \Cart::session(3)->getTotal() * 100,
             "currency" => "usd",
             "source" => $request->stripeToken,
             "description" => "Test payment from itsolutionstuff.com."
     ]);

     Session::flash('success', 'Payment successful!');

     return back();
 }
}
