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
Route::resource('/dashboard/jurusan','JurusanController');
Route::resource('/dashboard/pangkat','PangkatController');	
Route::resource('/dashboard/golongan','GolonganController');