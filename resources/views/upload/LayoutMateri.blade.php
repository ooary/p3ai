@extends('layoutDashboard')
@section('title','Data Gallery Panel')

@section('page-header','Upload Materi Workshop '.$workshop->tema)
@section('content')
        <div class="row">
        <div class="col-md-12">
          <div id="gallery-images">
            <ul>
              @foreach($workshop->hasMateri as $data)
              <li>
                <h3>{{$data->nama_materi}}</h3>
                  <img src="{{asset('img')}}/file.png" alt="">
                <br>
                  <a href="{{url('/dashboard/workshop/materi')}}/{{$data->id}}/download" class="btn btn-primary btn-sm"><span class="fa fa-download"></span> Download</a>

                  <a href="{{url('/dashboard/workshop/materi/')}}/{{$data->id}}/delete" class="btn btn-danger btn-sm  "onclick="return confirm('delete?')"><span class="fa fa-trash" > Delete</span></a>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
      <br>
      <form action="{{url('dashboard/workshop/materi')}}" class="dropzone" id="myDropzoneMateri">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$workshop->id}}">
      </form><br>

     <a href="{{url('/dashboard/workshop')}}" class="btn btn-danger">Back</a>
     <hr> 
    
			<hr>
     
                
@stop