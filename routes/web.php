<?php

use GuzzleHttp\RetryMiddleware;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('home');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', 'Auth\LoginController@login')->name('login');



Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', 'Auth\RegisterController@register')->name('register');

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');