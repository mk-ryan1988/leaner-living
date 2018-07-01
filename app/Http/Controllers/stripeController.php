<?php

namespace App\Http\Controllers;


use Auth;
use App\ParQ;
use App\User;
use App\Payment;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class stripeController extends Controller
{
    public function index(Request $request) {

      $settings = Setting::first();
      $secretKey = Crypt::decryptString($settings->stripe_key_secret);

      $order = new Payment;
      $order->user_id = Auth::id();
      $order->product = 'fresh-start';
      $order->card_name = $request->cardName;
      $order->commence_at = now()->addMonth()->startOfMonth();
      $order->save();

      $parQ = ParQ::where('name', Auth::user()->name)->first();
      $parQ->user_id = Auth::id();
      $parQ->save();

      $result = $order->id;

      if ($result) {
        // Set your secret key: remember to change this to your live secret key in production
        // See your keys here: https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey($secretKey);

        // Token is created using Checkout or Elements!
        // Get the payment token ID submitted by the form:
        $token = $_POST['stripeToken'];

        $charge = \Stripe\Charge::create([
            'amount' => $settings->freshStart_price,
            'currency' => 'GBP',
            'description' => 'Fresh Start Charge: '. Auth::user()->name,
            'source' => $token,
            'receipt_email' => Auth::user()->email,
            "metadata" => array("order_id" => $result)
        ]);

        $paid = User::find(Auth::id());
        $paid->paid = 1;
        $paid->paid_at = now();
        $paid->save();

        return redirect()->route('fresh-start.questionnaire')->with('success', 'Payment Accepted!');
      }

    }
    public function test(Request $request) {


      $secretKey = 'sk_test_ky4FSsiuwLe1d77E1L0pj9mg';

      // Set your secret key: remember to change this to your live secret key in production
      // See your keys here: https://dashboard.stripe.com/account/apikeys
      \Stripe\Stripe::setApiKey($secretKey);

      // Token is created using Checkout or Elements!
      // Get the payment token ID submitted by the form:
      $token = $_POST['stripeToken'];

      $charge = \Stripe\Charge::create([
          'amount' => $secretKey,
          'currency' => 'GBP',
          'description' => 'Fresh Start Charge: testing',
          'source' => $token,
          'receipt_email' => 'mkryan1988@gmail.com',
          "metadata" => '0001'
      ]);

      return redirect()->route('fresh-start.questionnaire')->with('success', 'Payment Accepted!');

    }
}
