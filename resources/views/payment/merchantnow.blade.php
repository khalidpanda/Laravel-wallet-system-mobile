
@extends('layouts.loginLayout')

@section('content')
<div class="container bg1 bg login-top">

    <div class="row justify-content-center">

<div class="row no-gutters">

    <div class="col">
<a href="{{ url('paymerchant') }}"><img class="back" src="{{url('/uploads/Back.png')}}"></a>
    </div>
     <div class="col sign">
<a class="text-white sign" href=""></a>
    </div> 
</div>
    </div>

</div>

<!-- main body -->

<div class="main-content log-line" style="background-color: #161A27; height: 100%;">
<br>
    
       <div class="row">
        <div class="col"> 
    <form method="post" action="{{action('WalletController@topup')}}">
         @csrf
                  <div class="form-group">
       <p style="margin-left: 11%; color: #FAFBFE;">Enter Payment</p> 
  <div class="md-input">
  
   <input id="inputAmount"  class="md-form-control bg  text-white"   required type="text" name="amount">
  
    <div class="col" style=" margin: 7%;">                              
    <a id="btn50"   class="btn btn-outline text-white top-btn" style="border:1px solid #f8ad3a; border-radius: 25px;">RM 50</a> 
        <a id="btn100"  class="btn btn-outline text-white top-btn" style="border:1px solid #f8ad3a; border-radius: 25px;">RM 100</a>    
            <a id="btn200"  class="btn btn-outline text-white top-btn" style="border:1px solid #f8ad3a; border-radius: 25px;">RM 200</a>
        </div>
      <label for="amount" style="color: #6A6A76;">RM</label>
         </div>

     
 <div class="w-100"></div>
  <div class="col" >
           <button type="submit" class="btn btn log-button">Pay Now</button>
  </div>
  <br><br>

 <div class="w-100"></div>
    <div class="col">
        <p style="color: white; font-size: 4vw; margin-left: 10%;">Pakage A :</p>
        <img src="{{url('/uploads/sedan.png')}}" style="width: 50%; margin-left: 25%;">

          <p style="color: white; font-size: 4vw; margin-left: 10%;">Pakage B :</p>
        
         <img src="{{url('/uploads/sedan.png')}}" style="width: 50%; margin-left: 25%;">

    
                    </form>
        </div>

    </div>
<div class="gap5x"></div>
<div class="gap5x"></div>
</div>

<!--main body ends-->
@endsection
