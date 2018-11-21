<?php

namespace App\Http\Controllers;

use Auth;
use Mail;
use App\User;
use Illuminate\Http\Request;
use App\QuestionnaireAnswer;
use App\QuestionnaireQuestion;
use App\Mail\QuestionnaireResponse;

class QuestionnaireController extends Controller
{
    public function index() {

      $questions = QuestionnaireQuestion::with('options')->get();

      $groupedQs = $questions->groupBy('section');
      $groupedQs->toArray();

      return view('fresh-start.questionnaire', ['qroupedQs' => $groupedQs]);
    }
    public function store(Request $request) {
      
      // dd($request->all());
      $mailData = $request->all();

      if (!$request->has('s2q2')) {
        $mailData['s2q2'] = null;
      } 
      if (!$request->has('s2q3')) {
        $mailData['s2q3'] = null;
      } 
      if (!$request->has('s4q4')) {
        $mailData['s4q4'] = null;
      }
// dd($mailData);
      // foreach ($request->all() as $key => $input) {
      //   if ($key !== '_token') {
      //     $answer = new QuestionnaireAnswer;
      //     $answer->user_id = Auth::id();
      //     $answer->name = $key;
      //     $answer->value = $input;
      //     $answer->save();
      //   }
      // }

      // $completed = User::find(Auth::id());
      // $completed->questionnaire = 1;
      // $completed->save();

      Mail::to('freshstart@leaner-living.com')->send(new QuestionnaireResponse($mailData));
// dd('done');
      return redirect(route('fresh-start.welcome'));
    }
}
