 @extends('layoutHome')
 @section('content')

     
<div id="carousel-example" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example" data-slide-to="1"></li>
  
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <div style="background:url({{asset('images/poltek2.jpg')}}) center center; 
          background-size:cover;" class="slider-size">
      <div class="carousel-caption">
       
      </div>
    </div>
  
  </div>
  <div class="item">
      <div style="background:url({{asset('images/poltek1.jpg')}}) center center; 
          background-size:cover;" class="slider-size">
      <div class="carousel-caption">
       
      </div>
    </div>
    </div>

</div>

  <!-- Controls -->
<!-- Controls -->
      <a class="left carousel-control" href="javascript:void(0)" 
           data-slide="prev" data-target="#carousel-example">
      <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="javascript:void(0)" 
           data-slide="next" data-target="#carousel-example">
      <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
</div>
    
<br>
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

