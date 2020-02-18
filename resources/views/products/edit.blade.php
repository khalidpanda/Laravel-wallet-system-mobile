@extends('layouts.app')
   
@section('content')
@section('title', 'Product Management')
  <style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Share
  </div>
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
      <form method="post" action="{{ url('products.update', $products->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Product Name:</label>
          <input type="text" class="form-control" name="product_name" value={{ $products->product_name }} />
        </div>
        <div class="form-group">
          <label for="price">Product SKU :</label>
          <input type="text" class="form-control" name="product_sku" value={{ $products->product_sku }} />
        </div>
        <div class="form-group">
          <label for="quantity">Product Price:</label>
          <input type="text" class="form-control" name="product_price" value={{ $products->product_price }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection