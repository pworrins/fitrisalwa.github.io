<?php

use Illuminate\Support\Facades\Route;
use App\Models\Produk;

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
    $data['produk'] = Produk::all();
    return view('welcome', $data);
            });
Route::get('/detailproduk/{id}', function ($id) {
    $data['data'] = Produk::where('id', $id)->first();
    return view('detail_produk', $data);
})->name('detailproduk');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth','level'])->name('home');
Route::resource('/produk', App\Http\Controllers\ProdukController::class);
Route::resource('/kategori', App\Http\Controllers\KategoriController::class);
Route::get('/produk_pdf', [App\Http\Controllers\ProdukPDFController::class, 'cetak_pdf'])->name('produk_pdf');
Route::get('/kategori_pdf', [App\Http\Controllers\KategoriPDFController::class, 'cetak_pdf'])->name('kategori_pdf');