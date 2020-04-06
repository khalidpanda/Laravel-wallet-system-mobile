@extends('layouts.loginLayout')

@section('content')

<div class="container bg1 bg login-top">

    <div class="row justify-content-center">

<div class="row no-gutters">
    <div class="col">
<a href="{{url('icarbook')}}"><img class="back" src="{{URL::asset('uploads/Back.png')}}"></a>
    </div>
     <div class="col ">
<a class="tetx-white " href="{{route('home')}}"><img style="margin-left: -38%; margin-top: 4%; width: 65%;" class="logo" src="{{ asset('uploads/logo.png') }}"></a>
    </div>
</div>

    </div>

</div>



    <div class="row">
      <div class="col"> 
          <nav class="stroke" id="mainNav">
<ul>

          <li class="d-inline stroke-active"><a href="#">CHATS</a></li>
          &nbsp;
            <li class="d-inline" style="margin-left: 50%;"><a href="#">NOTIFICATIONS</a></li>


           
          
          
        </ul>
  </nav>

</div>



</div>
<div class="gaptop2x"></div>

<!--main body -->

<div class="main-content log-line" style="background-color: #161A27; height: 100%; width: 100%;">

  <div class="row">

  <div class="col">

    <img src="{{ asset('uploads/chat.png') }}" style="width: 50%; margin-top: 10%; margin-left: 25%;">

   <a href=""><p class="text-white" style="margin-left: 20%;">Break the silence, start chatting</p></a>
    <p class="text-white" style="margin-left: 20%; font-size: 4vw;">Now you can chat with your friends!</p>

<div class="gaptop1x"></div>
<a href="{{url('chat')}}" class="btn btn log-button text-white text-center" style="height: 15%; padding: 5%; margin-top: 5%;">LET'S CHAT</a>
<div class="gaptop1x"></div>
  </div> 
    
  </div>
  <div class="gap5x"></div>
  <div class="gap5x"></div>
</div>









<!--main body ends here -->









<!--menu section -->

 <footer class="main-footer me text-center" style="background:#F4B84A;">
  <div class="navbar me "  id="myNavbar">
  <a class="link" href="{{ url('rewards') }}"><img class="menu1" src="{{ asset('uploads/Reward.png') }}"><br>Reward</a>
  <a class="link" href="{{url('message')}}"><img class="menu1" src="{{ asset('uploads/Message.png') }}"><br>Message</a>
  <a class="link" href="{{url('wallet')}}"><img class="menu1" src="{{ asset('uploads/Wallet.png') }}"><br>Wallet</a>
  <a class="link"href="{{url('history')}}"><img class="menu1" src="{{ asset('uploads/History.png') }}"><br>History</a>
   <a class="link" href="{{url('profile')}}"><img class="menu1" src="{{ asset('uploads/Account.png') }}"><br>Account</a>
  
</div>
  </footer>



<!--ends menu -->




@endsection 