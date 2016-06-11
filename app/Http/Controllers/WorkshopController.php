<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Workshop as Workshop;
use File;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $workshop = Workshop::all();
        return View('workshop.index',compact('workshop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('workshop.create');
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
         $this->validate($request,[ 'tema'=>'required|min:6',
                                    'narasumber'=>'required',
                                    'tgl_mulai'=>'date|required',
                                    'tempat'=>'required',
                                    'tgl_selesai'=>'date|required|after:tgl_mulai',
                                    'isi'=>'required|min:6']);
         $data = $request->only('tema','narasumber','isi','tempat');
         $data['tgl_mulai']= date('Y-m-d',strtotime($request->get('tgl_mulai')));
         $data['tgl_selesai']= date('Y-m-d',strtotime($request->get('tgl_selesai')));
         $workshop = Workshop::create($data);
         \Flash::message($request->get('tema'). ' Created');
         return Redirect('dashboard/workshop');


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
        $workshop = Workshop::findOrfail($id);
        return View('workshop.edit',compact('workshop'));
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
          $this->validate($request,[ 'tema'=>'required|min:6',
                                    'narasumber'=>'required',
                                    'tgl_mulai'=>'date|required',
                                    'tempat'=>'required',
                                    'tgl_selesai'=>'date|required|after:tgl_mulai',
                                    'isi'=>'required|min:6']);
         $workshop = Workshop::findOrfail($id);
         $data = $request->only('tema','narasumber','isi','tempat');
         $data['tgl_mulai']= date('Y-m-d',strtotime($request->get('tgl_mulai')));
         $data['tgl_selesai']= date('Y-m-d',strtotime($request->get('tgl_selesai')));
         $workshop->update($data);
         \Flash::message($request->get('tema'). ' Updated');
         return Redirect('dashboard/workshop');
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
        $workshop = Workshop::findOrfail($id);
        $sk = $workshop->hasSk();
        $materi = $workshop -> hasMateri();

        foreach($workshop->hasSk as $deleteSk){
            $pathSk = public_path(). DIRECTORY_SEPARATOR . 'file' .DIRECTORY_SEPARATOR . $deleteSk->sk;
            File::delete($pathSk);

        }

        foreach ($workshop->hasMateri as $deleteMateri) {
            $pathMateri = public_path(). DIRECTORY_SEPARATOR . 'file' .DIRECTORY_SEPARATOR . $deleteMateri->nama_materi;
            File::delete($pathMateri);
        }
        $sk -> delete();
        $materi -> delete();
        $workshop -> delete();
        \Flash::message('Delete Workshop Success');
        return Redirect('dashboard/workshop');
    }
}
