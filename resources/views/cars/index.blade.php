@extends('layouts.loginLayout')
@section('content')

<div class="container bg1 bg login-top">

    <div class="row justify-content-center">

<div class="row no-gutters">
    <div class="col">
<a href="#"><img class="back" src="{{URL::asset('uploads/Back.png')}}"></a>
    </div>
     <div class="col ">
<a class="tetx-white " href="{{route('home')}}"><img style="margin-left: -38%; margin-top: 4%; width: 65%;" class="logo" src="{{ asset('uploads/logo.png') }}"></a>
    </div>
</div>
<div class="col">
        <h2 class="i-rent text-responsive">Which cars<br> do you want to choose?</h2>
   </div>
    </div>

</div>

<br><br>


<div class="main-content log-line" style="background-color: #161A27; height: 100%;">
<br>
    
    <div class="container no-gutters">
  <div class="row no-gutters">
    <div class="col i-box">
    <a href="" class="btn btn-outline text-white"><img class="i-rent2" src="{{URL::asset('uploads/Sedan.png')}}"><br>Sedan</a>
    </div>
    <div class="col i-box">
    	 <a href="" class="btn btn-outline text-white"><img class="i-rent2" src="{{URL::asset('uploads/Hatchback.png')}}"><br>Hacthback</a>
    </div>
    <div class="w-100"></div>
    <div class="col i-box">
    	 <a href="" class="btn btn-outline text-white"><img class="i-rent2" src="{{URL::asset('uploads/Sprotcar.png')}}"><br>Sportscar</a>
    </div>
    <div class="col i-box">
    	 <a href="" class="btn btn-outline text-white"><img class="i-rent2" src="{{URL::asset('uploads/Suv.png')}}"><br>Suv</a>
    </div>
     <div class="w-100"></div>
    <div class="col i-box">
    	 <a href="" class="btn btn-outline text-white"><img class="i-rent2" src="{{URL::asset('uploads/MPV.png')}}"><br>MPV</a>
    </div>
    <div class="col i-box">
    	 <a href="" class="btn btn-outline text-white"><img class="i-rent2" src="{{URL::asset('uploads/Van.png')}}"><br>Van</a>
    </div>
  </div>
</div>

<br><br>
        

</div>





@endsection