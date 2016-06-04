<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Serdos as Serdos;
use App\Jurusan as Jurusan;
use App\Dosen as Dosen;

class SerdosController extends Controller
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
        return View('serdos.index',compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                             'jurusan'=>Jurusan::findOrfail($id),
                             //hitung jumlah
                             'lulus'=>Dosen::where('jurusan_id',$id)->lulus()->get(),
                             'belum'=>Dosen::where('jurusan_id',$id)->belum()->get(), 
                             'tidak'=>Dosen::where('jurusan_id',$id)->tidak()->get(), 
                             );                          

        
        $ketLulus=[]; 
        $ketBelum=[];   
        $ketTidak=[];                  

        foreach($dataDosen['lulus'] as $datLulus){
            array_push($ketLulus,count($datLulus));
        }
         foreach($dataDosen['belum'] as $datBelum){
            array_push($ketBelum,count($datBelum));
        }
         foreach($dataDosen['tidak'] as $datTidak){
            array_push($ketTidak,count($datTidak));
        }
        return View('serdos.view',compact('dataDosen','ketLulus','ketBelum','ketTidak'));
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

        return View('serdos.edit',compact('dataDosen'));
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
        $this->validate($request,['thn_serdos'=>'numeric']);
        if($request->get('status') == 1){
            $this -> validate($request,['thn_serdos'=>'required|numeric',
                                        'gelombang'=>'required']);
           $data = $request->only('status','thn_serdos','gelombang');

        }else if($request->get('status') == 2){

            $data = $request->only('status');
        }else if($request->get('status')==3){
            $data = $request->only('status');

        }

       	$dosen = Dosen::findOrfail($id);
        $dosen->update($data);
       	\Flash::message('Ganti Status Berhasil');
       	return Redirect('dashboard/serdos/'.$request->get('jurusan_id'));
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
    }
}
