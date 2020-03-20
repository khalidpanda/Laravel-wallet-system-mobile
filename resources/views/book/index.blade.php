
@extends('layouts.loginLayout')
@section('content')
<div class="container bg1 bg login-top">

    <div class="row justify-content-center">

<div class="row no-gutters">

    <div class="col">
<a href="{{ url('home') }}"><img class="back" src="{{url('/uploads/Back.png')}}"></a>
    </div>
     <div class="col sign">
<a class="text-white sign" href="{{route('register')}}"></a>
    </div> 
</div>

        <h2 class="text-white text-responsive">I-Book</h2>
   
    </div>

</div>

<br>


<div class="main-content log-line" style="background-color: #161A27; height: 100%;">
<br>
    
    <div class="container no-gutters">
  <div class="row no-gutters">
    <div class="col i-payment">
    <a href="" class="btn btn-outline  text-center" style="color: #F4B84A;">CAR<br>BOOKING</a>
    </div>
    <div class="w-100"></div>
    <div class="col i-payment">
    	 <a href="" class="btn btn-outline" style="color: #F4B84A;">HOTEL<br>BOOKING</a>
    </div>
  
  </div>
</div>

<br><br>
        
    <div class="gap5x"></div>
</div>











@endsection