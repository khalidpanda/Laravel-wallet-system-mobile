@extends('layouts.adminLayout')
@section('content')
@section('title', 'Create User')

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
      <form method="post" action="{{action('UserAccessController@store')}}">
         @csrf
        <div class="form-group">
              <label for="price">Name :</label>
              <input type="text" class="form-control" name="name"/>
          </div>
         
          <div class="form-group">
              <label for="price">Email :</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="quantity">Password:</label>
              <input type="password" class="form-control" name="password"/>
          </div>

          <div class="form-group">
              <label for="quantity">Role:</label>
              <!-- <input type="text" class="form-control" name="product_status"/> -->
              <select class="form-control select2" name="role" style="width: 100%;">
                    <option >Please Select Role</option>
                    <option value="User">User</option>
                    <option value="Admin">Admin</option>
      
                  </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
@endsection