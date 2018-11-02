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

// Route::get('/form', function () {
//     return view('form.form');
// });

// Route::get('/tambahdata', function () {
//     return view('form.form');
// });

// Route::get('form', [
//     'uses' => 'BarangController@create',
//     'as' => 'tambahBarang.create'
// ]);

// Route::post('tambahdata', [
//     'uses' => 'SongsController@store',
//     'as' => 'tambahBarang.store'
// ]);

Route::resource('barang','BarangController');