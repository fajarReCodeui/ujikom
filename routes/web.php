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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'kategori'], function(){
    route::get('/','Kategori\KategoriController@index')->name('kategori');
    route::get('/edit','Kategori\KategoriController@edit')->name('kategori.edit');
});

Route::group(['prefix' => 'brand'], function () {
    route::get('/', 'Brand\BrandController@index')->name('brand');
    route::get('/edit', 'Brand\BrandController@edit')->name('brand.edit');
});

Route::group(['prefix' => 'satuan'], function () {
    route::get('/', 'Uom\UomController@index')->name('satuan');
    route::get('/edit', 'Uom\UomController@edit')->name('satuan.edit');
});

Route::group(['prefix' => 'master-barang'], function () {
    route::get('/', 'Masterbarang\MasterbarangController@index')->name('master-barang');
    route::get('/add', 'Masterbarang\MasterbarangController@create')->name('master-barang.add');
    route::get('/edit', 'Masterbarang\MasterbarangController@edit')->name('master-barang.edit');
    route::get('/request', 'Masterbarang\RequestbarangController@edit')->name('master-barang.request');
    route::get('/show', 'Masterbarang\MasterbarangController@show')->name('master-barang.show');
});

Route::group(['prefix' => 'transaksi'], function () {
    route::get('/in', 'Transaksi\InController@index')->name('transaksi.in');
    route::get('/out', 'Transaksi\OutController@index')->name('transaksi.out');
});
