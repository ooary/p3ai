 @extends('layoutHome')
 @section('content')
<br>
<br>
<br>
<br>
    <div class="container">
        <div class="row">
        <div class="col-sm-8 blog-main">
          <div class="blog-post">
            <h2 class="blog-post-title">{{$news->judul}}</h2>
            <p class="blog-post-meta">{{date('d-m-Y',strtotime($news->tgl_posting))}} by Admin</p>
            <hr>
                @if($news -> img == '')
                @else
                  <div class="thumbnail">
                   <a href="{{asset('img')}}/{{$news->img}}" data-lightbox="mygallery">
                      <img src="{{asset('img')}}/{{$news->img}}" alt="" class="img-rounded">
                  </a>
                 </div>
                @endif

                {!!$news->isi!!}
                
          </div><!-- /.blog-post -->
         
        </div><!-- /.blog-main -->

      @include('homepage._sidebar',['latest'=>$latest])

      </div><!-- /.row -->

    </div><!-- /.container -->

@stop
  