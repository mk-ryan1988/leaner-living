<?php

namespace App\Http\Controllers;

use Auth;
use Mail;
use App\ParQ;
use App\Mail\parqFailed;
use Illuminate\Http\Request;
use App\Http\Requests\StoreParqForm;

class ParqController extends Controller
{
  public function store(StoreParqForm $request) {

    $parQ = new ParQ;
    $parQ->name = $request->name;
    $parQ->email = $request->email;
    $parQ->dob = $request->dob;
    $parQ->gender = $request->gender;
    $parQ->q1 = $request->q1;
    $parQ->q1_More = $request->q1More;
    $parQ->q2 = $request->q2;
    $parQ->q2_More = $request->q2More;
    $parQ->q3 = $request->q3;
    $parQ->q3_More = $request->q3More;
    $parQ->q4 = $request->q4;
    $parQ->q4_More = $request->q4More;
    $parQ->q5 = $request->q5;
    $parQ->q5_More = $request->q5More;
    $parQ->q6 = $request->q6;
    $parQ->q6_More = $request->q6More;
    $parQ->q7 = $request->q7;
    $parQ->q7_More = $request->q7More;
    $parQ->q8 = $request->q8;
    $parQ->q8_More = $request->q8More;
    $parQ->q9 = $request->q9;
    $parQ->q9_More = $request->q9More;
    $parQ->q10 = $request->q10;
    $parQ->q10_More = $request->q10More;
    $parQ->save();

    if ($request->q1 || $request->q2 || $request->q3 || $request->q4 || $request->q5 || $request->q6 || $request->q7 || $request->q8 || $request->q9 || $request->q10) {

      $mailData = array(
                   'id'       => $parQ->id,
                   'name'     => $request->name,
                   'email'    => $request->email,
                  );

     Mail::to(env('ADMIN_EMAIL'))->send(new parqFailed($mailData));

     abort(403);

    }else {

      Auth::loginUsingId(1);

      return ['redirect' => route('payment')];
    }
  }
}