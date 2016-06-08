<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\News as News;
use App\Gallery as Gallery;

class HomePageController extends Controller
{
    //
    public function index(){
    	$news = News::all();
    	return View('homepage.index',compact('news'));
    }
    public function news($slug){
    	$news = News::where('slug_judul',$slug)->first();
    	$latest = News::orderBy('tgl_posting','asc')->get();
    	return View('homepage.content',compact('news','latest'));

    }
    public function gallery(){
    	$gallery = Gallery::all();
    	return View('homepage.gallery',compact('gallery'));
    }
    public function showGallery($id){
    	$gallery = Gallery::findOrfail($id);
    	$latest = News::orderBy('tgl_posting','asc')->get();
    	return View('homepage.showGallery',compact('gallery','latest'));
    }
    public function profile(){
    	   	$latest = News::orderBy('tgl_posting','asc')->get();
			return View('homepage.profile',compact('latest'));
    }
    public function contact(){
    	$latest = News::orderBy('tgl_posting','asc')->get();
		return View('homepage.contact',compact('latest'));
    }
}
