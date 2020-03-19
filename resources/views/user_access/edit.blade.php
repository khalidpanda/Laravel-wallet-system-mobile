@extends('layouts.adminLayout')
   
@section('content')

@section('title', 'Edit User')
  <style>
  .uper {
    margin-top: 20px;
  }
</style>
<div class="pull-right">
                <a class="btn btn-primary" href="{{ url('user_access') }}"> Back</a>
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
      <form method="post" action="{{action('UserAccessController@update')}}">
        @method('PATCH')
        @csrf
        <input type="hidden" name="user_id" value="{{ $User->id }}">
        <div class="form-group">
              <label for="price">Name :</label>
              <input type="text" class="form-control" name="name" value="{{ $User->name }}"  >
          </div>
         
          <div class="form-group">
              <label for="price">Email :</label>
              <input type="email" class="form-control" name="email" value="{{ $User->email }}" >
          </div>
          <div class="form-group">
              <label for="quantity">Password:</label>
              <input type="password" class="form-control" name="password" value="{{ $User->password }}" >
          </div>

          <div class="form-group">
              <label for="quantity">Role:</label>
              <!-- <input type="text" class="form-control" name="product_status"/> -->
              <select class="form-control select2" name="role" style="width: 100%;">
                    <?php if ($User->role == 'User'):?>
                    <option selected="selected" value="User">User</option>
                    <option value="Admin">Admin</option>
                    <?php else:?>
                    <option selected="selected" value="Admin">Admin</option>
                    <option  value="User">User</option>
                  <?php endif; ?>
      
                  </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
@endsection