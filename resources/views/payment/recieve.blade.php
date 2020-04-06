
@extends('layouts.loginLayout')
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

        <h2 class="text-white text-responsive">Recieve Credit</h2>
   
    </div>
<hr class="new1">
</div>

<div class="gap1x"></div>




<!--main body-->


<div class="wrapper">
	<div class="row">
		<div class="col">
			<img src="{{url('/uploads/qr1.png')}}" style="width: 50%; margin-left: 25%; position: fixed;">
			
		</div>
		
	</div>

	
</div>







<!--ends main body-->


@endsection