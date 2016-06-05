<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Http\Requests;
use App\Gallery as Gallery ;
use App\Image as Image;

class GalleryController extends Controller
{
    //
    public function index(){
    	$gallery = Gallery::all();
    	return View('gallery.index',compact('gallery'));
    }
    public function store(Request $request){
    	$this->validate($request,['nama_gallery'=>'required|min:6']);
    	
    	$data = $request->only('nama_gallery');
    	$data['tgl_upload']=date('Y-m-d');

    	Gallery::create($data);

    	\Flash::message($request->get('nama_gallery').' Added');

    	return Redirect("dashboard/gallery");

    }
    public function upload(Request $request){

    	$id = $request->get('id');
		$file = $request->file('file');
    	$fileName = str_random(40).'.'.$file->guessClientExtension();
        $path     = public_path() . DIRECTORY_SEPARATOR . 'img';
   		$file ->move($path,$fileName);

   		//save into image table

   		$gallery = Gallery::findOrfail($id);

   		$image = $gallery -> hasImage() -> create(['image'=>$fileName,
   										  'gallery_id'=>$id]);

   		return $image;


    }
    public function edit($id){

    	$gallery = Gallery::findOrfail($id);
    	return view('gallery.edit',compact('gallery'));

    }
    public function deleteImg($id){
    		$image = Image::findOrfail($id);
    		$path     = public_path() . DIRECTORY_SEPARATOR . 'img' .  DIRECTORY_SEPARATOR . $image->image;
    		File::delete($path);
    		$image->delete();
    		return Redirect()->back();
    }
    public function destroy($id){
    	$gallery = Gallery::findOrfail($id);
    	$image = $gallery->hasImage();
    	foreach($gallery->hasImage as $deleteImg){

        $path     = public_path() . DIRECTORY_SEPARATOR . 'img' .  DIRECTORY_SEPARATOR . $deleteImg->image;
    	File::delete($path);
    	}
    	$image -> delete();

    	$gallery ->delete();
    	\Flash::message('delete Success');
    	return Redirect('dashboard/gallery');

    }
}
