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

Route::get('/karyawans', 'KaryawanController@index')->name('karyawans.index');
Route::get('/karyawans/create', 'KaryawanController@create')->name('karyawans.create');
Route::post('/karyawans', 'KaryawanController@store')->name('karyawans.store');