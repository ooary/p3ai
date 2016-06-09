<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\SuratMasuk as SuratMasuk;
use File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $suratmasuk = SuratMasuk::all();
        return View('suratmasuk.index',compact('suratmasuk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('suratmasuk.create');
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
                                    'tgl_surat'=>'date|required',
                                    'file_surat_masuk'=>'mimes:pdf,docx,doc',
                                    'isi_surat'=>'required']);
        $data = $request->only('no_surat','judul_surat','isi_surat');
        if($request->hasFile('file_surat_masuk')){
            $data['file_surat_masuk']=$this->uploadSurat($request->file('file_surat_masuk'));
        }
        $data['tgl_surat']= date('Y-m-d',strtotime($request->get('tgl_surat')));
        SuratMasuk::create($data);
        \Flash::message($request->nama_surat. ' Added Success');
        return Redirect('dashboard/suratmasuk');
    }
    public function uploadSurat(UploadedFile $file_surat_masuk){
        $fileName = $file_surat_masuk->getClientOriginalName();
        $path = public_path().DIRECTORY_SEPARATOR.'file'.DIRECTORY_SEPARATOR.'surat_masuk';
        $file_surat_masuk -> move($path,$fileName);
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
        $suratmasuk= SuratMasuk::findOrfail($id);
        return View('suratmasuk.show',compact('suratmasuk'));
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
        $suratmasuk = SuratMasuk::findOrfail($id);
        return View('suratmasuk.edit',compact('suratmasuk'));
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
                                    'tgl_surat'=>'date|required',
                                    'file_surat_masuk'=>'mimes:pdf,docx,doc',
                                    'isi_surat'=>'required']);
        $data = $request->only('no_surat','judul_surat','isi_surat');
        $suratmasuk = SuratMasuk::findOrfail($id);
        if($request->hasFile('file_surat_masuk')){
            $data['file_surat_masuk']=$this->uploadSurat($request->file('file_surat_masuk'));
            if($suratmasuk !== '') $this->deleteSurat($suratmasuk->file_surat_masuk);
            
        }
         $data['tgl_surat']= date('Y-m-d',strtotime($request->get('tgl_surat')));
         $suratmasuk->update($data);
         \Flash::message($request->get('judul_surat'). ' Update Success');
         return Redirect('dashboard/suratmasuk');


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
        $suratmasuk = SuratMasuk::findOrfail($id);

        if($suratmasuk !== '') $this->deleteSurat($suratmasuk->file_surat_masuk);
        $suratmasuk ->delete();
        \Flash::message('Delete Success');
        return Redirect('dashboard/suratmasuk');
    }
    public function deleteSurat($fileName){
        $path = public_path().DIRECTORY_SEPARATOR.'file'.DIRECTORY_SEPARATOR.'surat_masuk'.DIRECTORY_SEPARATOR.$fileName;
        return File::delete($path);
    }
}
