<?php

use App\Http\Controllers\autentikasi;
use App\Http\Controllers\buyercontroller;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\customer;
use App\Http\Controllers\kontakcontroller;
use App\Http\Controllers\landingpage;
use App\Http\Controllers\penggunacontroller;
use App\Http\Controllers\produksingleController;
use App\Http\Controllers\transaksiController;
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

Route::get('/kitkat', function () {
    return view('landingpage.landing');
});

Route::get('/buy', [landingpage::class, 'index']);

Route::get('/kitkat', function () {
    return view('landingpage.landing');
});

Route::get('/product', function () {
    return view('landingpage.product');
});

Route::get('/contact', function () {
    return view('landingpage.contact');
});


Route::post('/dashboard/form-contact', [kontakcontroller::class, 'store']);
Route::get('/dashboard/message', [kontakcontroller::class, 'index']);
Route::delete('/dashboard/hapusmessage/{id}', [kontakcontroller::class, 'destroy']);
Route::controller(autentikasi::class)->group(function(){

    Route::get('login', 'index')->name('login');

    Route::get('registration', 'registration')->name('registration');

    Route::get('logout', 'logout')->name('logout');

    Route::post('validate_registration', 'validate_registration')->name('sample.validate_registration');

    Route::post('validate_login', 'validate_login')->name('sample.validate_login');

    Route::get('dashboard', 'dashboard')->name('dashboard');

});


Route::controller(buyercontroller::class)->group(function(){

    Route::get('/', 'indexlp')->name('loginlp');

    Route::get('registrationlp', 'registrationlp')->name('registrationlp');

    Route::get('logoutlp', 'logoutlp')->name('logoutlp');

    Route::post('validate_registrationlp', 'validate_registrationlp')->name('sample.validate_registrationlp');

    Route::post('validate_loginlp', 'validate_loginlp')->name('sample.validate_loginlp');

    Route::get('dashboardlp', 'dashboardlp')->name('dashboardlp');

});

Route::get('/auth/google',[GoogleAuthController::class,'login'])->name('google-auth');
Route::get('/auth/google/call-back',[GoogleAuthController::class,'callbackGoogle']);

Route::prefix("db")->group(function() {
    Route::get('/', function(){
        return view('dashboard.dashboard');
    })->name('db');

});

// produksingle
Route::get('/dashboard/product-single', [produksingleController::class, 'index']);
Route::get('/dashboard/form-produk', [produksingleController::class, 'create']);
Route::post('/dashboard/form-produk', [produksingleController::class, 'store']);
Route::delete('/dashboard/hapusproduk/{id}', [produksingleController::class, 'destroy']);
Route::get('/dashboard/detailproduk/{id}', [produksingleController::class, 'show']);
Route::get('/dashboard/{id}/editproduk', [produksingleController::class, 'edit']);
Route::put('/dashboard/simpaneditproduk/{id}', [produksingleController::class, 'update']);

// pengguna
Route::get('/dashboard/user', [penggunacontroller::class, 'index']);
Route::get('/dashboard/form-user', [penggunaController::class, 'create']);
Route::post('/dashboard/form-user', [penggunaController::class, 'store']);
Route::get('/dashboard/detailuser/{id}', [penggunaController::class, 'show']);
Route::delete('/dashboard/hapususer/{id}', [penggunaController::class, 'destroy']);
Route::get('/dashboard/{id}/edituser', [penggunaController::class, 'edit']);
Route::put('/dashboard/simpanedituser/{id}', [penggunaController::class, 'update']);


// transaksi
Route::get('/dashboard/range', [transaksiController::class, 'index']);
Route::get('/dashboard/form-transaksi', [transaksiController::class, 'create']);
Route::post('/dashboard/form-transaksi', [transaksiController::class, 'store']);
Route::get('/dashboard/detailtransaksi/{id}', [transaksiController::class, 'show']);
Route::delete('/dashboard/hapustransaksi/{id}', [transaksiController::class, 'destroy']);
Route::get('/dashboard/{id}/edittransaksi', [transaksiController::class, 'edit']);
Route::put('/dashboard/simpanedittransaksi/{id}', [transaksiController::class, 'update']);
Route::get('/dashboard/form-trans', [transaksiController::class, 'buat']);
Route::post('/dashboard/form-trans', [transaksiController::class, 'simpan']);

// export
Route::get('/exportexcel', [transaksiController::class, 'exportexcel']);
Route::get('/exportpdf', [transaksiController::class, 'exportpdf']);

//import
Route::post('/importexcel', [transaksiController::class, 'importexcel']);