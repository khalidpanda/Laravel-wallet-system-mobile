@extends('layouts.app')
@section('content')
@section('title', 'Product Management')

 <style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card ">
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
      <form method="post" action="{{action('ProductController@store')}}">
         @csrf
        <div class="form-group">
              <label for="price">Product Picture :</label>
              <input type="file" class="form-control" name="product_picture"/>
          </div>
          <div class="form-group">
             
              <input type="hidden" class="form-control" name="product_user" value="{{ Auth::user()->id }}" >
              <label for="name">Product Name:</label>
              <input type="text" class="form-control" name="product_name"/>
          </div>
          <div class="form-group">
              <label for="price">Product SKU :</label>
              <input type="text" class="form-control" name="product_sku"/>
          </div>
          <div class="form-group">
              <label for="quantity">Product Price:</label>
              <input type="text" class="form-control" name="product_price"/>
          </div>

          <div class="form-group">
              <label for="quantity">Product Status:</label>
              <!-- <input type="text" class="form-control" name="product_status"/> -->
              <select class="form-control select2" name="product_status" style="width: 100%;">
                    <option selected="selected">Active</option>
                    <option>Suspended</option>
      
                  </select>
          </div>

          <div class="form-group">
              <label for="quantity">Product Quantity:</label>
              <input type="text" class="form-control" name="product_quantity"/>
          </div>

          <div class="form-group">
              <label for="quantity">Product Special Price:</label>
              <input type="text" class="form-control" name="product_special_price"/>
          </div>

          <div class="form-group">
              <label for="quantity">Product Colour:</label>
              <input type="text" class="form-control" name="product_colour"/>
          </div>

          <div class="form-group">
              <label for="quantity">Product Description:</label>
              <input type="text" class="form-control" name="product_description"/>
          </div>

          <div class="form-group">
              <label for="quantity">Product Discount:</label>
              <input type="text" class="form-control" name="product_discount"/>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
@endsection