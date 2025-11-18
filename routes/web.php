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
    return view('landing.login.login');
})->name('login');



Route::prefix('dashboard')->group(function () {
    Route::view('/', 'landing.dashboard.dashboard')->name('dashboard');
});


Route::prefix('transaksi')->group(function () {
    Route::view('/transaksi','landing.transaksi.transaksi')->name('transaksi');
    
});

Route::name('customer.')->prefix('customer')->group(function () {
    Route::view('/customer','landing.customer.customer')->name('customer');
    Route::view('/detail','landing.customer.customer-detail')->name('detail');
    
});
