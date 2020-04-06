

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
    <p class="card-text" style="font-size:2vw;"><img src="dist/uploads/png/order.png" width="78" height="78">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;14</p>
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
    <p class="card-text" style="font-size:2vw;"><img src="dist/uploads/png/sale.png" width="78" height="78">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;44</p>
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
    <p class="card-text" style="font-size:2vw;"><img src="dist/uploads/png/pro1.png" width="78" height="78">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;05</p>
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
    <p class="card-text" style="font-size:2vw;"><img src="dist/uploads/png/Stock.png" width="78" height="78">&nbsp;&nbsp;&nbsp;101</p>
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

            <div class="row service1 fcolor ">
  <div class="col text-center fcolor"><a href="{{url('icar')}}" class="btn btn-outline-warning service3" style="font-size: 11px; font-family: helvetica;  color: #F4B84A; background-color: #1E212C;"><img class="service" src="{{ url('uploads/car.png') }}"><br>iCar</a></div>
  <div class="col  text-center"><a href="cars/" class="btn btn-outline-warning"style="font-size: 11px;  color: #F4B84A; background-color: #1E212C;"><img class="service" src="{{ url('uploads/rent.png') }}"><br>iRental</a></div>
  <div class="col text-center"><a href="{{url('ipayment')}}" class="btn btn-outline-warning service3"style="font-size: 11px;  color: #F4B84A; background-color: #1E212C;"><img class="service img-responsive" src="{{ url('uploads/pay.png') }}"><br>iPayment</a></div>
  <div class="col text-center"><a href="book/" class="btn btn-outline-warning service3"style="font-size: 11px;  color: #F4B84A; background-color: #1E212C;w"><img class="service" src="{{ url('uploads/book.png') }}"><br>iBook</a></div>
</div>
              </div>
            </div>
 
            <br>
          <hr class="new1">
          <br>
          <div class="row">
            <div class="col">
          <img class="banner img-rounded img-responsive" src="{{ url('uploads/banner.JPG') }}">
          <br><br>
          <p class="text-white">Rewards<span class="follow"></span></p>
</div>
</div>
          <div id="multi-item-example" class="carousel slide carousel-multi-item carousel-multi-item-2" data-ride="carousel">

  <!--Controls-->
 <!-- <div class="controls-top">
    <a class="black-text" href="#multi-item-example" data-slide="prev"><i class="fas fa-angle-left fa-3x pr-3"></i></a>
    <a class="black-text" href="#multi-item-example" data-slide="next"><i class="fas fa-angle-right fa-3x pl-3"></i></a>
  </div> -->
  <!--/.Controls-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">

      <div class="col">
        <div class="card">
         <img class="img-responsive banner2" src="{{ url('uploads/caru.JPG') }}"
            >
        </div>
      </div>

   

    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class="carousel-item">

      <div class="col">
        <div class="card">
          <img class="img-responsive banner2" src="{{ url('uploads/caru.JPG') }}"
            alt="Card image cap">
        </div>
      </div>

     

    </div>
    <!--/.Second slide-->

    <!--Third slide-->
   
    <!--/.Third slide-->

  </div>
  <!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->

  
          <p class="text-white">Promotion<span class="follow2"></span></p><br>

  <img class="banner img-rounded" src="{{ url('uploads/tunai.png') }}">
  <br><br>


  <div class="something">
    


  </div>
@endsection
