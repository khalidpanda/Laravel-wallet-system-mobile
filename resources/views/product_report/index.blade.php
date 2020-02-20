@extends('layouts.app')
@section('content')
@section('title', 'Product Report')

<div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Search</h3>
                </div>
              </div>
              <div class="card-body">
              	<div class="row">
  <div class="col-sm-4">
  	<input type="text" class="form-control datepicker1" placeholder="Search by year">
  </div>
  <!-- <div class="col-sm-3">
  	<input type="text" class="form-control datepicker1" placeholder="Search by year">
  </div> -->
  <div class="col-sm-3">
  	<button class="btn btn-primary btn-block" type="submit" >Search</button>
  </div>
</div>
              	

              </div>
          </div>
          <br>

          <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Product</h3>
                </div>
              </div>
              <div class="card-body">
              	<table class="table table-bordered" id="table">
        <thead>
        <tr>
            <th></th>
            <th>No</th>
            <th>Product Name</th>           
            <th>Product Quantity</th>
            <th>Total Order</th>
        </tr>
    </thead>
    <tbody>
       
        @foreach ($products as $key => $product)
        <tr>
            <td></td>
            <td>{{ $key+1 }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->product_quantity }}</td>
            <td>10</td>
           
        </tr>
        @endforeach
    </tbody>
    </table>

              </div>
          </div>
          <br>


          <div class="row">
  <div class="col-sm-4">
   <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Top 5 Product in LAZADA</h3>
                </div>
              </div>
              <div class="card-body">
              	
              	<canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>

              </div>
          </div>
  </div>
 
  <div class="col-sm-4">
  	 <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Top 5 Product in SHOPPEE</h3>
                </div>
              </div>
              <div class="card-body">
              	
              		<canvas id="pieChart1" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>


              </div>
          </div>
  </div>

   <div class="col-sm-4">
  	 <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Top 5 Product in WEBSITE</h3>
                </div>
              </div>
              <div class="card-body">
              	
              		<canvas id="pieChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>


              </div>
          </div>
  </div>
</div>
         
          <br>

          


@endsection

