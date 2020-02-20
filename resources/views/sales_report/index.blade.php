@extends('layouts.app')
@section('content')
@section('title', 'Sales Report')

<style type="text/css">
    #table_length{
        display: none;
    }
</style>

 <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Search</h3>
                </div>
              </div>
              <div class="card-body">
              	<div class="row">
  <div class="col-sm-4">
  	<input type="text" class="form-control datepicker" placeholder="Search by date">
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
                  <h3 class="card-title">Sales</h3>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">$18,230.00</span>
                    <span>Sales Over Time</span>
                  </p>
                  <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 33.1%
                    </span>
                    <span class="text-muted">Since last month</span>
                  </p>
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="sales-chart" height="200"></canvas>
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
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Yearly Profit</h3>
                </div>
              </div>
              <div class="card-body">

              	<table class="table table-bordered" id="table">
        <thead>
        <tr>
        	<th></th>
            <th>No</th>
            <th>Year</th>
            <th>Profit (RM)</th>
        </tr>
    </thead>
    <tbody>
       
        
        <tr>
        	<td></td>
            <td>1</td>
            <td>2019</td>
            <td>25000.00</td>
        </tr>

        <tr>
        	<td></td>
            <td>2</td>
            <td>2020</td>
            <td>50000.00</td>
        </tr>
        
    </tbody>
    </table>
              </div>
          </div>
           <br>

          


@endsection