<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/payment', function () {
    return view('auth.payment');
})->name('payment');

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::prefix('fresh-start')->group(function () {
  Route::get('/about', function () {
    return view('fresh-start.about');
  })->name('fresh-start.about');
  Route::get('/PAR-Q', function () {
      return view('auth.PAR-Q');
  })->name('fresh-star.par-q');
  Route::get('/questionnaire', function () {
      return view('fresh-start.questionnaire');
  })->name('fresh-start.questionnaire');
  Route::get('/questionnaire1', 'QuestionnaireController@index')->name('fresh-start.questionnaire1');
});

Route::middleware('auth')->group(function () {
  Route::prefix('fresh-start')->group(function () {
    Route::get('/dashboard', function () {
      return view('fresh-start.dashboard', ['user' => Auth::user()]);
    })->name('fresh-start.dashboard');
  });
});

// Route::get('/profile', 'ProfileController@index')->name('profile');


Route::get('/logout', function () {
  Auth::logout();
  redirect('/');
})->name('logout');

// Api routes
Route::prefix('api')->group(function () {
  Route::post('/charge', 'stripeController@index');
  Route::post('/parq', 'ParqController@store');
  Route::post('/questionnaire', 'QuestionnaireController@store');
  Route::post('/stats', 'StatsController@store');
  Route::post('/picUpload', 'PicsController@store');
});
