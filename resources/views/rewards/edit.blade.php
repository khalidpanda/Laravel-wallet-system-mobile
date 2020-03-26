@extends('layouts.adminLayout')
@section('content')
@section('title', 'Edit Rewards')

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
      <form enctype="multipart/form-data" method="post" action="{{action('RewardsController@update')}}">
         @csrf
          <input type="hidden" class="form-control" name="id" value="{{$Reward->rewards_id}}"  />
        <div class="form-group">
              <label for="price">Reward Name :</label>
              <input type="text" class="form-control" name="rewards_name" value="{{$Reward->rewards_name}}"  />
          </div>

           <div class="form-group">
              <label for="quantity">Reward Type:</label>
              <input type="text" class="form-control"  value="{{$Reward->rewards_type}}" readonly />
              <select class="form-control select2" name="rewards_type" style="width: 100%;">
                    <option >Please Select</option>
                    <option value="icar">icar</option>
                    <option value="irental">irental</option>
                    <option value="ipayment">ipayment</option>
                  </select>
          </div>
         
           <div class="form-group">
              <label for="price">Reward Points :</label>
              <input type="number" class="form-control" name="rewards_point" value="{{$Reward->rewards_point}}" />
          </div>

          
          <div class="form-group">
              <label for="price">Reward Picture :</label><br>
              <img style="width: 50%;" src="{{URL::asset('/uploads/'.'/'.$Reward->rewards_picture)}}"><br>
              <input type="file" class="form-control" name="rewards_picture"/>
          </div>

        
          <div class="form-group">
              <label for="model">Reward Description :</label>
              <input type="text" class="form-control" name="rewards_desc" value="{{$Reward->rewards_description}}" />
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          </form>
         
  </div>
</div>
@endsection