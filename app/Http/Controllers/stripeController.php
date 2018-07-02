<?php

namespace App\Http\Controllers;


use Auth;
use Mail;
use App\ParQ;
use App\User;
use App\Payment;
use App\Setting;
use App\Mail\paymentConfirm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class stripeController extends Controller
{
    public function index(Request $request) {

      $settings = Setting::first();
      $secretKey = Crypt::decryptString($settings->stripe_key_secret);

      // $order = new Payment;
      // $order->user_id = Auth::id();
      // $order->product = 'fresh-start';
      // $order->card_name = $request->cardName;
      // $order->commence_at = now()->addMonth()->startOfMonth();
      // $order->save();
      //
      // $parQ = ParQ::where('name', Auth::user()->name)->first();
      // $parQ->user_id = Auth::id();
      // $parQ->save();

      // $result = $order->id;
      $result = '0001';

      // if ($result) {
      //   // Set your secret key: remember to change this to your live secret key in production
      //   // See your keys here: https://dashboard.stripe.com/account/apikeys
      //   \Stripe\Stripe::setApiKey($secretKey);
      //
      //   // Token is created using Checkout or Elements!
      //   // Get the payment token ID submitted by the form:
      //   $token = $_POST['stripeToken'];
      //
      //   $charge = \Stripe\Charge::create([
      //       'amount' => $settings->freshStart_price,
      //       'currency' => 'GBP',
      //       'description' => 'Fresh Start Charge: Mark Testing',
      //       'source' => $token,
      //       'receipt_email' => 'mkryan1988@gmail.com',
      //       "metadata" => array("order_id" => $result)
      //   ]);
      //
      //   // $paid = User::find(Auth::id());
      //   // $paid->paid = 1;
      //   // $paid->paid_at = now();
      //   // $paid->save();
      //
      //   $mailData = array(
      //                'name'     => 'Mark Ryan',
      //                'email'    => 'mkryan1988@gmail.com',
      //               );
      //   Mail::to('admin@leaner-living.com')->send(new paymentConfirm($mailData));
      //
      //   return redirect()->route('fresh-start.questionnaire')->with('success', 'Payment Accepted!');
      //
      // }
      $mailData = array(
                   'name'     => 'Mark Ryan',
                   'email'    => 'mkryan1988@gmail.com',
                  );
      Mail::to('admin@leaner-living.com')->send(new paymentConfirm($mailData));

      return redirect()->route('fresh-start.questionnaire')->with('success', 'Payment Accepted!');

    }
    public function test(Request $request) {


      // Set your secret key: remember to change this to your live secret key in production
      // See your keys here: https://dashboard.stripe.com/account/apikeys
      \Stripe\Stripe::setApiKey('sk_test_ky4FSsiuwLe1d77E1L0pj9mg');

      // Token is created using Checkout or Elements!
      // Get the payment token ID submitted by the form:
      $token = $_POST['stripeToken'];

      $charge = \Stripe\Charge::create([
          'amount' => 9999,
          'currency' => 'GBP',
          'description' => 'Fresh Start Charge: testing',
          'source' => $token,
          'receipt_email' => 'mkryan1988@gmail.com',
          "metadata" => array("order_id" => 001)
      ]);

      return redirect()->route('fresh-start.questionnaire')->with('success', 'Payment Accepted!');

    }
}
