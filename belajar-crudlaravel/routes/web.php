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
Route::resource('/gallery', 'GalleryController');

// Route::get('/file-upload', 'FileUploadController@fileUpload');
// Route::post('/file-upload', 'FileUploadController@prosesFileUpload');

// Route::get('/file-upload-rename', 'FileUploadController@fileUploadRename');
// Route::post('/file-upload-rename', 'FileUploadController@prosesFileUploadRename');



Route::get('/students', 'StudentController@index')->name('students.index');
Route::get('/students/create', 'StudentController@create')->name('students.create');
Route::post('/students', 'StudentController@store')->name('students.store');
Route::get('/students/{murid}', 'StudentController@show')->name('students.show');
Route::get('/students/{murid}/edit', 'StudentController@edit')->name('students.edit');
Route::patch('/students/{murid}', 'StudentController@update')->name('students.update');
Route::delete('/students/{murid}', 'StudentController@destroy')->name('students.destroy');


Route::get('/employes', 'EmployeController@index')->name('employes.index');
Route::get('/employes/create', 'EmployeController@create')->name('employes.create');
Route::post('/employes', 'EmployeController@store')->name('employes.store');
Route::get('/employes/{employe}', 'EmployeController@show')->name('employes.show');
Route::get('/employes/{employe}/edit', 'EmployeController@edit')->name('employes.edit');
Route::patch('/employes/{employe}', 'EmployeController@update')->name('employes.update');
Route::delete('/employes/{employe}', 'EmployeController@destroy')->name('employes.destroy');



//Session
Route::get('/', 'SessionController@index');
Route::get('/buat-session', 'SessionController@buatSession');
Route::get('/akses-session', 'SessionController@aksesSession');
Route::get('/hapus-session', 'SessionController@hapusSession');
Route::get('/flash-session', 'SessionController@flashSession');

//Login Middleware
Route::get('/login', 'LoginController@login');
Route::post('/login', 'LoginController@prosesLogin');
Route::get('/logout', 'LoginController@logout');
Route::redirect('/', '/login');
Route::get('/daftar-karyawan', 'LoginController@daftarKaryawan');
Route::get('/table-karyawan', 'LoginController@tableKaryawan');
Route::get('/blog-karyawan', 'LoginController@blogKaryawan');



//Middleware
// Route::get('/daftar-karyawan', 'DataController@daftarKaryawan');
// Route::get('/table-karyawan', 'DataController@tableKaryawan');
// Route::get('/blog-karyawan', 'DataController@blogKaryawan');

