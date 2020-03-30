@extends('layouts.loginlayout')
@section('content')

<!--Head sction -->
<div class="container bg1 bg login-top">

    <div class="row justify-content-center">

<div class="row no-gutters">

    <div class="col">
<a href="{{ url('home') }}"><img class="back" src="{{url('/uploads/Back.png')}}"></a>
    </div>
     <div class="col ">
 <img class="img-responsive" style="width: 40%; margin-top: 60%; margin-left: -80%;" src="{{url('/uploads/Profile2.png')}}">
 <a href="">
 <p class="text-white" style="margin-top: -33%; margin-left: -32%;">{{ Auth::user()->name}} <br>Edit Profile</p>
 </a>
    </div> 


</div>

    </div>

</div>
<br><br><br>
<!--Head section ends -->

<!--Content Body -->

<ul style="list-style: none;">
	<li>
		<a href="">
		<p class="text-white">10 points . Rewards Member</p>
		<hr class="acccount-line">
		</a>
	</li>
	<li>
		<a href="">
		<p class="text-white">Rewards</p>
		<hr class="acccount-line">
		</a>
	</li>
	<li>
		<a href="">
		<p class="text-white">Business Profile</p>
		<hr class="acccount-line">
		</a>
	</li>
	<li>
		<a href="">
		<p class="text-white">Help Cnter</p>
		<hr class="acccount-line">
		</a>
	</li>
	<li>
		<a href="">
		<p class="text-white">Emergency Contacts</p>
		<hr class="acccount-line">
		</a>
	</li>
	<li>
		<a href="">
		<p class="text-white">Settings</p>
		<hr class="acccount-line">
		</a>
	</li>
	<li>
		<a href="">
		<p class="text-white">Share Feedback</p>
		<hr class="acccount-line">
		</a>
	</li>
	<li>
		 <a href="{{ url('logout') }}"  
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              
              <p class="text-white">
              	<i class="fa fa-power-off"></i>
               {{ __('Logout') }}
              </p>
             
            </a>
            <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
	</li>
</ul>







<!--Content body ends here -->

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