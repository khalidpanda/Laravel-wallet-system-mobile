@extends('layouts.adminLayout')
@section('content')
@section('title', 'Create Rewards')

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
      <form enctype="multipart/form-data" method="post" action="{{action('RewardsController@store')}}">
         @csrf
        <div class="form-group">
              <label for="price">Rewards Name :</label>
              <input type="text" class="form-control" name="rewards_name"/>
          </div>
         
          <div class="form-group">
              <label for="quantity">Rewards Type:</label>
              <select class="form-control select2" name="rewards_type" style="width: 100%;">
                    <option >Please Select</option>
                    <option value="irental">irental</option>
                    <option value="icar">icar</option>
                    <option value="ipayment">ipayment</option>
      
                  </select>
          </div>

           <div class="form-group">
              <label for="price">Rewards Points :</label>
              <input type="number" class="form-control" name="rewards_point"/>
          </div>

           <div class="form-group">
              <label for="price">Rewards Picture :</label>
              <input type="file" class="form-control" name="rewards_picture"/>
          </div>

          

          <div class="form-group">
              <label for="price">Rewards Description :</label>
              <input type="text" class="form-control" name="rewards_desc"/>
          </div>

         


          
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
@endsection