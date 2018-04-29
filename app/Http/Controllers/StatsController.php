<?php

namespace App\Http\Controllers;

use Auth;
use App\Stats;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function store(Request $request) {

      $validator = Validator::make($request->all(), [
        'chest' => 'required',
        'waist' => 'required',
        'left_leg' => 'required',
        'right_leg' => 'required',
        'left_arm' => 'required',
        'right_arm' => 'required',
        'current_weight' => 'required',
        'target_weight' => 'required',
      ]);

      if ($validator->fails()) {

        return redirect()->route('fresh-start.dashboard')->with('stats_error');

      }else {

        $stats = new Stats;
        $stats->user_id = Auth::id();
        $stats->chest = $request->chest;
        $stats->waist = $request->waist;
        $stats->left_leg = $request->left_leg;
        $stats->right_leg = $request->right_leg;
        $stats->left_arm = $request->left_arm;
        $stats->right_arm = $request->right_arm;
        $stats->current_weight = $request->current_weight;
        $stats->target_weight = $request->target_weight;
        $stats->save();

        return redirect()->route('fresh-start.dashboard');
      }
    }
}
