@extends('layouts.loginLayout')

@section('content')


<div class="container bg1 bg login-top">

    <div class="row justify-content-center">

<div class="row no-gutters">
    <div class="col">
<a href="{{url('irentnow')}}"><img class="back" src="{{URL::asset('uploads/Back.png')}}"></a>
    </div>
     <div class="col ">
<a class="tetx-white " href="{{route('home')}}"><img style="margin-left: -38%; margin-top: 4%; width: 65%;" class="logo" src="{{ asset('uploads/logo.png') }}"></a>
    </div>
</div>
<div class="col">
        <div class="container my-4 irent-now">

    <!--Carousel body strats here-->
    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails irent-now" data-ride="carousel">
      <!--Slide 1-->
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block w-100 img-rounded img-responsive" src="{{URL::asset('uploads/Rent1.png')}}" alt="First slide">
        </div>
    
   
     
    </div>
    <!--/.Carousel body fiish here-->

  </div> 
   </div>
    </div>

</div>


<div class="gaptop2x"></div>
<!--main body -->



<div class="main-content log-line" style="background-color: #161A27; height: 100%;">
<br>
    
       <div class="row">
        <div class="col"> 
           <p class="text-white" style="margin-left: 5%;">Volkswagon Tiguan</p>
           <p style="color: #535866; font-size: 3vw; margin-top: -5%; margin-left: 5%;">2019 SPORT CLASS</p>
           <p class="icar-star" style="margin-left: 70%; margin-top: -15%; width: 20%;"><img style="margin-top: -5%;" src="{{ url('uploads/star.png') }}"> 4.5</p>
           <br>
           <hr class="new1">
     </div>



</div>

<div class="col">
	<p style="color: #F4B84A; margin-left: 7%;">Date & Time:</p>
	<p style="color: #FFFFFF; margin-left: 7%;">Start date: </p>
	<p style="color: #FFFFFF; margin-left: 7%;">23 Mar 2019, Monday </p>
	<p style="color: #FFFFFF; margin-left: 7%;">End date:</p>
	<p style="color: #FFFFFF; margin-left: 7%;">25 Mar 2019, Monday</p>
	


	
</div>

<div class="col">
<a href="{{url('home')}}" class="btn btn log-button text-white" style="height: 8%; padding: 5%;">BACK TO MENU</a>
<br>
<div class="gaptop2x"></div>
 <div class="gap5x"></div>
</div>
</div>




@endsection

