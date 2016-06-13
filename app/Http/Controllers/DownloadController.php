<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Download as Download;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dataFile = Download::all();
        return View('download.index',compact('dataFile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('download.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //permission all folder
        //http://askubuntu.com/questions/303593/how-can-i-chmod-777-all-subfolders-of-var-www/303597
        $this ->validate($request,['nama_file'=>'required',
                                    'ket'=>'required']);
        $file = $request->file('nama_file');
        $ket = $request -> get('ket');
        $fileName = $file->getClientOriginalName();
        
        $path = public_path() . DIRECTORY_SEPARATOR . 'file';
        $file -> move($path,$fileName);

        $tgl_upload = date('Y-m-d');    
        $saveData = [ 'ket'=>$ket,
                      'nama_file'=>$fileName,
                      'tgl_upload'=>$tgl_upload];
        Download::create($saveData);
        \Flash::message('Upload '. $request->file('nama_file')->getClientOriginalName() . ' Success');
        return Redirect('dashboard/download');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $file = Download::find($id);
        $path = public_path() . DIRECTORY_SEPARATOR . 'file' . DIRECTORY_SEPARATOR . $file->nama_file;

        if($file->nama_file!=='') File::delete($path);
        
        $file->delete();
         \Flash::message('Delete Success');
        return Redirect('dashboard/download');
    }
}
