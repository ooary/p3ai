<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard',function(){
	return View('dashboard.overview');
});
Route::resource('/dashboard/news','NewsController');
Route::resource('/dashboard/dosen','DosenController');
Route::get('/dashboard/dosen/{nip}/detail','DosenController@detailDosen');
Route::resource('/dashboard/serdos','SerdosController');
Route::resource('/dashboard/jurusan','JurusanController');
Route::resource('/dashboard/pangkat','PangkatController');	
Route::resource('/dashboard/golongan','GolonganController');
Route::resource('/dashboard/download','DownloadController');
Route::get('/dashboard/download/{nama}/get','DownloadController@downloadFile');
Route::resource('/dashboard/adm','AdministrasiController');
Route::get('/dashboard/adm/{nip}/detail','AdministrasiController@detailAdm');
//route Gallery
Route::get('/dashboard/gallery','GalleryController@index');
Route::post('/dashboard/gallery/store','GalleryController@store');
Route::get('/dashboard/gallery/destroy/{id}','GalleryController@destroy');
Route::get('/dashboard/gallery/{id}/edit','GalleryController@edit');
Route::post('/dashboard/gallery/upload','GalleryController@upload');
Route::get('/dashboard/gallery/{id}/delete','GalleryController@deleteImg');
