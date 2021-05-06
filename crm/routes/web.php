<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/siswa', 'App\Http\Controllers\SiswaController@index');
Route::post('/create/siswa', 'App\Http\Controllers\SiswaController@create');



//untuk edit
Route::get('/siswa/{id}/edit', 'App\Http\Controllers\SiswaController@edit');
Route::post('/siswa/{id}/update', 'App\Http\Controllers\SiswaController@update');


//untuk delete
Route::get('/siswa/{id}/delete', 'App\Http\Controllers\SiswaController@delete');