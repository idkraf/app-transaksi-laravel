<?php


use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PenjualanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Supplier Routes
Route::resource('supplier', SupplierController::class);

// Transaksi Routes
Route::resource('transaksi', TransaksiController::class);

// Pembelian Routes
Route::resource('pembelian', PembelianController::class);

// Penjualan Routes
Route::resource('penjualan', PenjualanController::class);