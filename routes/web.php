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
Route::get('/404', function(){
    return abort(404);
});
Route::get('/500', function(){
    return abort(500);
});
// Route::get('/home', 'ViewController@gethilang');
Route::get('/home', function(){
    return view('page.home');
});
Route::get('/dashboard', function(){
    return view('page.dashboard');
});
Route::get('/temuan', function(){
    return view('page.temuan');
});