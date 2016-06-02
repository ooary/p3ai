<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pangkat as Pangkat;
class PangkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pangkat = Pangkat::all();
        return View('pangkat.index',compact('pangkat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('pangkat.create');
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
        $this->validate($request,['pangkat'=>'required']);

        $pangkat = Pangkat::create($request->all());

        \Flash::message($request->get('pangkat'). " Added");

        return Redirect('dashboard/pangkat');

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
        $pangkat = Pangkat::findOrfail($id);

        return View('pangkat.edit',compact('pangkat'));
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
        $this->validate($request,['pangkat'=>'required']);
        $pangkat = Pangkat::findOrfail($id);

        $pangkat->update($request->all());
         \Flash::message('Update Success');
         return Redirect('dashboard/pangkat');


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
        $pangkat = Pangkat::findOrfail($id);

        $pangkat->delete();
        \Flash::message('Delete Success');

        return Redirect('dashboard/pangkat');
    }
}
