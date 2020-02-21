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

        <!-- Styles -->
     <style>
            html, body {
        
                height: 100%;


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
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 8vw;
                color: black;
               
            }



            .links > a {
                color: black;
                font: bold;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;

            }


            /*text css effects start here */

            @import url('https://fonts.googleapis.com/css?family=Montserrat:700');



body {
  background-color: #FFFFFF;

  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  color: #ff8c00;
  text-align: center;
  width: 100vw;
  font-weight: 1000;
  overflow: hidden;
  font-family: 'Raleway', sans-serif;
}

#fly-in {
  font-size: 4em;
  margin: 40vh auto;
  height: 40vh; 
  text-transform: uppercase;
}

#fly-in span {
  display: block;
  font-size: .4em;
  opacity: .8;
}

#fly-in div {
 position: fixed; 
  margin: 2vh 0;
  opacity: 0;
  left: 10vw;
  width: 80vw;
  animation: switch 16s linear infinite;
}

#fly-in div:nth-child(2) { animation-delay: 2s}
#fly-in div:nth-child(3) { animation-delay: 4s}
#fly-in div:nth-child(4) { animation-delay: 6s}
/*#fly-in div:nth-child(5) { animation-delay: 9s}
#fly-in div:nth-child(6) { animation-delay: 20s}
#fly-in div:nth-child(7) { animation-delay: 24s}
#fly-in div:nth-child(8) { animation-delay: 28s} */

@keyframes switch {
    0% { opacity: 0;filter: blur(20px); transform:scale(12)}
    3% { opacity: 1;filter: blur(0); transform:scale(1)}
    10% { opacity: 1;filter: blur(0); transform:scale(.9)}
   /* 13% { opacity: 0;filter: blur(10px); transform:scale(.1)}
    80% { opacity: 0}
    100% { opacity: 0} */
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
                        <a id="fube-text-color" href="{{ route('login') }}">Login</a>
                        <a class="text-bold" href="{{ route('register') }}">Register</a>
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
<div style="font-size: 6vw;"><span></span>welcome To</div><br>
<div style="color: black; font-size: 8vw; font-family: 'Montserrat', sans-serif;">Fube  Pos System</div><br>
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
