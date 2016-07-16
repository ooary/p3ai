<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Workshop as Workshop;
use App\Sk as Sk;
use App\Materi as Materi;
use File;
class FileController extends Controller
{
    //

    public function viewMateri($id){

    		$workshop = Workshop::findOrfail($id);
    		return View('upload.LayoutMateri',compact('workshop'));

    }
  
    public function uploadMateri(Request $request){
    	$this->validate($request,['file'=>'unique:materi,nama_materi']);
    	//id workshop
    	$id = $request->get('id');
    	//terima file
    	$file = $request->file('file');
    	//Nama File
    	$fileName = $file ->getClientOriginalName();
    	$path = public_path(). DIRECTORY_SEPARATOR . 'file';

    	$file->move($path,$fileName);

    	$workshop = Workshop::findOrfail($id);

    	$saveFile = $workshop -> hasMateri() ->create(['nama_materi'=>$fileName,
    	    										   'workshop_id'=>$id]);

    	return $saveFile;
    }

    public function downloadMateri($id){
    	$file = Materi::findOrfail($id);
		$path = public_path(). DIRECTORY_SEPARATOR . 'file' . DIRECTORY_SEPARATOR . $file->nama_materi;
		if(file_exists($path)){
			 return Response()->download($path);
		}else{
			return "No files";
		}
    }

    public function deleteMateri($id){

    	$materi = Materi::findOrfail($id);
    	$path = public_path(). DIRECTORY_SEPARATOR . 'file' . DIRECTORY_SEPARATOR . $materi->nama_materi;
    	File::delete($path);
    	$materi -> delete();
    	return Redirect()->back();

    }
    public function viewSk($id){
    		$workshop = Workshop::findOrfail($id);
    		return View('upload.LayoutSk',compact('workshop'));
    }
     public function uploadSk(Request $request){
    	$this->validate($request,['file'=>'unique:sk,sk']);
    	//id workshop
    	$id = $request->get('id');
    	//terima file
    	$file = $request->file('file');
    	//Nama File
    	$fileName = $file ->getClientOriginalName();
    	$path = public_path(). DIRECTORY_SEPARATOR . 'file';

    	$file->move($path,$fileName);

    	$workshop = Workshop::findOrfail($id);

    	$saveFile = $workshop -> hasSk() ->create(['sk'=>$fileName,
    	    									   'workshop_id'=>$id]);

    	return $saveFile;
    }
    public function downloadSk($id){
    	$file = Sk::findOrfail($id);
		$path = public_path(). DIRECTORY_SEPARATOR . 'file' . DIRECTORY_SEPARATOR . $file->sk;
		if(file_exists($path)){
			 return Response()->download($path);
		}else{
			return "No files";
		}
    }
      public function deleteSk($id){

    	$materi = Sk::findOrfail($id);
    	$path = public_path(). DIRECTORY_SEPARATOR . 'file' . DIRECTORY_SEPARATOR . $materi->sk;
    	File::delete($path);
    	$materi -> delete();
    	return Redirect()->back();

    }

}
