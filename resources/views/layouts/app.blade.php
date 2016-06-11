<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

     <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
     <!-- fontawesome core CSS -->
    <link rel="stylesheet" href="{{asset('css/fa.min.css')}}">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }
        body {
              padding-top: 40px;
              padding-bottom: 40px;
              background-color: #eee;
            }

            .form-signin .form-signin-heading,
            .form-signin .checkbox {
              margin-bottom: 10px;
            }
            .form-signin .checkbox {
              font-weight: normal;
            }
          
            .form-signin .form-control:focus {
              z-index: 2;
            }
            .form-signin input[type="email"] {
              margin-bottom: -1px;
              border-bottom-right-radius: 0;
              border-bottom-left-radius: 0;
            }
            .form-signin input[type="password"] {
              margin-bottom: 10px;
              border-top-left-radius: 0;
              border-top-right-radius: 0;
            }


        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
 
    
    @yield('content')

    <!-- JavaScripts -->
     <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
