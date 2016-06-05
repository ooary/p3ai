@extends('layoutDashboard')
@section('title','Data Gallery Panel')

@section('page-header','Upload Image Gallery '.$gallery->nama_gallery)
@section('content')
   <div class="row">
        <div class="col-md-12">
          <div id="gallery-images">
            <ul>
              @foreach($gallery->hasImage as $data)
              <li><a href="{{asset('img')}}/{{$data->image}}">
                      <img src="{{asset('img')}}/{{$data->image}}" alt="">
                  </a><br>
                  <a href="{{url('/dashboard/gallery')}}/{{$data->id}}/delete" class="fa fa-trash" onclick="return confirm('delete?')"></a>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
      <br>
      <form action="{{url('dashboard/gallery/upload')}}" class="dropzone" id="myDropzone">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$gallery->id}}">
      </form><br>

     <a href="{{url('/dashboard/gallery')}}" class="btn btn-danger">Back</a>

           @if ($errors->has('nama_gallery'))
            <span class="help-block">
                     <strong>{{ $errors->first('nama_gallery') }}</strong>
             </span>
           @endif
			<hr>
     
                
@stop