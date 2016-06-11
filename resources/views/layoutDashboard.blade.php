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

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
     <!-- fontawesome core CSS -->
    <link rel="stylesheet" href="{{asset('css/fa.min.css')}}">
     <!-- Datatables core CSS -->
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.bootstrap.min.css')}}">
     <!-- DatePicker core CSS -->
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
     <!-- Custom Dashboard Bootstrap core CSS -->
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
     <!-- SelectizeJs core CSS -->
    <link href="{{asset('css/selectize.css')}}" rel="stylesheet">
     <!-- dropzone core CSS -->
    <link href="{{asset('css/dropzone.min.css')}}" rel="stylesheet">
     <!-- Gallery core CSS -->
    <link href="{{asset('css/gallery.css')}}" rel="stylesheet">
      <!-- Lightbox core CSS -->
    <link href="{{asset('css/lightbox.min.css')}}" rel="stylesheet">


     <!-- CKEDITOR core JS -->
    <script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
     <!-- chart core JS -->
    <script src="{{asset('js/Chart.min.js')}}"></script>
    
    <style rel="stylesheet">
    .ui-datepicker select.ui-datepicker-month, .ui-datepicker select.ui-datepicker-year {
      color: black;
     }
</style>
    

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">P3AI DASHBOARD</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                 @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>

        </div>
      </div>
    </nav>
  <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
        
          <ul class="nav nav-sidebar">
            <li ><a href="{{url('dashboard')}}"><i class="fa fa-dashboard fa-2x"></i> Overview </a> </li>
            <li ><a href="{{url('dashboard/news')}}"><i class="fa fa-newspaper-o fa-2x"></i> News Update </a></li>
            <li ><a href="{{url('dashboard/gallery')}}"><i class="fa fa-image fa-2x"></i> Gallery</i></a></li>
            <li ><a href="{{url('dashboard/workshop')}}"><i class="fa fa-comments fa-2x"></i> Workshop</a></li>
            <li ><a href="{{url('dashboard/download')}}"><i class="fa fa-download fa-2x"></i> Data Download</a></li>
             <li><a href="{{url('dashboard/dosen')}}"><i class="fa fa-database fa-2x"></i> Data Dosen</a></li>
            <li><a href="{{url('dashboard/serdos')}}"><i class="fa fa-archive fa-2x"></i> Data Serdos</a></li>
            <li><a href="{{url('dashboard/adm')}}"><i class="fa fa-archive fa-2x"></i> Data Administrasi Jurusan</a></li>
            <li><a href="{{url('dashboard/suratmasuk')}}"><i class="fa fa-envelope fa-2x"></i> Surat Masuk</a></li>
              <li><a href="{{url('dashboard/suratkeluar')}}"><i class="fa fa-envelope fa-2x"></i> Surat Keluar</a></li>
            <li><a href="{{url('dashboard/jurusan')}}"><i class="fa fa-database fa-2x"></i> Jurusan</a></li>
            <li><a href="{{url('dashboard/pangkat')}}"><i class="fa fa-database fa-2x"></i> Pangkat</a></li>
            <li><a href="{{url('dashboard/golongan')}}"><i class="fa fa-database fa-2x"></i> Golongan</a></li>
             </ul>
         
       
      </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"> @yield('page-header')</h1>
          @if (session()->has('flash_notification.message'))
           
            <div class="alert alert-{{ session()->get('flash_notification.level')}}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ session()->get('flash_notification.message') }}
            </div>
          
            @endif
      
            @yield('content')
       
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="{{asset('js/holder.min.js')}}"></script>
    <!-- Date Picker core JS -->
    <script src="{{asset('js/allinone/jquery-ui.min.js')}}"></script>
     <!-- DataTable core JS -->
    <script src="{{asset('js/table/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/table/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('js/table/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('js/table/responsive.bootstrap.min.js')}}"></script>
     <!-- Selectize core JS -->
    <script src="{{asset('js/selectize.js')}}"></script>
     <!-- Dropzone core JS -->
    <script src="{{asset('js/dropzone/dropzone.min.js')}}"></script>
    <!-- Lightbox core JS -->
    <script src="{{asset('js/lightbox/lightbox.min.js')}}"></script>

    <!-- All App core JS -->
    <script src="{{asset('js/app.js')}}"></script>
    
  </body>
</html>
