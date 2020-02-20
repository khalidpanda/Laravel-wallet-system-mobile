@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-6 col-sm-3">
   <!--card start here for widget-->
   <div class="card" style="width: 12rem;">
  <div class="card-body bg-dark">
    <h6 class="card-header text-center text-bold" style="color:#ff8c00;">Latest Orders</h6><br>
    <a href="#" >
    <p class="card-text" style="font-size:2vw;"><img src="dist/icon/png/order.png" width="78" height="78">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;14</p>
    </a>
    
  </div>
</div>
    </div>
    <div class="col-6 col-sm-3">
      <!--card start here for widget 2-->
      <div class="card" style="width: 12rem;">
  <div class="card-body bg-dark">
    <h6 class="card-header text-center text-bold" style="color:#ff8c00;">Sales</h6><br>
    <a href="#" >
    <p class="card-text" style="font-size:2vw;"><img src="dist/icon/png/sale.png" width="78" height="78">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;44</p>
    </a>
   
  </div>
</div>
    
  </div>

  <!-- second widget section strats here-->
  
    <div class="col-6 col-sm-3">
   <!--card start here for widget-->
   <div class="card" style="width: 12rem;">
  <div class="card-body bg-dark">
  <h6 class="card-header text-center text-bold" style="color:#ff8c00;">Top 5 Products</h6><br>
    <a href="#" >
    <p class="card-text" style="font-size:2vw;"><img src="dist/icon/png/product.png" width="78" height="78">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;05</p>
    </a>
  </div>
</div>
    </div>
    <div class="col-6 col-sm-3">
      <!--card start here for widget 2-->
      <div class="card" style="width: 12rem;">
  <div class="card-body bg-dark">
  <h6 class="card-header text-center text-bold" style="color:#ff8c00;">Stock</h6><br>
    <a href="#" >
    <p class="card-text" style="font-size:2vw;"><img src="dist/icon/png/Stock.png" width="78" height="78">&nbsp;&nbsp;&nbsp;101</p>
    </a>
   
  </div>
</div>
    </div>
  </div>
   
</div>

<h1 id="text">hello</h1>
@endsection
