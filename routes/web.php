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
Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/pesanan', 'PesananController@daftar');
Route::post('/pesanan/tambah','PesananController@pesan');
Route::get('/pesanan/cetak/{id}', 'PesananController@cetak');
Route::get('/washadmin', 'AdminController@index');
Route::get('/washadmin/update/{id}', 'AdminController@update');
Route::post('/washadmin/simpan', 'AdminController@simpan');
Route::get('/washadmin/cetak/{id}', 'AdminController@cetak');
Route::get('/washadmin/hapus/{id}','AdminController@hapus');
Route::get('/washadmin/harga', 'AdminController@harga');
Route::get('/washadmin/up/{id}','AdminController@updateharga');
Route::post('/washadmin/up/simpan','AdminController@simpanharga');
Route::get('/washadmin/do', 'AdminController@do');
Route::get('/washadmin/do/{id}','AdminController@updatedo');
Route::post('/washadmin/do/simpan','AdminController@simpando');
