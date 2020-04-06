
@extends('layouts.loginLayout')
@section('content')
<div class="container bg1 bg login-top" style="opacity: 0.2;">

    <div class="row justify-content-center">

<div class="row no-gutters">

    <div class="col">
<a href="{{ url('ipayment') }}"><img class="back" src="{{url('/uploads/Back.png')}}"></a>
    </div>
     <div class="col sign">
<a class="text-white sign" href="{{route('register')}}"></a>
    </div> 
</div>

        <h2 class="text-white text-responsive">Scan QR code</h2>
   
    </div>

</div>





<!-- main body -->






<!--ends main body-->














@endsection