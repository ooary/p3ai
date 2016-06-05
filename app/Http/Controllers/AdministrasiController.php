<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jurusan as Jurusan ;
use App\Adm as Adm;
class AdministrasiController extends Controller
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
        return View('adm.index',compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('adm.create');
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
        $this->validate($request,['nip'	=>'numeric|required|unique:adm',
                                  'nama'=>'required',
                                  'agama'=>'required',
                                  'tgl_lahir'=>'required|date',
                                  'no_hp'=>'required|numeric|digits_between:10,12',
                                  'jurusan_id'=>'required',
                                  'golongan_id'=>'required',
                                  'pendidikan'=>'required',
                                  'posisi'=>'required'
								 ]);
        $data = $request->only('nip','nama','agama','no_hp','jurusan_id','golongan_id','pendidikan','posisi');
        $data['tgl_lahir'] = date('Y-m-d',strtotime($request->get('tgl_lahir')));
        $save = Adm::create($data);

        \Flash::message($request->get('nama'). " Added");

        return Redirect('dashboard/adm/'.$data['jurusan_id']);

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
        $dataDosen = array('dosen'=>Adm::where('jurusan_id',$id)->get(),
                             'jurusan'=>Jurusan::findOrfail($id) );
        return View('adm.view',compact('dataDosen'));
    }
      public function detailAdm($nip){

        $dataDosen= Adm::where('nip',$nip)->first();
       return View('adm.detail',compact('dataDosen'));
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
          $dataDosen = Adm::findOrfail($id);

        return View('adm.edit',compact('dataDosen'));
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
                                  'jurusan_id'=>'required',
                                  'golongan_id'=>'required',
                                  'pendidikan'=>'required',
                                  'posisi'=>'required'
								 ]);
         $dosen = Adm::findOrfail($id);
         $data = $request->only('nip','nama','agama','no_hp','jurusan_id','golongan_id','pendidikan','posisi');
         $data['tgl_lahir'] = date('Y-m-d',strtotime($request->get('tgl_lahir')));
         $dosen -> update($data);

         \Flash::message($request->get('nama'). " Update");

         return Redirect('dashboard/adm/'.$data['jurusan_id']);

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
         $datDosen = Adm::find($id);

        $datDosen->delete();

        \Flash::message('delete Success');

        return Redirect()->back();
    }

}
