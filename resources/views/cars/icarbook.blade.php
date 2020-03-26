@extends('layouts.loginLayout')
<script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>
@section('content')

<div class="container bg1 bg login-top">

    <div class="row justify-content-center">

<div class="row no-gutters">
    <div class="col">
<a href="{{url('home')}}"><img class="back" src="{{URL::asset('uploads/Back.png')}}"></a>
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
        <div class="carousel-item">
          <img class="d-block w-100 img-rounded img-responsive" src="{{URL::asset('uploads/Rent2.png')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 img-rounded img-responsive" src="{{URL::asset('uploads/Rent3.png')}}" alt="Third slide">
        </div>
      </div>
      <!--/.Slide 1-->
      <!--Control start here-->
      <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Control finish here-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-thumb" data-slide-to="0" class="active"> <img class="d-block w-100 " src="{{URL::asset('uploads/Rent1.png')}}"
            class="img-fluid"></li>
        <li data-target="#carousel-thumb" data-slide-to="1"><img class="d-block w-100" src="{{URL::asset('uploads/Rent2.png')}}"
            class="img-fluid"></li>
        <li data-target="#carousel-thumb" data-slide-to="2"><img class="d-block w-100" src="{{URL::asset('uploads/Rent3.png')}}"
            class="img-fluid"></li>
      </ol>
    </div>
    <!--/.Carousel body fiish here-->

  </div> 
   </div>
    </div>

</div>

<br><br><br><br><br><br><br><br>
<!--Body content -->



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
<br>


<br>

<!--1st row -->
<div class="col icarbook-box" style="width: 70%; margin-left: 15%;">
 <div class="icarbook-mask text-center"><img class="icarbook-img" src="{{ url('uploads/Mask1.png') }}">
 <br></div>
<p class="text-white icarbook-text">For 4 person</p>
	
</div>

<!--1st row ends -->

<br><br>

<!--2nd row -->
<div class="col icarbook-box" style="width: 70%; margin-left: 15%;">
 <div class="icarbook-mask text-center"><img class="icarbook-img" src="{{ url('uploads/Mask2.png') }}">
 <br></div>
<p class="text-white icarbook-text">Manual Transmission</p>
  
</div>

<!--2nd row ends here -->

<br><br>
<!--3rd row -->
<div class="col icarbook-box" style="width: 70%; margin-left: 15%;">
 <div class="icarbook-mask text-center"><img class="icarbook-img" src="{{ url('uploads/Mask3.png') }}">
 <br></div>
<p class="text-white icarbook-text">Dissel</p>
  
</div>

<!--3rd row ends -->

<br><br>

<!--4th row -->
<div class="col icarbook-box" style="width: 70%; margin-left: 15%;">
 <div class="icarbook-mask text-center"><img class="icarbook-img" src="{{ url('uploads/Mask4.png') }}">
 <br></div>
<p class="text-white icarbook-text">90 hp</p>
  
</div>


<!--4th row ends -->


<br><br>
        

</div>



<!--Body content ends -->




@endsection