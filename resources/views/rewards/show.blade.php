@extends('layouts.adminLayout')
@section('content')
@section('title', 'Show Rewards')

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
              <label for="price">Reward Name :</label>
              <input type="text" class="form-control" name="rewards_name" value="{{$Reward->rewards_name}}" readonly />
          </div>

           <div class="form-group">
              <label for="quantity">Reward Type:</label>
              <input type="text" class="form-control"  value="{{$Reward->rewards_type}}" readonly />
             
          </div>
         
           <div class="form-group">
              <label for="price">Reward Points :</label>
              <input type="number" class="form-control" name="rewards_point" value="{{$Reward->rewards_point}}" readonly/>
          </div>

          
          <div class="form-group">
              <label for="price">Reward Picture :</label><br>
              <img style="width: 50%;" src="{{URL::asset('/uploads/'.'/'.$Reward->rewards_picture)}}"><br>
              <input type="file" class="form-control" name="rewards_picture" readonly />
          </div>

        
          <div class="form-group">
              <label for="model">Reward Description :</label>
              <input type="text" class="form-control" name="rewards_desc" value="{{$Reward->rewards_description}}" readonly />
          </div>
          
         
  </div>
</div>
@endsection