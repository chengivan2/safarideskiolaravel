<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/whyus', function () {
    return view('whyus');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/compliance', function () {
    return view('compliance');
});

Route::get('/about', function () {
    return view('about');
});