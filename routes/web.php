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

Route::get('estimasi','EstimateController@index');
Route::get('blog','BlogController@index');
Route::get('tentang','AboutController@index');
Route::get('/pesanan', 'PesananController@daftar');
Route::post('pesanan/tambah','PesananController@pesan');
Route::get('/washadmin', 'AdminController@index');
Route::get('/washadmin/update/{id}', 'AdminController@update');
