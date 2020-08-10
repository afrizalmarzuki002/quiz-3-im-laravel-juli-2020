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

Route::get('/', 'ItemController@proyek');
Route::get('/proyek', 'ItemController@index');
Route::get('/proyek/create', 'ItemController@create'); // menampilkan halaman form
Route::post('/proyek', 'ItemController@store'); // menyimpan data
Route::get('/proyek', 'ItemController@index'); // menampilkan semua
Route::get('/proyek/{id}', 'ItemController@show'); // menampilkan detail item dengan id 
Route::get('/proyek/{id}/edit', 'ItemController@edit'); // menampilkan form untuk edit item
Route::put('/proyek/{id}', 'ItemController@update'); // menyimpan perubahan dari form edit
Route::delete('/proyek/{id}', 'ItemController@destroy'); // menghapus data dengan id