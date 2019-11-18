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
    return view('home');
});
Route::get('/login','UserController@login');
Route::get('register','UserController@regist');
Route::get('estimasi','EstimateController@index');
Route::get('blog','BlogController@index');
Route::get('tentang','AboutController@index');
Route::post('pesanan/tambah','PesananController@pesan');
Route::get('pesanan/cek','PesananController@cek');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
