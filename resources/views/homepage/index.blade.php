 @extends('layoutHome')
 @section('content')
  <div class="jumbotron">
      <div class="container">
        <h1>Selamat Datang di P3AI!</h1>
        <p>Pengembangan Pendidikan dan Pembelajaran Aktfitas instruksional</p>
      </div>
    </div>

 <div class="container">


      <div class="row">

        <div class="col-sm-8 blog-main">
          @foreach($news as $data)
          <div class="blog-post">
            <h2 class="blog-post-title">{{$data -> judul}}</h2>
            <p class="blog-post-meta"> Posted by <a href="{{url('/')}}">Admin</a></p>
             <div id="gallery-images">
              @if($data->img =='')
                       <img src="{{asset('images')}}/nopic.png" alt="">
              @else
             <img src="{{asset('img')}}/{{$data->img}}" alt="">
             @endif
          </div>
             {!!substr($data->isi,0,199)!!}     
             <br> 
            <a class="btn btn-primary pull-right" href="{{url('/news')}}/{{$data->slug_judul}}" role="button" id="button-index">Baca &raquo;</a>

          </div><!-- /.blog-post -->
          @endforeach
        
          {{$news->appends(Request::query())->render()}}

        </div><!-- /.blog-main -->

          @include('homepage._sidebar',['latest'=>$latest])

      </div><!-- /.row -->

    </div><!-- /.container -->

  

@stop

