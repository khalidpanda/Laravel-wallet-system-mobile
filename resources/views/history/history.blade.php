@extends('layouts.loginLayout')
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
<div class="col" style="margin-left: -5%;">
	 <nav class="" id="mainNav">
          <ul>

            <li class="d-inline"><a href="#" class="btn btn h-btn" style="background-color: #6A6A76; border:none;
            border-radius: 30px; width: 30%; height: 5%;">i-Car</a></li>
            &nbsp;
            <li class="d-inline"><a href="#" class="btn btn" style="background-color: #6A6A76; border:none;
            border-radius: 30px; width: 30%; height: 5%;">i-Rental</a></li>
            &nbsp;
            <li class="d-inline"><a href="#" class="btn btn" style="background-color: #6A6A76; border:none;
            border-radius: 30px; width: 30%; height: 5%;">i-Payment</a></li>
           
          
          
        </ul>
           </nav>
     

   </div>

    </div>

</div>
  <br>


  <!--Main body starts here -->

<div class="main-content log-line" style="background-color: #161A27; height: 100%;">
<br>
    
       <div class="row">

        <div class="col h-box">

           <img style="width: 35%;" class="h-box" src="{{ url('uploads/volks.png') }}">
           <img class="h-carlogo" src="{{ url('uploads/VW.png') }}">
           <p class="text-white h-text">Volkswagon Tiguan</p><br>
           <p class="h-text" style="color: #848484; font-size: 2vw; margin-top: -11%;">2019 SPORT CLASS</p>

           <p class="h-text2" style="color: #848484; margin-top: -18%;">Price</p><br>
           <p class="h-text2" style="color: #F4B84A;">RM 150,000.00</p>
          <br><br>
          
        </div>



       </div>

       <br><br>

       <div class="gap5x" ></div>
     </div>








  <!--Main body ends here -->

@endsection