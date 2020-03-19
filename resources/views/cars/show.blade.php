@extends('layouts.adminLayout')
@section('content')
@section('title', 'Show Car')

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
     
        <div class="form-group">
              <label for="price">Name :</label>
              <input type="text" class="form-control" name="name" value="{{$Car->cars_name}}" readonly />
          </div>
         
           <div class="form-group">
              <label for="price">Class :</label>
              <input type="text" class="form-control" name="class" value="{{$Car->cars_class}}" readonly/>
          </div>

           <div class="form-group">
              <label for="price">Year :</label>
              <input type="text" class="form-control" name="year" value="{{$Car->cars_year}}" readonly/>
          </div>

           <div class="form-group">
              <label for="price">Logo :</label><br>
              <img style="width: 50%;" src="{{URL::asset('/uploads/'.'/'.$Car->cars_logo)}}" >
          </div>

          <div class="form-group">
              <label for="price">Picture :</label><br>
              <img style="width: 50%;" src="{{URL::asset('/uploads/'.'/'.$Car->cars_picture)}}">
          </div>

          <div class="form-group">
              <label for="price">Price :</label>
              <input type="text" class="form-control" name="price" value="{{$Car->cars_price}}" readonly/>
          </div>

         <div class="form-group">
              <label for="price">Brand :</label>
              <input type="text" class="form-control" name="brand" value="{{$Car->cars_brand}}" readonly/>
          </div>

          <div class="form-group">
              <label for="model">Model :</label>
              <input type="text" class="form-control" name="model" value="{{$Car->cars_model}}" readonly/>
          </div>

          <div class="form-group">
              <label for="model">Body Type :</label>
              <input type="text" class="form-control" name="body" value="{{$Car->cars_body}}" readonly/>
          </div>

          <div class="form-group">
              <label for="model">Fuel Type :</label>
              <input type="text" class="form-control" name="fuel" value="{{$Car->cars_fuel}}" readonly/>
          </div>

          <div class="form-group">
              <label for="model">Transmission :</label>
              <input type="text" class="form-control" name="transmission" value="{{$Car->cars_transmission}}" readonly/>
          </div>

          <div class="form-group">
              <label for="model">Description :</label>
              <input type="text" class="form-control" name="desc" value="{{$Car->cars_description}}" readonly/>
          </div>

          
         
  </div>
</div>
@endsection