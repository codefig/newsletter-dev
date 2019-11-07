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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', 'SignUpController@register')->name('register.post');

Route::get('/dashboard', function () {
    return view('users.dashboard');
})->name('dashboard');

Route::get('/logout', 'HomeController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/verify/{token}', 'VerificationController@verifyEmail')->name('verify');
