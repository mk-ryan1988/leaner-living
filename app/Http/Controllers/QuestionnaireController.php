<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\QuestionnaireAnswer;
use App\QuestionnaireQuestion;

class QuestionnaireController extends Controller
{
    public function index() {

      $questions = QuestionnaireQuestion::with('options')->get();

      $groupedQs = $questions->groupBy('section');
      $groupedQs->toArray();

      return view('fresh-start.questionnaire', ['qroupedQs' => $groupedQs]);
    }
    public function store(Request $request) {

      foreach ($request->all() as $key => $input) {
        if ($key !== '_token') {
          $answer = new QuestionnaireAnswer;
          $answer->user_id = Auth::id();
          $answer->name = $key;
          $answer->value = $input;
          $answer->save();
        }
      }

      $completed = User::find(Auth::id());
      $completed->questionnaire = 1;
      $completed->save();

      return redirect(route('fresh-start.dashboard'));
    }
}
