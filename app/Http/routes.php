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
//News
Route::resource('/dashboard/news','NewsController');
//dosen
Route::resource('/dashboard/dosen','DosenController');
Route::get('/dashboard/dosen/{nip}/detail','DosenController@detailDosen');
//serdos
Route::resource('/dashboard/serdos','SerdosController');
//jurusan
Route::resource('/dashboard/jurusan','JurusanController');
//pangkat
Route::resource('/dashboard/pangkat','PangkatController');	
//golongan
Route::resource('/dashboard/golongan','GolonganController');
//Download
Route::resource('/dashboard/download','DownloadController');
Route::get('/dashboard/download/{nama}/get','DownloadController@downloadFile');
//adm
Route::resource('/dashboard/adm','AdministrasiController');
Route::get('/dashboard/adm/{nip}/detail','AdministrasiController@detailAdm');
//route Gallery
Route::get('/dashboard/gallery','GalleryController@index');
Route::post('/dashboard/gallery/store','GalleryController@store');
Route::get('/dashboard/gallery/destroy/{id}','GalleryController@destroy');
Route::get('/dashboard/gallery/{id}/edit','GalleryController@edit');
Route::post('/dashboard/gallery/upload','GalleryController@upload');
Route::get('/dashboard/gallery/{id}/delete','GalleryController@deleteImg');
//workshop
Route::resource('/dashboard/workshop','WorkshopController');
//workshop file like SK and Materi
Route::get('/dashboard/workshop/{id}/materi','FileController@viewMateri');
Route::post('/dashboard/workshop/materi','FileController@uploadMateri');
Route::get('/dashboard/workshop/materi/{id}/delete','FileController@deleteMateri');
Route::get('/dashboard/workshop/materi/{id}/download','FileController@downloadMateri');
//Sk
Route::get('/dashboard/workshop/{id}/sk','FileController@viewSk');
Route::post('/dashboard/workshop/sk','FileController@uploadSk');
Route::get('/dashboard/workshop/sk/{id}/delete','FileController@deleteSk');
Route::get('/dashboard/workshop/sk/{id}/download','FileController@downloadSk');

//test report
Route::get('/dashboard/dosen/report/{id}','DosenController@reportDosen');