@extends('layouts.app')
@section('content')
@section('title', 'Product Management')

<style type="text/css">
    #table_length{
        display: none;
    }
</style>
<div class="card" style="size: 10vw;">
  <div class="card-body">
 <div class="row">
        <div class="col-lg-12 margin-tb">
           
            <div class="pull-right">
                <a class="btn btn-dark" href="{{ url('products/create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
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
   
                  <a  href="{{ url('products/show',$product->product_id) }}"><i class="fa fa-eye fa-2x"></i></a>
                  &nbsp;
                    <a href="{{ url('products/edit',$product->product_id) }}"><i class="fa fa-edit fa-2x"></i></a>
                    &nbsp;
                    @csrf
                    @method('DELETE')
      
                    <a type="submit" class="text-danger"><i class="fa fa-trash-alt fa-2x"></i></a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
  
    
</div>
</div>
@endsection

