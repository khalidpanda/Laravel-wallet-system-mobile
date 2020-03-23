@extends('layouts.loginLayout')
@section('content')

<div class="container bg1 bg login-top">

    <div class="row justify-content-center">

<div class="row no-gutters">

    <div class="col">
<a href="{{ url('home') }}"><img class="back" src="{{url('/uploads/Back.png')}}"></a>
    </div>
     <div class="col sign">
<a class="text-white sign" href="{{route('register')}}"></a>
    </div> 
</div>

        <h2 class="log-sign text-responsive">TOP UP</h2>
   
    </div>

</div>

<br>
<div class="main-content log-line" style="background-color: #161A27; height: 100%;">
<br>
    <div class="row">

         <div class="col">
              <form method="post" action="{{action('WalletController@topup')}}">
         @csrf
                  <div class="form-group">
       <p style="margin-left: 11%; color: #FAFBFE;">Enter your preferred amount</p> 
  <div class="md-input">
  
   <input id="inputAmount"  class="md-form-control bg  text-white"   required type="text" name="amount">
   <p style="color: #6A6A76; font-size: 3vw;">Minimum topup amount is RM 10</p>
    <div class="col" style=" margin: 7%;">                              
    <a id="btn50"   class="btn btn-outline text-white top-btn" style="border:1px solid #f8ad3a; border-radius: 25px;">RM 50</a>	
        <a id="btn100"  class="btn btn-outline text-white top-btn" style="border:1px solid #f8ad3a; border-radius: 25px;">RM 100</a>	
            <a id="btn200"  class="btn btn-outline text-white top-btn" style="border:1px solid #f8ad3a; border-radius: 25px;">RM 200</a>
        </div>
      <label for="amount" style="color: #6A6A76;">RM</label>
         </div>

     
 <div class="w-100"></div>
  <div class="col" >
           <button type="submit" class="btn btn log-button">TOPUP</button>
  </div>
  <br><br>

 <div class="w-100"></div>
    <div class="col">
    	<p style="color: white; font-size: 4vw; margin-left: 10%;">Other methods of topup :</p>
        
    
                    </form>
    </div>
     <div class="w-100"></div>
    <div class="col">
    <a href="#"><p style="color: #F4B84A; font-size: 8vw; margin-left: 10%;">Auto-Topup</p></a>
        
    
                    </form>
    </div>
    
    <div class="gap5x"></div>

</div>








@endsection