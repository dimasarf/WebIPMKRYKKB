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
Route::get('/galleries/{id}','GalleriesController@indexFoto');
Route::get('/galleries','GalleriesController@index');
Route::post('/post-berita', 'TesKontenController@store');
Route::get('/', 'HalamanUtamaController@index');
Route::get('/post-berita', 'TesKontenController@index');
Route::get('/post/{id}', 'DetailContentController@index');
Route::get('/Sunting-Konten/{id}', 'TesKontenController@show');
Route::post('/Sunting-Konten/{id}', 'TesKontenController@update');
Route::get('/alumni', 'HalamanUtamaController@indexAlumni');
Route::post('upload', 'UploadController@upload');
Route::post('reply/{id}', 'ReplyController@Reply');
Route::get('/news/{id}','NewsController@indexEvent');
Route::get('/news','NewsController@index');
Route::get('/Dashboard-Galeri', 'DashboardController@indexGaleri');
Route::get('/Detail-Foto/{id}', 'DashboardController@getFotos');
Route::get('/img-download/{id}', 'GalleriesController@Download');
Route::get('upload', function()
{
  return view('berita');
});
Route::delete('/Delete-Foto/{idfoto}','UploadController@deleteFoto');
Route::post('bikin-album', 'AlbumController@StoreNewAlbum');
Route::get('bikin-album', function()
{
  return view('album');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('registrasi-selesai', function(){
  return view('Selesai');
});
Route::get('Dashboard','DashboardController@index');
Route::get('Dashboard-Postingan','DashboardController@indexPostingan');
Route::get('Dashboard-Pengurus','DashboardController@indexPengurus')->name('dashboard.pengurus');
Route::get('Dashboard-Anggota-Biasa','DashboardController@indexAnggotaBiasa')->name('dashboard.anggotaBiasa');
Route::get('Dashboard-Search','DashboardController@Search')->name('dashboard.search');
Route::get('registrasi-anggota', 'Anggota2Controller@index');
Route::post('delete', 'Anggota2Controller@delete');
Route::post('edit-anggota', 'Anggota2Controller@editAnggota');
Route::post('registrasi-anggota', 'Anggota2Controller@store');
Route::get('registrasi-pengurus', 'Anggota2Controller@indexPengurus');
Route::post('registrasi-pengurus', 'Anggota2Controller@storePengurus');
Route::get('exportPengurus','DashboardController@ExportPengurus')->name('export.pengurus');
Route::get('exportAnggotaBiasa','DashboardController@ExportAnggotaBiasa')->name('export.anggotaBiasa');
