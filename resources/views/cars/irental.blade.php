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
<div class="col">
        <form action="#" method="#" >
    <div class="input-group" style=" width: 80%; margin-left: 10%;">
         
    <input style="background-color: #161A27; width: 10%;  border: 2px solid #535866; border-radius: 30px; overflow: hidden;" class="form-control text-white" placeholder="Enter Location" name="srch-term" id="ed-srch-term" type="text">
    <div class="input-group-btn">
   <!-- <button type="submit" id="searchbtn">
    search</button> -->
    </div>
    </div>
    </form> 
   </div>
    </div>

</div>

<br><br>

<!--content body-->
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
    <div class="card-body icar-box">
    <img class="icar-img" src="{{ url('uploads/volks.png') }}">
    <a href=""><img class="icar-logo" src="{{ url('uploads/VW.png') }}"></a>
    <div class="col icar-rating">
    <p class="icar-star"><img class="star-img" src="{{ url('uploads/star.png') }}"> 4.5</p>
    <p class="text-white icar-text" >Volkswagon Tiguan</p>
    <p class="icar-des">2019 sport class</p>
    <P class="icar-price">RM 150,000.00</P>
  </div>
        <div class="card-footer">
          <a href="{{url('irentnow')}}" class="btn btn icar-btn text-white">RENT NOW</a> 
        </div>
</div>

<!--CAR 1 FINISH HERE-->
<br>
<!--CAR 2-->
<div class="card-body icar-box">
    <img class="icar-img" src="{{ url('uploads/bmw.png') }}">
    <a href=""><img class="icar-logo" src="{{ url('uploads/mw.png') }}"></a>
    <div class="col icar-rating">
    <p class="icar-star"><img class="star-img" src="{{ url('uploads/star.png') }}"> 4.5</p>
     <p class="text-white icar-text" >BMW X5 SPORTS</p>
     <p class="icar-des">2019 sport class</p>
     <P class="icar-price">RM 250,000.00</P>
  </div>
    <div class="card-footer">
       <a href="{{url('irentnow')}}" class="btn btn icar-btn text-white">RENT NOW</a> 
    </div>
</div>

<!--CAR 2 FINISH HERE -->
<br>
<!--CAR 3-->
<div class="card-body icar-box">
    <img class="icar-img" src="{{ url('uploads/mar.png') }}">
    <a href=""><img class="icar-logo" src="{{ url('uploads/mar2.png') }}"></a>
    <div class="col icar-rating">
    <p class="icar-star"><img class="star-img" src="{{ url('uploads/star.png') }}"> 4.5</p>
     <p class="text-white icar-text" >MERCEDES-BENZ C-CLASS</p>
     <p class="icar-des">2019 sport class</p>
     <P class="icar-price">RM 150,000.00</P>
  </div>
         <div class="card-footer">
           <a href="{{url('irentnow')}}" class="btn btn icar-btn text-white">RENT NOW</a> 
  </div>
</div>

<!--CAR 3 FINISH HERE -->
    </div>




<br><br>
        

</div>
<!--content body ends here -->

<!--footer section -->

  <footer class="main-footer me text-center" style="background:#F4B84A;">
  <div class="navbar me "  id="myNavbar">
  <a class="link" href="rewards/"><img class="menu1" src="{{ asset('uploads/Reward.png') }}"><br>Reward</a>
  <a class="link" href="#news"><img class="menu1" src="{{ asset('uploads/Message.png') }}"><br>Message</a>
  <a class="link" href="wallet/"><img class="menu1" src="{{ asset('uploads/Wallet.png') }}"><br>Wallet</a>
  <a class="link"href="#about"><img class="menu1" src="{{ asset('uploads/History.png') }}"><br>History</a>
   <a class="link" href="{{url('profile')}}"><img class="menu1" src="{{ asset('uploads/Account.png') }}"><br>Account</a>
  
</div>
  </footer>

<!--footer ends here -->


@endsection