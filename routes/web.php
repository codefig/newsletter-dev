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

Route::get('/', 'SignUpController@index')->name('index');
Route::get('/login', 'SignUpController@showLogin')->name('login');
Route::get('/register', 'SignUpController@showRegister')->name('register');
Route::post('/register', 'SignUpController@register')->name('register.post');
Route::post('/login', 'SignUpController@login')->name('login.post');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/compose', 'HomeController@compose')->name('compose');
Route::get('/email', 'HomeController@email')->name('email');
Route::get('/logout', 'HomeController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/verify/{token}', 'VerificationController@verifyEmail')->name('verify');
