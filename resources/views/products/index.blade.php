@extends('layouts.app')
@section('content')
@section('title', 'Product Management')
<?php 
use App\Models\UserRole;

$UserRole = UserRole::where('user_id', Auth::user()->id)->where('modules', 'Product Management')->first();
?>
<style type="text/css">
    #table_length{
        display: none;
    }
</style>
<div class="card" style="size: 10vw;">
  <div class="card-body">
    <?php if($UserRole->edit == 'on'):?>  
 <div class="row">
        <div class="col-lg-12 margin-tb">
           
            <div class="pull-right">
                <a class="btn btn-dark" href="{{ url('products/create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
<?php endif;?>
   
   <br>
    <table class="table table-bordered" id="table">
        <thead>
        <tr>
            <th></th>
            <th>No</th>
            <th>Product Picture</th>
            <th>Product Name</th>
            <th>Product SKU</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
       
        @foreach ($products as $key => $product)
        <tr>
            <td></td>
            <td>{{ $key+1 }}</td>
            <td> <img style="width: 75%;" src="{{URL::asset('/uploads/'.'/'.$product->product_picture)}}"></td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->product_sku }}</td>
            <td>{{ $product->product_price }}</td>
            <td>{{ $product->product_quantity }}</td>
            <td>
                <form action="{{ url('products/destroy',$product->product_id) }}" method="POST">
                
                    <?php if($UserRole->view == 'on'):?>
                    <a class="btn btn-success" href="{{ url('products/show',$product->product_id) }}">View</a>
                    <?php endif;?>


                    <?php if($UserRole->edit == 'on'):?>  
                    <a class="btn btn-warning" href="{{ url('products/edit',$product->product_id) }}">Edit</a>
                    
                   
                    @csrf
                    @method('DELETE')
      
                    <button class="btn btn-danger" type="submit" class="text-danger">Delete</i></button>
                    <?php endif;?>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
  
    
</div>
</div>
@endsection

