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

Route::get('/home', function () {
    return view('landing.home');
});

Route::get('/hrms', function () {
    return view('landing.features.hrms');
});

Route::get('/pricing', function () {
    return view('landing.features.pricing');
});

Route::get('/dashboard', function () {
    return view('dashboard.admin');
});

