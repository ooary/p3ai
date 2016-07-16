<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jurusan as Jurusan;
use App\Dosen as Dosen;
use App\GolPang as GolPang;
use PDF;
use File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jurusan = Jurusan::all();
        return View('dosen.index',compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function create()
    {
        //
        return View('dosen.create');
    }
    public function createDosen($jurusan){
        $jurusan = Jurusan::findOrfail($jurusan);
         return View('dosen.create',compact('jurusan'));
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
        $this->validate($request,['nip'=>'numeric|required|unique:dosen',
                                  'nama'=>'required',
                                  'agama'=>'required',
                                  'tgl_lahir'=>'required|date',
                                
                                  'no_hp'=>'required|numeric|digits_between:10,12',
                                  'jurusan_id'=>'required',
                                  'golongan_id'=>'required',
                                  'pendidikan'=>'required',
                        ]);
        $id= $request->get('jurusan_id');
        $data = $request->only('nip','nama','agama','no_hp','jurusan_id','golongan_id','pendidikan','ket');
        if($request->hasFile('photo'))
            :
           $data['photo'] = $this->saveImg($request->file('photo'));
        endif;
        $data['tgl_lahir'] = date('Y-m-d',strtotime($request->get('tgl_lahir')));
        $save = Dosen::create($data);

        \Flash::message($request->get('nama'). " Added");

        return Redirect('dashboard/dosen/'.$id);

        
    }
      public function saveImg(UploadedFile $img){

        $fileName = str_random(40). '.' . $img -> guessClientExtension();
        $path     = public_path() . DIRECTORY_SEPARATOR . 'foto';
        $img -> move($path,$fileName);
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
          $dataDosen = array('dosen'=>Dosen::where('jurusan_id',$id)->get(),
                             'jurusan'=>Jurusan::findOrfail($id) );

        return View('dosen.view',compact('dataDosen'));
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
        $dataDosen = Dosen::findOrfail($id);
        return View('dosen.edit',compact('dataDosen'));
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
         $this->validate($request,['nip'=>'numeric|required',
                                  'nama'=>'required',
                                  'agama'=>'required',
                                  'tgl_lahir'=>'required|date',
                                  'no_hp'=>'required|numeric|digits_between:10,12',
                                  'golongan_id'=>'required',
                                  'pendidikan'=>'required',]);
         $dosen = Dosen::findOrfail($id);
        
         $data = $request->only('nip','nama','agama','no_hp','golongan_id','pendidikan','ket');
        if($request->hasFile('photo'))
            :
           $data['photo'] = $this->saveImg($request->file('photo'));
           if($dosen->photo !=='') $this->deleteImg($dosen->photo);
        endif;
         $data['tgl_lahir'] = date('Y-m-d',strtotime($request->get('tgl_lahir')));
         $dosen -> update($data);

         \Flash::message($request->get('nama'). " Update");

         return Redirect('dashboard/dosen/'.$dosen->jurusan_id);


    }
    public function deleteImg($fileName){

        $path = public_path() . DIRECTORY_SEPARATOR .'foto' . DIRECTORY_SEPARATOR . $fileName;
        return File::delete($path);

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
        $datDosen = Dosen::find($id);
        if($datDosen->photo !=='') $this->deleteImg($datDosen->photo);

        $datDosen->delete();

        \Flash::message('delete Success');

        return Redirect()->back();
    }
     public function detailDosen($nip){

        $dataDosen= Dosen::where('nip',$nip)->first();
        $pangkat = GolPang::all();

       return View('dosen.detail',compact('dataDosen','pangkat'));
    }
    public function reportDosen($id){

        //https://github.com/barryvdh/laravel-dompdf

        $dataDosen = Dosen::where('jurusan_id',$id)->get();
        $pdf = PDF::loadView('dosen.export',compact('dataDosen'));

        return $pdf->setPaper('a4')->download(date('d-m-Y').'_'.str_random(5).'.pdf');

    }
   
}
