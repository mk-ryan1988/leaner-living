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
Route::get('/1', function () {
    return view('welcome-alt');
})->name('home alt');
Route::get('/stripe', function () {
    return view('stripe');
});
Route::post('/stripe', 'stripeController@index');

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
  Route::get('/register', function () {
    return view('fresh-start.register');
  })->name('fresh-start.register');
  Route::get('/login', function () {
    return view('fresh-start.login');
  })->name('fresh-start.login');
});

Route::get('/contact', function () {
    return view('');
})->name('contact');
