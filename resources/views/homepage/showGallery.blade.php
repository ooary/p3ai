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

        <div class="row">
        <div class="col-sm-8 blog-main">
          <div class="blog-post">
            <h2 class="blog-post-title">{{$gallery->nama_gallery}}</h2>
            <p class="blog-post-meta">{{date('d-m-Y',strtotime($gallery->tgl_upload))}} by Admin</p>

            <hr>
             <div id="gallery-images">
            <ul>
              @foreach($gallery->hasImage as $data)
              <li><a href="{{asset('img')}}/{{$data->image}}" data-lightbox="mygallery">
                      <img src="{{asset('img')}}/{{$data->image}}" alt="">
                  </a><br>
                
                </li>
              @endforeach
            </ul>

          </div>
          </div><!-- /.blog-post -->


        </div><!-- /.blog-main -->
    
      @include('homepage._sidebar',['latest'=>$latest])

      </div><!-- /.row -->
          <a href="{{url('/gallery')}}" class="btn btn-danger">Back</a>
      
    </div>
 

      @stop