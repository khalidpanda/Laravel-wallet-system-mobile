@extends('layouts.app')
@section('content')
@section('title', 'Product Management')

<style type="text/css">
    #table_length{
        display: none;
    }
</style>
<div class="card ">
  <div class="card-body">
 <div class="row">
        <div class="col-lg-12 margin-tb">
           
            <div class="pull-right">
                <a class="btn btn-success" href="{{ url('products/create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
   <br>
    <table class="table table-bordered" id="table">
        <thead>
        <tr>
            <th>No</th>
            <!-- <th>No</th> -->
            <th>Product Name</th>
            <th>Product SKU</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
            <th >Action</th>
        </tr>
    </thead>
    <tbody>
       
        @foreach ($products as $key => $product)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->product_sku }}</td>
            <td>{{ $product->product_price }}</td>
            <td>{{ $product->product_quantity }}</td>
            <td>
                <form action="{{ url('products/destroy',$product->product_id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ url('products/show',$product->product_id) }}">View</a>
    
                    <a class="btn btn-primary" href="{{ url('products/edit',$product->product_id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
  
    
</div>
</div>
@endsection

