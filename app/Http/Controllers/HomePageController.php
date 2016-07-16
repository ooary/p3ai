<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\News as News;
use App\Gallery as Gallery;
use App\Download as Download;
class HomePageController extends Controller
{
    //
    public function index(){
    	$news = News::orderBy('tgl_posting','desc')->paginate(5);
        $latest = News::orderBy('tgl_posting','asc')->get();

    	return View('homepage.index',compact('news','latest'));
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
    public function downloadArea(){
        $dataFile = Download::all();
        return View('homepage.download',compact('dataFile'));
    }
     public function downloadFile($nama){
    //solving download http://stackoverflow.com/questions/20415444/download-files-in-laravel-using-responsedownload
    $path = public_path(). DIRECTORY_SEPARATOR . 'file' . DIRECTORY_SEPARATOR . $nama ;
    if (file_exists($path))
    {
        // Send Download
        Download::where('nama_file','=',$nama)->increment('downloaded');
        return Response()->download($path, $nama, [
            'Content-Length: '. filesize($path)
        ]);
    }
    else
    {
        // Error
        exit('Requested file does not exist on our server!');
    }
    }

}
