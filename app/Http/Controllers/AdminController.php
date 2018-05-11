<?php

namespace App\Http\Controllers;

use App\ParQ;
use App\User;
use App\Setting;
use Illuminate\Http\Request;
use App\QuestionnaireQuestion;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{
    public function settings()
    {
      $settings = Setting::first();
      $settings->stripe_key_secret = Crypt::decryptString($settings->stripe_key_secret);

      return view('admin.settings', compact('settings'));
    }

    public function usersIndex()
    {
      $users = User::all();

      return view('admin.users.index', compact('users'));
    }

    public function userShow($id)
    {
      $questions = QuestionnaireQuestion::with('options')->get();

      $groupedQs = $questions->groupBy('section');
      $groupedQs->toArray();

      $user = User::with(['parQ', 'questionnaireAnswers'])->where('id', $id)->first();

      return view('admin.users.show', compact('groupedQs', 'user'));
    }
}
