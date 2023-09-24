<?php

use App\Http\Controllers\BerandaController;
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

Route::get('/home', [BerandaController::class, 'show']);

Route::get('/hrms', function () {
    return view('landing.features.hrms');
});

Route::get('/pricing', function () {
    return view('landing.features.pricing');
});

Route::controller(BerandaController::class)->prefix('beranda')->group(function () {

    // main 
    Route::get('/main', 'index_main')->name('beranda.main');
    Route::get('/main-add', 'create_main')->name('beranda.create_main');
    Route::post('/main-add', 'store_main')->name('beranda.store_main');
    Route::get('/main-edit/{id}', 'edit_main')->name('beranda.edit_main');
    Route::put('/main-edit/{id}', 'update_main')->name('beranda.edit_main');
    Route::delete('/main-delete/{id}', 'destroy_main')->name('beranda.delete_main');

    // apps 
    Route::get('/apps', 'index_apps')->name('beranda.apps');
    Route::get('/apps-add', 'create_apps')->name('beranda.create_apps');
    Route::post('/apps-add', 'store_apps')->name('beranda.store_apps');
    Route::get('/apps-edit/{id}', 'edit_apps')->name('beranda.edit_apps');
    Route::put('/apps-edit/{id}', 'update_apps')->name('beranda.update_apps');
    Route::delete('/apps-delete/{id}', 'destroy_apps')->name('beranda.delete_apps');

    // fitur 
    Route::get('/fitur', 'index_fitur')->name('beranda.fitur');
    Route::get('/fitur-add', 'create_fitur')->name('beranda.create_fitur');
    Route::post('/fitur-add', 'store_fitur')->name('beranda.store_fitur');
    Route::get('/fitur-edit/{id}', 'edit_fitur')->name('beranda.edit_fitur');
    Route::put('/fitur-edit/{id}', 'update_fitur')->name('beranda.update_fitur');
    Route::delete('/fitur-delete/{id}', 'destroy_fitur')->name('beranda.delete_fitur');

    // mobile 
    Route::get('/mobile', 'index_mobile')->name('beranda.mobile');
    Route::get('/mobile-add', 'create_mobile')->name('beranda.create_mobile');
    Route::post('/mobile-add', 'store_mobile')->name('beranda.store_mobile');
    Route::get('/mobile-edit/{id}', 'edit_mobile')->name('beranda.edit_mobile');
    Route::put('/mobile-edit/{id}', 'update_mobile')->name('beranda.update_mobile');
    Route::delete('/mobile-delete/{id}', 'destroy_mobile')->name('beranda.delete_mobile');

    // summary 
    Route::get('/summary', 'index_summary')->name('beranda.summary');
    Route::get('/summary-add', 'create_summary')->name('beranda.create_summary');
    Route::post('/summary-add', 'store_summary')->name('beranda.store_summary');
    Route::get('/summary-edit/{id}', 'edit_summary')->name('beranda.edit_summary');
    Route::put('/summary-edit/{id}', 'update_summary')->name('beranda.update_summary');
    Route::delete('/summary-delete/{id}', 'destroy_summary')->name('beranda.delete_summary');
    
    
});


