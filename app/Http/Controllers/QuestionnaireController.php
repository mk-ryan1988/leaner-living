<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\QuestionnaireAnswer;
use App\QuestionnaireQuestion;

class QuestionnaireController extends Controller
{
    public function index() {

      $qustions = QuestionnaireQuestion::with('options')->get();

      $groupedQs = $qustions->groupBy('section');
      $groupedQs->toArray();

      return view('fresh-start.questionnaire1', ['qroupedQs' => $groupedQs]);
    }
    public function store(Request $request) {

      // foreach ($request->all() as $key => $input) {
      //   $answer = new QuestionnaireAnswer;
      //   $answer->user_id = 1;
      //   $answer->name = $key;
      //   $answer->value = $input;
      //   $answer->save();
      // }
      return redirect(route('profile'));
    }
}
