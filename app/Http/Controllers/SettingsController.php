<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class SettingsController extends Controller
{
    public function update(Request $request) {

      $this->validate($request, [
        'stripe_public' => 'required',
        'stripe_secret' => 'required',
        'limit' => 'required',
        'price' => 'required',
       ]);
      $secretKey = Crypt::encryptString($request->stripe_secret);

      $setting = Setting::first();

      if (is_null($setting)) {
        $setting = new Setting;
        $setting->stripe_key_public = $request->stripe_public;
        $setting->stripe_key_secret = $secretKey;
        $setting->freshStart_users_limit = $request->limit;
        $setting->freshStart_price = $request->price;
        if ($request->has('acceptingStarters')) {
            $setting->acceptingStarters = 1;
        }else {
            $setting->acceptingStarters = 0;
        }
        $setting->save();

      }else {
        $setting->stripe_key_public = $request->stripe_public;
        $setting->stripe_key_secret = $secretKey;
        $setting->freshStart_users_limit = $request->limit;
        $setting->freshStart_price = $request->price;
        if ($request->has('acceptingStarters')) {
            $setting->acceptingStarters = 1;
        }else {
            $setting->acceptingStarters = 0;
        }
        $setting->save();
      }

      return redirect()->route('admin.settings');
    }
}
