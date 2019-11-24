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
})->name('500');
Route::post('/login', 'LoginController@authenticate')->name('login');
Route::post('/signup', 'LoginController@signup')->name('signup');
Route::get('logout', 'LoginController@logout')->name('logout');

// Route::get('/home', 'ViewController@gethilang');
// Route::get('/home', 'AdminController@index');

Route::get('/dashboard', 'UserController@index')->name('dashboard');
Route::get('/admin', 'AdminController@index');
Route::get('/temuan', 'ViewController@temuan');


Route::get('/riwayat.postingan.penemuan', function () {
    return view('page.riwayat_postingan_penemuan');
});

// riwayat postingan kehilangan
Route::get('/riwayat.postingan.kehilangan', 'UserController@postkehilangan');
Route::post('/post.kehilangan', 'UserController@post')->name('posthilang');
Route::post('/edit.kehilangan/{id}', 'UserController@edit')->name('editposthilang');

Route::get('/riwayat.klaim.penemuan', function () {
    return view('page.riwayat_klaim_penemuan');
});

// riwayat klaim kehilangan
Route::get('/riwayat.klaim.kehilangan', 'UserController@klaimkehilangan');

//  barang temuan
Route::get('/barang.temuan', 'TemuController@temuan');

// get klaim barang hilang
Route::post('/klaimhilang/{id}', 'CariController@postklaimhilang')->name('klaimhilang');

// barang hilang
Route::get('/barang.hilang', 'CariController@hilang');

// laporan klaim penemuan
Route::get('/laporan.klaim.penemuan', 'CariController@laporanklaim');

// show klaim di halaman laporanklaimpenemuan
Route::get('/showklaim', 'CariController@showklaim')->name('showklaim');

// validasi penemuan 
Route::post('/validasipenemuanterima/{id}', 'CariController@validasiterima')->name('validasipenemuanterima');

Route::get('/laporan.klaim.kehilangan', function () {
    return view('page.laporan_klaim_kehilangan');
});
Route::get('/ruang.email', function () {
    return view('page.ruang_email');
});
Route::get('/manajemen.akun', function () {
    return view('page.manajamen_akun');
});
Route::get('/profil', function() {
    return view('page.profil');
});
Route::get('/edit.profil', function() {
    return view('page.edit_profil');
});
Route::get('/edit.password', function() {
    return view('page.edit_password');
});
Route::get('/manajemen.akun', function() {
    return view('page.man_akun');
});

Route::get('/showposthilang', 'UserController@showposthilang')->name('showposthilang');
Route::get('/edit-post-hilang', 'UserController@showposthilang')->name('edithilang');
Route::get('/show-post-temu', 'UserController@showposttemu')->name('showposttemu');