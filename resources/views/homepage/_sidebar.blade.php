   <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          
          <div class="sidebar-module">
            <h4>Last News Update</h4>
           <div class="list-group">
            @foreach($latest as $data)
                <a href="{{url('/news')}}/{{$data->slug_judul}}" class="list-group-item"><span class="fa fa-folder"></span> {{$data->judul}}</a>
             @endforeach
            </div>
          </div>
          <div class="sidebar-module">
            <h4>Date</h4>
           <div class="showDatepicker"></div>
          </div>
        </div><!-- /.blog-sidebar -->