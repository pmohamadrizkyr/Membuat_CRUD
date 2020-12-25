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
Route::get('/karyawans/{karyawan}', 'KaryawanController@show')->name('karyawans.show');

Route::get('/students', 'StudentController@index')->name('students.index');
Route::get('/students/create', 'StudentController@create')->name('students.create');
Route::post('/students', 'StudentController@store')->name('students.store');
Route::get('/students/{murid}', 'StudentController@show')->name('students.show');