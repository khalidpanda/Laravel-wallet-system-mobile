
@extends('layouts.loginLayout')

<style type="text/css">
	

	.operator-box {

		margin-left: 5%;
		position: fixed;


	}
</style>
@section('content')
<div class="container bg1 bg login-top">

    <div class="row justify-content-center">

<div class="row no-gutters">

    <div class="col">
<a href="{{ url('ipayment') }}"><img class="back" src="{{url('/uploads/Back.png')}}"></a>
    </div>
     <div class="col sign">
<a class="text-white sign" href="{{route('register')}}"></a>
    </div> 
</div>

        <h2 class="text-white text-responsive">Pay Merchant</h2>
   
    </div>
<hr class="new1">
</div>

<div class="gap1x"></div>




<!--main body-->
<p class="text-white" style="margin-left: 10%;">Select Operators</p>

<div class="container">
  <div class="row">
    <div class="col operator-box">
   <a href="{{url('merchantnow')}}"><img src="{{url('/uploads/vw3.png')}}"></a>
      <label class="text-white text-center" style="font-size: 4vw; margin-left: 20%;">SONY</label>
    </div>
    <div class="col">
      <a href="{{url('merchantnow')}}"><img src="{{url('/uploads/vw3.png')}}"></a>
      <label class="text-white text-center" style="font-size: 4vw; margin-left: 20%;">SONY</label>
    </div>
    <div class="col">
     <a href="{{url('merchantnow')}}"><img src="{{url('/uploads/vw3.png')}}"></a>
     <label class="text-white text-center" style="font-size: 4vw; margin-left: 20%;">SONY</label>
    </div>
  </div>
</div>

<div class="gap1x"></div>
    <div class="w-100"></div>
<div class="gaptop2x"></div>

<div class="container">
  <div class="row">
    <div class="col operator-box">
    <a href="{{url('merchantnow')}}"><img src="{{url('/uploads/vw3.png')}}"></a>
     <label class="text-white text-center" style="font-size: 4vw; margin-left: 20%;">SONY</label>
    </div>
    <div class="col">
       <a href="{{url('merchantnow')}}"><img src="{{url('/uploads/vw3.png')}}"></a>
      <label class="text-white text-center" style="font-size: 4vw; margin-left: 20%;">SONY</label>
    </div>
    <div class="col">
    <a href="{{url('merchantnow')}}"><img src="{{url('/uploads/vw3.png')}}"></a>
     <label class="text-white text-center" style="font-size: 4vw; margin-left: 20%;">SONY</label>
    </div>
  </div>
</div>

<div class="gap1x"></div>
    <div class="w-100"></div>

<div class="gaptop2x"></div>

<div class="container">
  <div class="row">
    <div class="col operator-box">
      <a href="{{url('merchantnow')}}"><img src="{{url('/uploads/vw3.png')}}"></a>
      <label class="text-white text-center" style="font-size: 4vw; margin-left: 20%;">SONY</label>
    </div>
    <div class="col">
       <a href="{{url('merchantnow')}}"><img src="{{url('/uploads/vw3.png')}}"></a>
      <label class="text-white text-center" style="font-size: 4vw; margin-left: 20%;">SONY</label>
    </div>
    <div class="col">
     <a href="{{url('merchantnow')}}"><img src="{{url('/uploads/vw3.png')}}"></a>
     <label class="text-white text-center" style="font-size: 4vw; margin-left: 20%;">SONY</label>
    </div>
  </div>
</div>

<div class="gap1x"></div>
    <div class="w-100"></div>
<div class="gaptop2x"></div>
<div class="container">
  <div class="row">
   <div class="col operator-box">
       <a href="{{url('merchantnow')}}"><img src="{{url('/uploads/vw3.png')}}"></a>
      <label class="text-white text-center" style="font-size: 4vw; margin-left: 20%;">SONY</label>
    </div>
    <div class="col">
      <a href="{{url('merchantnow')}}"><img src="{{url('/uploads/vw3.png')}}"></a>
      <label class="text-white text-center" style="font-size: 4vw; margin-left: 20%;">SONY</label>
    </div>
    <div class="col">
      <a href="{{url('merchantnow')}}"><img src="{{url('/uploads/vw3.png')}}"></a>
     <label class="text-white text-center" style="font-size: 4vw; margin-left: 20%;">SONY</label>
    </div>
  </div>
</div>



<!--ends main body-->


@endsection