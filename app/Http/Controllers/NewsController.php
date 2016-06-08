<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\News as News;
use File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $news = News::all();
        return View('news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('news.create');
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
        $this->validate($request,['judul'=>'required|min:6',
                                  'img'=>'mimes:jpg,png,jpeg|max:2000',
                                  
                                  'isi'=>'required|min:200']);

        $data = $request->only('judul','isi');
        if($request->hasFile('img'))
            :
           $data['img'] = $this->saveImg($request->file('img'));
        endif;
        $data['slug_judul'] = str_slug($request->get('judul'),"-");
        $data['tgl_posting'] = date("Y-m-d");
        $data['posted_by'] = 1;
        $news = News::create($data);

     
        \Flash::message($request->get('judul') . " Added");
        return Redirect('dashboard/news');




       
    }
    public function saveImg(UploadedFile $img){

        $fileName = str_random(40). '.' . $img -> guessClientExtension();
        $path     = public_path() . DIRECTORY_SEPARATOR . 'img';
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
        $news = News::findOrfail($id);

        return View('news.view',compact('news'));
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
        $news= News::findOrfail($id);

        return View('news.edit',compact('news'));
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
        $this->validate($request,['judul'=>'required|min:6',
                                  'img'=>'mimes:jpg,png,jpeg|max:2000',
                       
                                  'isi'=>'required|min:200']);
        $news = News::findOrfail($id);
        $data = $request->only('judul','isi');
        if($request->hasFile('img'))
            :
           $data['img'] = $this->saveImg($request->file('img'));
           if($news->img !=='') $this->deleteImg($news->img);
        endif;
        $data['slug_judul'] = str_slug($request->get('judul'),"-");
        $data['posted_by'] = 1;
        
        $news->update($data);

        \Flash::message($request->get('judul'). " Updated");
        return Redirect('dashboard/news');

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
        $news = News::findOrfail($id);
        if($news !=='') $this->deleteImg($news->img);
        $news->delete();
        \Flash::message('Delete Success');
        return Redirect('dashboard/news');


    }
    public function deleteImg($fileName){

        $path = public_path() . DIRECTORY_SEPARATOR .'img' . DIRECTORY_SEPARATOR . $fileName;
        return File::delete($path);

    }
}
