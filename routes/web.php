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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('registrasi-selesai', function(){
  return view('Selesai');
});
Route::get('Dashboard','DashboardController@index');
Route::get('Dashboard/Pengurus','DashboardController@indexPengurus');
Route::get('Dashboard/Anggota-Biasa','DashboardController@indexAnggotaBiasa');
Route::get('registrasi-anggota2', 'Anggota2Controller@index');
Route::post('registrasi-anggota2', 'Anggota2Controller@store');
Route::get('exportPengurus','DashboardController@ExportPengurus')->name('export.pengurus');
Route::get('exportAnggotaBiasa','DashboardController@ExportAnggotaBiasa')->name('export.anggotaBiasa');
