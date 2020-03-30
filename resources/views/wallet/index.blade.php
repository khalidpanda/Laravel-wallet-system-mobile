@extends('layouts.loginlayout')
@section('content')

<div class="container bg1 bg login-top">

    <div class="row justify-content-center">

<div class="row no-gutters">

    <div class="col">
<a href="{{ url('home') }}"><img class="back" src="{{url('/uploads/Back.png')}}"></a>
    </div>
     <div class="col ">
 <img class="logo" src="{{ url('uploads/logo.png') }}" style="width: 40%; margin-left: -20%;">
    </div> 


</div>

    </div>

</div>


<!--Body content -->

<div class="wallet-box no-gutters">
	<img class="wallet-logo img-responsive" src="{{url('/uploads/c.png')}}">
	<h5 class="text-white wallet-name">{{ Auth::user()->name}}</h5><br>
	<p class="text-white wallet-text">Phone No : 0000000000</p>
	<p class="text-white wallet-text">Points : <span style="margin-left: 10%;">10</span></p>
	<p class="text-white wallet-text">Credit : <span style="margin-left: 10%;">00.00</span></p>
</div>












<!--Body content ends here -->

<div class="gap5x"></div>
<!--Menu section -->

<footer class="main-footer me text-center" style="background:#F4B84A;">
  <div class="navbar me "  id="myNavbar">
  <a class="link" href="{{ url('rewards') }}"><img class="menu1" src="{{ asset('uploads/Reward.png') }}"><br>Reward</a>
  <a class="link" href="#news"><img class="menu1" src="{{ asset('uploads/Message.png') }}"><br>Message</a>
  <a class="link" href="{{url('wallet')}}"><img class="menu1" src="{{ asset('uploads/Wallet.png') }}"><br>Wallet</a>
  <a class="link"href="{{url('history')}}"><img class="menu1" src="{{ asset('uploads/History.png') }}"><br>History</a>
   <a class="link" href="{{url('profile')}}"><img class="menu1" src="{{ asset('uploads/Account.png') }}"><br>Account</a>
  
</div>
  </footer>

<!--menu ends here -->
@endsection