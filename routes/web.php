<?php

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
    return view('page.home');
});
Route::get('/404', function () {
    return abort(404);
});
Route::get('/500', function () {
    return abort(500);
});
// Route::post('login', 'LoginController@authenticate')->name('login');

// Route::get('/home', 'ViewController@gethilang');
// Route::get('/home', 'AdminController@index');
Route::get('/dashboard', 'UserController@index');
Route::get('/temuan', 'ViewController@temuan');

// mentah
Route::get('/riwayat.postingan.penemuan', function () {
    return view('page.riwayat_postingan_penemuan');
});
Route::get('/riwayat.postingan.kehilangan', function () {
    return view('page.riwayat_postingan_kehilangan');
});
Route::get('/riwayat.klaim.penemuan', function () {
    return view('page.riwayat_klaim_penemuan');
});
Route::get('/riwayat.klaim.kehilangan', function () {
    return view('page.riwayat_klaim_kehilangan');
});
Route::get('/barang.temuan', function () {
    return view('page.barang_temuan');
});
Route::get('/barang.hilang', function () {
    return view('page.barang_hilang');
});
Route::get('/laporan.klaim.penemuan', function () {
    return view('page.laporan_klaim_penemuan');
});
Route::get('/laporan.klaim.kehilangan', function () {
    return view('page.laporan_klaim_kehilangan');
});
Route::get('/ruang.email', function () {
    return view('page.ruang_email');
});
Route::get('/manajemen.akun', function () {
    return view('page.manajamen_akun');
});