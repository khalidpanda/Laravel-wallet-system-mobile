<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fube Pos</title>
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <link rel="shortcut icon" href="{{asset('dist/img/fube.png')}}" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  

        <!-- Styles -->
     <style>
            html, body {
        
                height: 100%;

                background: #1b0447;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 35%;
                top: 70%;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 8vw;
                color: black;
               
            }



            .links > a {
                color: white;
               

                
            }

            .m-b-md {
                margin-bottom: 30px;

            }


            /*text css effects start here */

            @import url('https://fonts.googleapis.com/css?family=Montserrat:700');



body {
  background-color: #0a0514;

  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  color: #e4aa52;
  text-align: center;
  width: 100vw;
  font-weight: 1000;
  overflow: hidden;
  font-family: 'Raleway', sans-serif;
}

     
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
        
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="btn btn-lg button1 text-center" href="{{ route('login') }}">Login</a><br><br>
                        <a class="btn btn-lg button2" href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
<!-- for later use -->
          <!--  <div class="content">
            <h1 class="title m-b-md text-bold" id="fube-text-color">Welcome To</h1>
                <div class="title m-b-md" >
                    Fube Pos System
                </div> -->

                <div id="fly-in">  
<div style="color: white; font-size: 6vw;"><span></span>welcome To</div><br>
<div style=" font-size: 8vw; font-family: 'Montserrat', sans-serif;">icommunity</div><br>
<!-- if need credits -->
<!--<div>By</div><br>
<div><span></span>Fube Technology .</div> -->

</div>
<!-- these are laravel default welcome page links-->
           <!--     <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>  -->
            </div>
        </div>
    </body>
</html>
