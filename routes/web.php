<?php

use Illuminate\Support\Facades\Auth;
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
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/amanahRegister', function () {
    return view('amanahRegister');
});
Route::get('/bank-account', function () {
    return view('bank-account');
});
Route::get('/document-request', function () {
    return view('document-request');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
Route::get('/ready-to-go', function () {
    return view('ready-to-go');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/silaRegister', function () {
    return view('silaRegister');
});

Route::get('/transaction-hestory', function () {
    return view('transaction-hestory');
});

Route::get('/verification', function () {
    return view('verification');
});

Route::get('/index', function () {
    return view('index');
});
