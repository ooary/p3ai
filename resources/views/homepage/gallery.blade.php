 @extends('layoutHome')
 @section('content')
  <div class="jumbotron">
      <div class="container">
        <h1>Gallery</h1>
        <p>Gallery Kegiatan acara dan workshop </p>
        <p></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
         <div class="list-group">
                @foreach($gallery as $data)
                  <a href="{{url('/gallery')}}/{{$data->id}}" class="list-group-item"><h3 class="fa fa-image fa-2x"> {{$data->nama_gallery}}</h3></a>
                @endforeach
        </div>  
        </div>
      </div>
    </div>
@stop

