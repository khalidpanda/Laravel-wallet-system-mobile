@extends('layouts.adminLayout')
@section('content')
@section('title', 'Create Car')

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
      <form enctype="multipart/form-data" method="post" action="{{action('CarsController@store')}}">
         @csrf
        <div class="form-group">
              <label for="price">Name :</label>
              <input type="text" class="form-control" name="name"/>
          </div>
         
            <div class="form-group">
              <label for="quantity">Class:</label>
              <select class="form-control select2" name="class" style="width: 100%;">
                    <option >Please Select Class</option>
                    <option value="Cars">Cars</option>
                    <option value="Sedan">Sedan</option>
                    <option value="SUV">SUV</option>
                    <option value="Hatchback">Hatchback</option>
                    <option value="Van">Van</option>
      
                  </select>
          </div>

           <div class="form-group">
              <label for="price">Year :</label>
              <input type="text" class="form-control" name="year"/>
          </div>

           <div class="form-group">
              <label for="price">Logo :</label>
              <input type="file" class="form-control" name="logo"/>
          </div>

          <div class="form-group">
              <label for="price">Picture :</label>
              <input type="file" class="form-control" name="picture"/>
          </div>

          <div class="form-group">
              <label for="price">Price :</label>
              <input type="text" class="form-control" name="price"/>
          </div>

         <div class="form-group">
              <label for="quantity">Brand:</label>
              <select class="form-control select2" name="brand" style="width: 100%;">
                    <option >Please Select Brand</option>
                    <option value="BMW">BMW</option>
                    <option value="Mercedes">Mercedes</option>
                    <option value="Volkswagen">Volkswagen</option>
                  </select>
          </div>

          <div class="form-group">
              <label for="model">Model :</label>
              <input type="text" class="form-control" name="model"/>
          </div>

          <div class="form-group">
              <label for="model">Body Type :</label>
              <input type="text" class="form-control" name="body"/>
          </div>

          <div class="form-group">
              <label for="model">Fuel Type :</label>
              <input type="text" class="form-control" name="fuel"/>
          </div>

          <div class="form-group">
              <label for="model">Transmission :</label>
              <input type="text" class="form-control" name="transmission"/>
          </div>

          <div class="form-group">
              <label for="model">Description :</label>
              <input type="text" class="form-control" name="desc"/>
          </div>

          
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
@endsection