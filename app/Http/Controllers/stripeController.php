<?php

namespace App\Http\Controllers;


use Auth;
use Mail;
use App\ParQ;
use App\User;
use App\Payment;
use App\Setting;
use Carbon\Carbon;
use App\Mail\paymentConfirm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class stripeController extends Controller
{   
    public function isValid($enteredCode)
    {
      $date = Carbon::createFromFormat('d/m/Y', '19/05/2019');
      $promoCode = "BP100";
      if (Carbon::parse($date)->gt(Carbon::now())) {
        if (strtoupper($enteredCode) === $promoCode) {
          return true;
        } else {
          return false;
        }
      } else {
        return false;
      }
    }
    public function index(Request $request) {

      $settings = Setting::first();
      $standardPrice = $settings->freshStart_price;

      if ($this->isValid($request->promoCode)) {
        $price = 10000;
      } else {
        $price = $standardPrice;
      }
      // $order = new Payment;
      // $order->user_id = Auth::id();
      // $order->product = 'fresh-start';
      // $order->card_name = $request->cardName;
      // $order->commence_at = now()->addMonth()->startOfMonth();
      // $order->save();

      // $result = $order->id;

      if (true) {
        // Set your secret key: remember to change this to your live secret key in production
        // See your keys here: https://dashboard.stripe.com/account/apikeys
        // \Stripe\Stripe::setApiKey($secretKey);
        \Stripe\Stripe::setApiKey('sk_live_WKH98Mr0tuo6QMUlPVkpfNkj');
        // \Stripe\Stripe::setApiKey('sk_test_ky4FSsiuwLe1d77E1L0pj9mg');

        // Token is created using Checkout or Elements!
        // Get the payment token ID submitted by the form:
        $token = $_POST['stripeToken'];

        $charge = \Stripe\Charge::create([
            'amount' => $price,
            'currency' => 'GBP',
            'description' => 'Fresh Start: '.  $request->cardName,
            'source' => $token,
            'receipt_email' => $request->email,
            'metadata' => array("name" => $request->cardName)
        ]);

        // $paid = User::find(Auth::id());
        // $paid->paid = 1;
        // $paid->paid_at = now();
        // $paid->save();

        // $parQ = ParQ::where('email', Auth::user()->email)->first();
        // if ($parQ) {
        //   $parQ->user_id = Auth::id();
        //   $parQ->save();
        // }

        $mailData = array(
                     'id'       => $charge->id,
                     'name'     => $request->cardName,
                     'email'    => $request->email
                    );
        Mail::to('freshstart@leaner-living.com')->send(new paymentConfirm($mailData));

        return redirect()->route('fresh-start.questionnaire')->with('success', 'Payment Accepted!')->with('name', $request->cardName)->with('email', $request->email);

        // return redirect()->route('fresh-start.next-steps')->with('email',  $request->email);

      }

    }
    public function test(Request $request) {
      $name = 'Mark Ryan';

      // Set your secret key: remember to change this to your live secret key in production
      // See your keys here: https://dashboard.stripe.com/account/apikeys
      \Stripe\Stripe::setApiKey('sk_test_ky4FSsiuwLe1d77E1L0pj9mg');

      // Token is created using Checkout or Elements!
      // Get the payment token ID submitted by the form:
      $token = $_POST['stripeToken'];

      $charge = \Stripe\Charge::create([
          'amount' => 9999,
          'currency' => 'GBP',
          'description' => 'Fresh Start: ' .$name,
          'source' => $token,
          'receipt_email' => 'mkryan1988@gmail.com',
          "metadata" => array("order_id" => 001)
      ]);

      return redirect()->route('fresh-start.questionnaire')->with('success', 'Payment Accepted!');

    }
}
