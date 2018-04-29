<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class stripeController extends Controller
{
    public function index(Request $request) {

      // // Set your secret key: remember to change this to your live secret key in production
      // // See your keys here: https://dashboard.stripe.com/account/apikeys
      // \Stripe\Stripe::setApiKey("sk_test_ky4FSsiuwLe1d77E1L0pj9mg");
      //
      // // Token is created using Checkout or Elements!
      // // Get the payment token ID submitted by the form:
      // $token = $_POST['stripeToken'];
      //
      // $charge = \Stripe\Charge::create([
      //     'amount' => 14999,
      //     'currency' => 'GBP',
      //     'description' => 'Fresh Start',
      //     'source' => $token,
      // ]);

      session()->flash('success', 'Payment Accepted!');
      return redirect()->route('fresh-start.questionnaire');

    }
}
