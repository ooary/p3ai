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

Route::get('/','HomePageController@index');
Route::get('/news/{slug}','HomePageController@news');

//gallery Homepage
Route::get('/gallery','HomePageController@gallery');
Route::get('/gallery/{id}','HomePageController@showGallery');
//profile
Route::get('/profile','HomePageController@profile');
Route::get('/contact','HomePageController@contact');
//Download Area 
Route::get('/download','HomePageController@downloadArea');
Route::get('/download/{nama}/get','HomePageController@downloadFile');
Route::get('/dashboard',function(){
	return View('dashboard.overview');
});
Route::group(['middleware'=>'auth'],function(){
						//News
						Route::resource('/dashboard/news','NewsController');
						//dosen
						Route::resource('/dashboard/dosen','DosenController');
						Route::get('/dashboard/dosen/{nip}/detail','DosenController@detailDosen');
						Route::get('/dashboard/dosen/create/{jurusan}','DosenController@createDosen');
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
						Route::get('/dashboard/adm/create/{jurusan}','AdministrasiController@createAdm');
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
						//surat masuk
						Route::resource('/dashboard/suratmasuk','SuratMasukController');
						//surat Keluar
						Route::resource('/dashboard/suratkeluar','SuratKeluarController');
						//Dosen report
						Route::get('/dashboard/dosen/report/{id}','DosenController@reportDosen');
						//Adm Report
						Route::get('/dashboard/adm/report/{id}','AdministrasiController@reportAdm');
						//serdos Report
						Route::get('/dashboard/serdos/report/{id}','SerdosController@reportAll');
						Route::get('/dashboard/serdos/reportlulus/{id}','SerdosController@reportLulus');
						Route::get('/dashboard/serdos/reporttdk/{id}','SerdosController@reportTdk');
						Route::get('/dashboard/serdos/reportblm/{id}','SerdosController@reportBlm');
					});

///https://mattstauffer.co/blog/the-auth-scaffold-in-laravel-5-2
Route::get('admin', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');


