

@extends('layouts.app')


@section('content')
<div class="container">
  <div class="row">
    <div class="col-6 col-sm-3">
   <!--card start here for widget-->
   <div class="card" style="width: 12rem;">
  <div class="card-body bg-dark">
    <h6 class="card-header text-center text-bold" id="fube-header">Latest Orders</h6><br>
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
    <h6 class="card-header text-center text-bold" id="fube-header">Sales</h6><br>
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
  <h6 class="card-header text-center text-bold" id="fube-header">Top 5 Products</h6><br>
    <a href="#" >
    <p class="card-text" style="font-size:2vw;"><img src="dist/icon/png/po.png" width="78" height="78">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;05</p>
    </a>
  </div>
</div>
    </div>
    <div class="col-6 col-sm-3">
      <!--card start here for widget 2-->
      <div class="card" style="width: 12rem;">
  <div class="card-body bg-dark">
  <h6 class="card-header text-center text-bold" id="fube-header">Stock</h6><br>
    <a href="#" >
    <p class="card-text" style="font-size:2vw;"><img src="dist/icon/png/Stock.png" width="78" height="78">&nbsp;&nbsp;&nbsp;101</p>
    </a>
   
  </div>
</div>
    </div>
  </div>
</div> <br>

<div class="card bg-dark">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-header text-center" id="fube-text-color">Orders</h3>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">RM 2,000.00</span>
                    <span>Orders Over Time</span>
                  </p>
                
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="panda" style="color:white;" height="200"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> This year
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Last year
                  </span>
                </div>
              </div>
            </div>

            <br>
          

@endsection
