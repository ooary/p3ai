<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\SuratKeluar as SuratKeluar ;
use File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
class SuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $suratkeluar = SuratKeluar::all();
        return View('suratkeluar.index',compact('suratkeluar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('suratkeluar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {
        //
       $this -> validate($request,['no_surat'=>'required',
                                    'judul_surat'=>'required',
                                    'tujuan'=>'required',
                                    'tgl_surat'=>'date|required',
                                    ]);
        $data = $request->only('no_surat','judul_surat','isi_surat','tujuan');
        if($request->hasFile('file_surat_keluar')){
            $data['file_surat_keluar']=$this->uploadSurat($request->file('file_surat_keluar'));
        }
        $data['tgl_surat']= date('Y-m-d',strtotime($request->get('tgl_surat')));
        SuratKeluar::create($data);
        \Flash::message($request->nama_surat. ' Added Success');
        return Redirect('dashboard/suratkeluar');
    }
    public function uploadSurat(UploadedFile $file_surat_keluar){
        //http://askubuntu.com/questions/303593/how-can-i-chmod-777-all-subfolders-of-var-www/303597
        $fileName = $file_surat_keluar->getClientOriginalName();
        $path = public_path().DIRECTORY_SEPARATOR.'file'.DIRECTORY_SEPARATOR.'surat_keluar';
        $file_surat_keluar -> move($path,$fileName);
        return $fileName;

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
        $suratkeluar= SuratKeluar::findOrfail($id);
        return View('suratkeluar.show',compact('suratkeluar'));
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
        $suratkeluar = SuratKeluar::findOrfail($id);
        return View('suratkeluar.edit',compact('suratkeluar'));
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
        //
        $this -> validate($request,['no_surat'=>'required',
                                    'judul_surat'=>'required',
                                    'tujuan'=>'required',
                                    'tgl_surat'=>'date|required',
                                    ]);
        $data = $request->only('no_surat','judul_surat','isi_surat','tujuan');
        $suratkeluar = SuratKeluar::findOrfail($id);
        if($request->hasFile('file_surat_keluar')){
            $data['file_surat_keluar']=$this->uploadSurat($request->file('file_surat_keluar'));
            if($suratkeluar !== '') $this->deleteSurat($suratkeluar->file_surat_keluar);
            
        }
         $data['tgl_surat']= date('Y-m-d',strtotime($request->get('tgl_surat')));
         $suratkeluar->update($data);
         \Flash::message($request->get('judul_surat'). ' Update Success');
         return Redirect('dashboard/suratkeluar');


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
        $suratkeluar = SuratKeluar::findOrfail($id);

        if($suratkeluar !== '') $this->deleteSurat($suratkeluar->file_surat_keluar);
        $suratkeluar ->delete();
        \Flash::message('Delete Success');
        return Redirect('dashboard/suratkeluar');
    }
    public function deleteSurat($fileName){
        $path = public_path().DIRECTORY_SEPARATOR.'file'.DIRECTORY_SEPARATOR.'surat_keluar'.DIRECTORY_SEPARATOR.$fileName;
        return File::delete($path);
    }
}
