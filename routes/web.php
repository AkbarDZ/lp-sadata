<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\FiturController;
use App\Http\Controllers\BerandaController;

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
Route::get('/pricing', [BasicController::class, 'landing'])->name('pricing');


// Route::get('/pricing', function () {
//     return view('landing.features.pricing');
// });

Route::controller(BerandaController::class)->prefix('beranda')->group(function () {

    // main 
    Route::get('/main', 'index_main')->name('beranda.main');
    Route::get('/main-add', 'create_main')->name('beranda.create_main');
    Route::post('/main-add', 'store_main')->name('beranda.store_main');
    Route::get('/main-edit/{id}', 'edit_main')->name('beranda.edit_main');
    Route::put('/main-edit/{id}', 'update_main')->name('beranda.update_main');
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

Route::controller(FiturController::class)->prefix('fitur')->group(function () {

    Route::get('/main', 'indexdash')->name('fitur.main');
    Route::get('/main-add', 'create')->name('fitur.create');
    Route::post('/main-add', 'store')->name('fitur.store');
    Route::get('/main/{id}', 'show')->name('fitur.show');
    Route::get('/edit/{id}', 'edit')->name('fitur.edit');
    Route::put('/edit/{id}', 'update')->name('fitur.update');
    Route::delete('/delete/{id}', 'destroy')->name('fitur.delete');


    Route::get('/section2', 'indexdash2')->name('fitur.section2');
    Route::get('/section2-edit/{id}', 'edit2')->name('fitur.edit2');
    Route::put('/section2-edit/{id}', 'update2')->name('fitur.update2');

    Route::get('/section3', 'indexdash3')->name('fitur.section3');
    Route::get('/section3-edit/{id}', 'edit3')->name('fitur.edit3');
    Route::put('/section3-edit/{id}', 'update3')->name('fitur.update3');


    Route::get('/section4', 'indexdash4')->name('fitur.section4');
    Route::get('/section4-edit/{id}', 'edit4')->name('fitur.edit4');
    Route::put('/section4-edit/{id}', 'update4')->name('fitur.update4');

});

// //////////

Route::controller(BasicController::class)->prefix('harga')->group(function () {

// BASICS JUDUL
Route::get('/basicz', 'basicindex')->name('harga.basicz');
Route::get('/basicz-add', 'basiccreate')->name('harga.create');
Route::post('/basicz-add', 'basicstore')->name('harga.store');
Route::get('/basicz-edit/{id}', 'basicedit')->name('harga.edit');
Route::put('/basicz-edit/{id}', 'basicupdate')->name('harga.update');
Route::delete('/basicz-delete/{id}', 'basicdestroy')->name('harga.destroy');
// END BASIC JUDUL

// GENERAL
Route::get('/generalz', 'generalindex')->name('harga.generalz');
Route::get('/generalz-add', 'generalcreate')->name('harga.create_general');
Route::post('/generalz-add', 'generalstore')->name('harga.store_general');
Route::get('/generalz-edit/{id}', 'generaledit')->name('harga.edit_general');
Route::put('/generalz-edit/{id}', 'generalupdate')->name('harga.update_general');
Route::delete('/generalz-delete/{id}', 'generaldestroy')->name('harga.destroy_general');
// END GENERAL

// ATTENDANCE
Route::get('/attendancez', 'attendanceindex')->name('harga.attendancez');
Route::get('/attendancez-add', 'attendancecreate')->name('harga.create_attendance');
Route::post('/attendancez-add', 'attendancestore')->name('harga.store_attendance');
Route::get('/attendancez-edit/{id}', 'attendanceedit')->name('harga.edit_attendance');
Route::put('/attendancez-edit/{id}', 'attendanceupdate')->name('harga.update_attendance');
Route::delete('/attendancez-delete/{id}', 'attendancedestroy')->name('harga.destroy_attendance');
// END ATTENDANCE

// REPORT
Route::get('/reportz', 'reportindex')->name('harga.reportz');
Route::get('/reportz-add', 'reportcreate')->name('harga.create_report');
Route::post('/reportz-add', 'reportstore')->name('harga.store_report');
Route::get('/reportz-edit/{id}', 'reportedit')->name('harga.edit_report');
Route::put('/reportz-edit/{id}', 'reportupdate')->name('harga.update_report');
Route::delete('/reportz-delete/{id}', 'reportdestroy')->name('harga.destroy_report');
// END REPORT

// DROPSEL
Route::get('/dropselz', 'dropselindex')->name('harga.dropselz');
Route::get('/dropselz-add', 'dropselcreate')->name('harga.create_dropsel');
Route::post('/dropselz-add', 'dropselstore')->name('harga.store_dropsel');
Route::get('/dropselz-edit/{id}', 'dropseledit')->name('harga.edit_dropsel');
Route::put('/dropselz-edit/{id}', 'dropselupdate')->name('harga.update_dropsel');
Route::delete('/dropselz-delete/{id}', 'dropseldestroy')->name('harga.destroy_dropsel');
// END DROPSEL

// PRICING TITLE
Route::get('/pricingz', 'pricingindex')->name('harga.pricingz');
Route::get('/pricingz-add', 'pricingcreate')->name('harga.create_pricing');
Route::post('/pricingz-add', 'pricingstore')->name('harga.store_pricing');
Route::get('/pricingz-edit/{id}', 'pricingedit')->name('harga.edit_pricing');
Route::put('/pricingz-edit/{id}', 'pricingupdate')->name('harga.update_pricing');
Route::delete('/pricingz-delete/{id}', 'pricingdestroy')->name('harga.destroy_pricing');
// END PRICING TITLE

});


