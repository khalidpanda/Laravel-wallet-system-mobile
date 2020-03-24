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

    <!--Carousel Wrapper-->
    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails irent-now" data-ride="carousel">
      <!--Slides-->
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
      <!--/.Slides-->
      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-thumb" data-slide-to="0" class="active"> <img class="d-block w-100 " src="{{URL::asset('uploads/Rent1.png')}}"
            class="img-fluid"></li>
        <li data-target="#carousel-thumb" data-slide-to="1"><img class="d-block w-100" src="{{URL::asset('uploads/Rent2.png')}}"
            class="img-fluid"></li>
        <li data-target="#carousel-thumb" data-slide-to="2"><img class="d-block w-100" src="{{URL::asset('uploads/Rent3.png')}}"
            class="img-fluid"></li>
      </ol>
    </div>
    <!--/.Carousel Wrapper-->

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

<div class="col no-gutters">
 <p class="text-white" style="font-size: 4vw; margin-left: 2%;" >Select date and time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #F4B84A;">------------------------------------------</span></p>
    </div>
<br>

<!--1st date picker -->
<div class="col" style="width: 70%; margin-left: 15%;">
<form action="https://formden.com/post/MlKtmY4x/" class="form-horizontal" method="post">
     <div class="form-group ">
       <div class="input-group">
        <div class="input-group-addon">
        </div>
        <input style="background-color: #161A27; border: 1px solid #707070; border-radius: 20px; text-align: center;" class="form-control text-white" id="date" name="date" placeholder="23 Mar 2019 , Monday" type="text"/>
      </div>
     </div>
    
    </form>

	
</div>

<!--1st datepicker ends -->

<br>

<!--timepicker -->
<div class="col" style="width: 70%; margin-left: 15%;">
<form action="https://formden.com/post/MlKtmY4x/" class="form-horizontal" method="post">
     <div class="form-group ">
       <div class="input-group">
        <div class="input-group-addon">
        </div>
        <input style="background-color: #161A27; border: 1px solid #707070; border-radius: 20px; text-align: center;" class="form-control" id="date" name="date" placeholder="10:00 AM" type="text"/>
      </div>
     </div>
    
    </form>

	
</div>

<!--ends timepicker -->

<br>
<!--2nd datepicker -->
<div class="col" style="width: 70%; margin-left: 15%;">
<form action="https://formden.com/post/MlKtmY4x/" class="form-horizontal" method="post">
     <div class="form-group ">
       <div class="input-group">
        <div class="input-group-addon">
        </div>
        <input style="background-color: #161A27; border: 1px solid #707070; border-radius: 20px; text-align: center;" class="form-control" id="date" name="date" placeholder="25 Mar 2019 , Monday" type="text"/>
      </div>
     </div>
    
    </form>

	
</div>

<!--2nd datepicker -->

<br>

<!--3rd datepicker -->
<div class="col" style="width: 70%; margin-left: 15%;">
<form action="https://formden.com/post/MlKtmY4x/" class="form-horizontal" method="post">
     <div class="form-group ">
       <div class="input-group">
        <div class="input-group-addon">
        </div>
        <input style="background-color: #161A27; border: 1px solid #707070; border-radius: 20px; text-align: center;" class="form-control" id="date" name="date" placeholder="Something here" type="text"/>
      </div>
     </div>
    
    </form>

	
</div>


<!--3rd datepicker ends here -->


<br><br>
        

</div>



<!--Body content ends -->




@endsection