@extends('layouts.loginLayout')
@section('content')

<div class="container bg1 bg login-top">

    <div class="row justify-content-center">

<div class="row no-gutters">

    <div class="col">
<a href="{{ url('home') }}"><img class="back" src="{{url('/uploads/Back.png')}}"></a>
    </div>
     <div class="col ">
 <img class="logo" src="{{ url('uploads/logo.png') }}" style="width: 40%; margin-left: -20%;">
 <img class="logo" src="{{ url('uploads/Search.png') }}" style="width: 13%; margin-left: 50%;">
    </div> 


</div>

    </div>

</div>
<!--main body section starts here-->


<div class="main-content log-line" style="background-color: #161A27; height: 100%;">
<br>
    <div class="row">
    	<div class="col"> 
    	    <nav class="stroke" id="mainNav">
<ul>

        	<li class="d-inline stroke-active"><a href="#">EXPLORE</a></li>
        	&nbsp;
            <li class="d-inline"><a href="#">CARS</a></li>
            &nbsp;
            <li class="d-inline"><a href="#">SEDAN</a></li>
            &nbsp;
            <li class="d-inline"><a href="#">SUV</a></li>
              &nbsp;
            <li class="d-inline"><a href="#">HATCHBACK</a></li>
              &nbsp;
            <li class="d-inline"><a href="#">VAN</a></li>
          
          
        </ul>
  </nav>

</div>



</div>

<br>

<div class="col no-gutters">
  <!--CAR 1-->
  @foreach ($Car as $key => $value)
	<div class="card-body icar-box">

		<img class="icar-img" style="width: 50%;" src="{{URL::asset('/uploads/'.'/'.$value->cars_picture)}}">
    <a href=""><img class="icar-logo" style="width: 15%;" src="{{URL::asset('/uploads/'.'/'.$value->cars_logo)}}"></a>
    <div class="col icar-rating">
    <p class="icar-star"><img class="star-img" src="{{ url('uploads/star.png') }}"> {{$value->cars_rating}}</p>
     <p class="text-white icar-text" >{{$value->cars_name}}</p>
     <p class="icar-des">{{$value->cars_year}} {{$value->cars_model}} class</p>
     <P class="icar-price">{{$value->cars_price}}</P>
  </div>
  

		<div class="card-footer">
   <a href="{{ url('icarbook',$value->cars_id) }}" class="btn btn icar-btn text-white">BUY NOW</a> 
  </div>
</div>
@endforeach


<!--CAR 1 FINISH HERE-->
<br>
<!--CAR 2-->

	
<br><br>
        
  
</div>


<!--main body section ends here-->




<!--footer-->

 <footer class="main-footer me text-center" style="background:#F4B84A;">
  <div class="navbar me "  id="myNavbar">
  <a class="link" href="{{ url('rewards') }}"><img class="menu1" src="{{ asset('uploads/Reward.png') }}"><br>Reward</a>
  <a class="link" href="#news"><img class="menu1" src="{{ asset('uploads/Message.png') }}"><br>Message</a>
  <a class="link" href="{{url('wallet')}}"><img class="menu1" src="{{ asset('uploads/Wallet.png') }}"><br>Wallet</a>
  <a class="link"href="{{url('history')}}"><img class="menu1" src="{{ asset('uploads/History.png') }}"><br>History</a>
   <a class="link" href="{{url('profile')}}"><img class="menu1" src="{{ asset('uploads/Account.png') }}"><br>Account</a>
  
</div>
  </footer>


<!--footer ends-->




@endsection 