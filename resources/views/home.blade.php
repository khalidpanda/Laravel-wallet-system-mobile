

@extends('layouts.app')


@section('content')
<div class="container">
  <div class="text-center text-white">Services</div><br>
  <div class="row">
  <br>
   <!--card start here for widget-->
 <!--  <div class="card" style="width: 12rem;">
  <div class="card-body bg-dark">
    <h6 class="card-header text-center text-bold" id="fube-header">Latest Orders</h6><br>
    <a href="#" >
    <p class="card-text" style="font-size:2vw;"><img src="dist/icon/png/order.png" width="78" height="78">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;14</p>
    </a>
    
  </div>
</div>
    </div>
    <div class="col-6 col-sm-3"> -->
      <!--card start here for widget 2-->
  <!--    <div class="card" style="width: 12rem;">
  <div class="card-body bg-dark">
    <h6 class="card-header text-center text-bold" id="fube-header">Sales</h6><br>
    <a href="{{url('sales_report')}}" >
    <p class="card-text" style="font-size:2vw;"><img src="dist/icon/png/sale.png" width="78" height="78">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;44</p>
    </a>
   
  </div>
</div>
    
  </div> -->

  <!-- second widget section strats here-->
  
   
   <!--card start here for widget-->
 <!--  <div class="card" style="width: 12rem;">
  <div class="card-body bg-dark">
  <h6 class="card-header text-center text-bold" id="fube-header">Top 5 Products</h6><br>
    <a href="{{url('product_report')}}" >
    <p class="card-text" style="font-size:2vw;"><img src="dist/icon/png/pro1.png" width="78" height="78">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;05</p>
    </a>
  </div>
</div>
    </div>
    <div class="col-6 col-sm-3"> -->
      <!--card start here for widget 2-->
 <!--     <div class="card" style="width: 12rem;">
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
                
                </div> -->
                <!-- /.d-flex -->

            <div class="row">
  <div class="col text-center s"><a href="" class="btn btn-outline-warning " style="font-size: 2vh; font-family: helvetica;"><i class="fa fa-car fa-2x" aria-hidden="true" ></i><br>iCar</a></div>
  <div class="col  text-center"><a href="" class="btn btn-outline-warning"style="font-size: 2vh;"><i class="fa fa-car fa-2x" aria-hidden="true"></i><br>iRental</a></div>
  <div class="col text-center"><a href="" class="btn btn-outline-warning"style="font-size: 2vh;"><i class="fa fa-car fa-2x" aria-hidden="true"></i><br>iPayment</a></div>
  <div class="col text-center"><a href="" class="btn btn-outline-warning"style="font-size: 2vh;"><i class="fa fa-car fa-2x" aria-hidden="true"></i><br>iBook</a></div>
</div>
              </div>
            </div>

            <br>
          

@endsection
