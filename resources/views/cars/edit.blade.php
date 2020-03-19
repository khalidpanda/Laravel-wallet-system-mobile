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
      <form enctype="multipart/form-data" method="post" action="{{action('CarsController@update')}}">
         @csrf
          <input type="hidden" class="form-control" name="id" value="{{$Car->cars_id}}"  />
        <div class="form-group">
              <label for="price">Name :</label>
              <input type="text" class="form-control" name="name" value="{{$Car->cars_name}}"  />
          </div>
         
           <div class="form-group">
              <label for="price">Class :</label>
              <input type="text" class="form-control" name="class" value="{{$Car->cars_class}}" />
          </div>

           <div class="form-group">
              <label for="price">Year :</label>
              <input type="text" class="form-control" name="year" value="{{$Car->cars_year}}" />
          </div>

           <div class="form-group">
              <label for="price">Logo :</label><br>
              <img style="width: 50%;" src="{{URL::asset('/uploads/'.'/'.$Car->cars_logo)}}" ><br>
              <input type="file" class="form-control" name="logo"/>
          </div>

          <div class="form-group">
              <label for="price">Picture :</label><br>
              <img style="width: 50%;" src="{{URL::asset('/uploads/'.'/'.$Car->cars_picture)}}"><br>
              <input type="file" class="form-control" name="picture"/>
          </div>

          <div class="form-group">
              <label for="price">Price :</label>
              <input type="text" class="form-control" name="price" value="{{$Car->cars_price}}" />
          </div>

        

          <div class="form-group">
              <label for="quantity">Brand:</label>
              <input type="text" class="form-control"  value="{{$Car->cars_brand}}" readonly />
              <select class="form-control select2" name="brand" style="width: 100%;">
                    <option >Please Select Brand</option>
                    <option value="BMW">BMW</option>
                    <option value="Mercedes">Mercedes</option>
      
                  </select>
          </div>

          <div class="form-group">
              <label for="model">Model :</label>
              <input type="text" class="form-control" name="model" value="{{$Car->cars_model}}" />
          </div>

          <div class="form-group">
              <label for="model">Body Type :</label>
              <input type="text" class="form-control" name="body" value="{{$Car->cars_body}}" />
          </div>

          <div class="form-group">
              <label for="model">Fuel Type :</label>
              <input type="text" class="form-control" name="fuel" value="{{$Car->cars_fuel}}" />
          </div>

          <div class="form-group">
              <label for="model">Transmission :</label>
              <input type="text" class="form-control" name="transmission" value="{{$Car->cars_transmission}}" />
          </div>

          <div class="form-group">
              <label for="model">Description :</label>
              <input type="text" class="form-control" name="desc" value="{{$Car->cars_description}}" />
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          </form>
         
  </div>
</div>
@endsection