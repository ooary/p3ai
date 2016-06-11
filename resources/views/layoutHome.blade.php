<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield('page_title','Pengembangan Pendidikan dan Pembelajaran Aktfitas instruksional')</title>

     <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
     <!-- fontawesome core CSS -->
    <link rel="stylesheet" href="{{asset('css/fa.min.css')}}">


    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
    <link href="{{asset('css/gallery.css')}}" rel="stylesheet">
    <link href="{{asset('css/lightbox.min.css')}}" rel="stylesheet">





  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">P3AI </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
           <ul class="nav navbar-nav pull-right">
                <li ><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/profile')}}">Profile</a></li>
                <li><a href="#about">Download</a></li>

                <li><a href="{{url('/gallery')}}">Gallery</a></li>
                <li><a href="{{url('/contact')}}">Contact</a></li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
      @yield('content')


  <div class="container">
      <hr>

  <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>

  </div>
    
 <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/allinone/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/lightbox/lightbox.min.js')}}"></script>

    <script src="{{asset('js/homeCustom.js')}}"></script>




  </body>
</html>
