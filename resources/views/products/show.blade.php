@extends('layouts.app')
   
@section('content')

@section('title', 'View Product')
  <style>
  .uper {
    margin-top: 20px;
  }
</style>
<div class="pull-right">
                <a class="btn btn-primary" href="{{ url('products') }}"> Back</a>
            </div>
<div class="card uper">
 
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{action('ProductController@update')}}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Product ID:</label>
          <input type="text" class="form-control" name="product_id" value="{{ $products->product_id }}" readonly>
        </div>
        <div class="form-group">
          <label for="name">Product Picture:</label>
          <br>
         <img style="width: 15%;" src="{{URL::asset('/uploads/'.'/'.$products->product_picture)}}">
        </div>
        <div class="form-group">
          <label for="name">Product Name:</label>
          <input type="text" class="form-control" name="product_name" value="{{ $products->product_name }}" readonly>
        </div>
        <div class="form-group">
          <label for="price">Product SKU :</label>
          <input type="text" class="form-control" name="product_sku" value="{{ $products->product_sku }}" readonly>
        </div>
        <div class="form-group">
          <label for="quantity">Product Price:</label>
          <input type="text" class="form-control" name="product_price" value="{{ $products->product_price }}" readonly>
        </div>

        <div class="form-group">
              <label for="quantity">Product Status:</label>
              <!-- <input type="text" class="form-control" name="product_status"/> -->
              <select class="form-control select2" name="product_status" style="width: 100%;" readonly>
                    <option selected="selected">Active</option>
                    <option>Suspended</option>
      
                  </select>
          </div>

          <div class="form-group">
              <label for="quantity">Product Quantity:</label>
              <input type="text" class="form-control" name="product_quantity" value="{{ $products->product_quantity }}" readonly>
          </div>

          <div class="form-group">
              <label for="quantity">Product Special Price:</label>
              <input type="text" class="form-control" name="product_special_price" value="{{ $products->product_special_price }}" readonly>
          </div>

          <div class="form-group">
              <label for="quantity">Product Colour:</label>
              <input type="text" class="form-control" name="product_colour" value="{{ $products->product_colour }}" readonly>
          </div>

          <div class="form-group">
              <label for="quantity">Product Description:</label>
              <input type="text" class="form-control" name="product_description" value="{{ $products->product_description }}" readonly>
          </div>

          <div class="form-group">
              <label for="quantity">Product Discount:</label>
              <input type="text" class="form-control" name="product_discount" value="{{ $products->product_discount }}" readonly>
          </div>
        <!-- <button type="submit" class="btn btn-primary">Update</button> -->
      </form>
  </div>
</div>
@endsection