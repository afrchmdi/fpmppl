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
    return view(500);
});
// Route::post('login', 'LoginController@authenticate')->name('login');

// Route::get('/home', 'ViewController@gethilang');
// Route::get('/home', 'AdminController@index');
Route::get('/dashboard', 'UserController@index');
Route::get('/temuan', 'ViewController@temuan');
// Route::get('/dashboard', function(){
//     return view('page.dashboard');
// });
