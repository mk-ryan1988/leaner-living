<?php

namespace App\Http\Controllers;

use Auth;
use Image;
use App\Pics;
use Illuminate\Http\Request;

class PicsController extends Controller
{
  public function store(Request $request) {



    $this->validate($request, [
             'photos' => 'required',
             'photos.*' => 'mimes:png,jpeg,jpg',
             'photos.*' => 'max:4000'
     ]);

    $user_photos = new Pics;
    $user_photos->user_id = Auth::id();

    foreach ($request->file('photos') as $key => $img) {

      // $image = base64_encode(file_get_contents($request->file('image')->pat‌​h()));

      $photo = (string) Image::make($img)->encode('data-url');

      if ($key == 0) {
        $user_photos->pic_1 = $photo;
      }elseif ($key == 1) {
        $user_photos->pic_2 = $photo;
      }elseif ($key == 2) {
        $user_photos->pic_3 = $photo;
      }
    }

    $user_photos->save();

    return redirect()->route('fresh-start.dashboard')->with('status', 'Profile updated!');

  }
}
