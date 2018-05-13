<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class FreshController extends Controller
{
    public function about() {
      //sets the month afer next
      $nextMonth = now()->addMonth();
      
      //Initializes fresh-start places variable
      $newStarters = 0;

      //Gets all freshstart payments
      $starters = Payment::all();

      //Loops throught payments and if commence_at is next month add 1 to $newStarters
      foreach ($starters as $key => $starter) {
        $commenceDate = new Carbon($starter->commence_at);
        if ($commenceDate->isNextMonth() ) {
          $newStarters++;
        }
      }

      return view('fresh-start.about', compact('newStarters'));
    }
}
