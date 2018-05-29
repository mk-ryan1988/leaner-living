<?php

namespace App\Http\Controllers;

use Auth;
use App\ParQ;
use App\User;
use App\Setting;
use Illuminate\Http\Request;
use App\QuestionnaireQuestion;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{
    public function overview()
    {
      $user = Auth::user();
      $alerts = ParQ::whereNull('user_id')->get();

      return view('admin.overview', compact('user', 'alerts'));
    }
    public function parq($id)
    {
      $parq = ParQ::where('id', $id)->first();
      return view('admin.parq', compact('parq'));
    }

    public function settings()
    {
      $settings = Setting::first();
      $settings->stripe_key_secret = Crypt::decryptString($settings->stripe_key_secret);

      return view('admin.settings', compact('settings'));
    }

    public function usersIndex()
    {
      $users = User::where('admin', 0)->with('payment')->get();

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
