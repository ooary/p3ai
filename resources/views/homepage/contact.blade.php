 @extends('layoutHome')
 @section('content')

   <div class="jumbotron">
      <div class="container">
        <h1> P3AI!</h1>
        <p>Pengembangan Pendidikan dan Pembelajaran Aktfitas instruksional</p>
      </div>
    </div>

    <div class="container">

      

      <div class="row">
        <div class="col-sm-8 blog-main">
          <div class="blog-post">
            <h2 class="blog-post-title">Our Contact</h2>
            <hr>
            <p class="blog-post-meta"></p>
                <p>
                  <ul>
                    <li><span class="fa fa-university"></span> Politeknik Negeri Sriwijaya</li>
                    <li><span class="fa fa-university"></span> P3AI </li>
                    <li ><span class="fa fa-map-marker"></span> Jl Srijaya Negara Bukit Besar Palembang 30139</li>
                    <li><span class="fa fa-phone"></span> +620711353414 </li>
                    <li><span class="fa fa-fax"></span> +62711355918 ext :  1078, 1077 </li>
                    <li><span class="fa fa-home"></span>  www.p3ai.polsri.ac.id </li>
                    <li><span class="fa fa-envelope"></span> p3ai@polsri.ac.id</li>
                  </ul>
                   
                </p>
               
          </div><!-- /.blog-post -->


        </div><!-- /.blog-main -->

      @include('homepage._sidebar',['latest'=>$latest])

      </div><!-- /.row -->

    </div><!-- /.container -->

@stop
  