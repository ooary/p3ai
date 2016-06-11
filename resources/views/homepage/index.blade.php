 @extends('layoutHome')
 @section('content')
  <div class="jumbotron">
      <div class="container">
        <h1>Selamat Datang di P3AI!</h1>
        <p>Pengembangan Pendidikan dan Pembelajaran Aktfitas instruksional</p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        @foreach($news as $data)
        <div class="col-md-4">
           <div id="gallery-images">

             <img src="{{asset('img')}}/{{$data->img}}" alt="">
          </div>
          <h2>{{$data -> judul}}</h2>
          {!!substr($data->isi,0,199)!!}        
            <p>
                
              <a class="btn btn-primary" href="{{url('/news')}}/{{$data->slug_judul}}" role="button" id="button-index">View details &raquo;</a>


            </p>
        </div>
       @endforeach
      </div>
    </div>

@stop

