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
  Route::get('/about', function () {
    return view('fresh-start.about');
  })->name('fresh-start.about');
  // Route::get('/register', function () {
  //   return view('fresh-start.register');
  // })->name('fresh-start.register');
  Route::get('/payment', function () {
      return view('fresh-start.payment');
  })->name('fresh-start.register');
  Route::get('/questionnaire', function () {
      return view('fresh-start.questionnaire');
  })->name('fresh-start.questionnaire');
  // Route::get('/login', function () {
  //   return view('fresh-start.login');
  // })->name('fresh-start.login');
});

Route::get('/contact', function () {
    return view('');
})->name('contact');


// Route::get('/logout', function () {
//   Auth::logout();
//   redirect('/');
// })->name('logout');
