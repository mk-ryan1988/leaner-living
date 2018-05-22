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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::prefix('fresh-start')->group(function () {
  Route::get('/about', 'FreshController@about')->name('fresh-start.about');
  Route::get('/par-q', function () {
      return view('auth.PAR-Q');
  })->name('fresh-start.par-q');
  Route::get('/payment', function () {
      if (Auth::check()) {
        if (Auth::user()->admin == 1) {
          return redirect()->route('admin.overview');
        }else {
          return view('auth.payment');
        }
      }else {
        return view('auth.payment');
      }
  })->name('payment');
  Route::get('/questionnaire', 'QuestionnaireController@index')->name('fresh-start.questionnaire');
});

Route::prefix('errors')->group(function () {
  Route::get('/403', function () {
    return view('errors.403');
  });
});

Route::middleware('auth')->group(function () {
  Route::prefix('fresh-start')->group(function () {
    Route::get('/dashboard', function () {
      if (Auth::check()) {
        if (Auth::user()->admin == 1) {
          return redirect()->route('admin.overview');
        }else {
          return view('fresh-start.dashboard', ['user' => Auth::user()]);
        }
      }
    })->name('fresh-start.dashboard');
  });
  Route::prefix('admin')->group(function () {
    Route::get('/overview', 'AdminController@overview')->name('admin.overview');
    Route::get('/parq/{id}', 'AdminController@parq')->name('admin.parq');
    Route::get('/users', 'AdminController@usersIndex')->name('admin.users');
    Route::get('/users/{id}', 'AdminController@userShow')->name('admin.userShow');
    Route::get('/settings', 'AdminController@settings')->name('admin.settings');
  });
});

Route::post('/contact-form', 'ContactController@postForm');



// Api routes
Route::prefix('api')->group(function () {
  Route::post('/charge', 'stripeController@index');
  Route::post('/parq', 'ParqController@store');
  Route::post('/questionnaire', 'QuestionnaireController@store');
  Route::post('/stats', 'StatsController@store');
  Route::post('/picUpload', 'PicsController@store');
  Route::post('/settings', 'SettingsController@update');
});
