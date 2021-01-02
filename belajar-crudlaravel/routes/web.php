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

// Route::get('/karyawans', 'KaryawanController@index')->name('karyawans.index');
// Route::get('/karyawans/create', 'KaryawanController@create')->name('karyawans.create');
// Route::post('/karyawans', 'KaryawanController@store')->name('karyawans.store');
// Route::get('/karyawans/{karyawan}', 'KaryawanController@show')->name('karyawans.show');
// Route::get('/karyawans/{karyawan}/edit', 'KaryawanController@edit')->name('karyawans.edit');
// Route::patch('/karyawans/{karyawan}', 'KaryawanController@update')->name('karyawans.update');
// Route::delete('/karyawans/{karyawan}', 'KaryawanController@destroy')->name('karyawans.destroy');
Route::resource('/karyawans', 'KaryawanController');

Route::get('/file-upload', 'FileUploadController@fileUpload');
Route::post('/file-upload', 'FileUploadController@prosesFileUpload');

Route::get('/file-upload-rename', 'FileUploadController@fileUploadRename');
Route::post('/file-upload-rename', 'FileUploadController@prosesFileUploadRename');



Route::get('/students', 'StudentController@index')->name('students.index');
Route::get('/students/create', 'StudentController@create')->name('students.create');
Route::post('/students', 'StudentController@store')->name('students.store');
Route::get('/students/{murid}', 'StudentController@show')->name('students.show');