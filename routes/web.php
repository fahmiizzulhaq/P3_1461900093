<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\BarangController;

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
    return view('0093home');
});
Route::get('/0093barang', function () {
    return view('0093barang');
});
Route::get('/0093pelanggan', function () {
    return view('0093pelanggan');
});
Route::get('/0093transaksi', function () {
    return view('0093transaksi');
});
Route::get('/0093user', function () {
    return view('0093user');
});
Route::get('/0093barang/barang_tambah', function () {
    return view('barang_tambah');
});
Route::get('/0093pelanggan/pelanggan_tambah', function () {
    return view('pelanggan_tambah');
});
Route::get('/0093transaksi/transaksi_tambah', function () {
    return view('transaksi_tambah');
});
Route::get('/0093user/user_tambah', function () {
    return view('user_tambah');
});
Route::resource('barang', 'app\Http\Controllers\BarangController::class');
