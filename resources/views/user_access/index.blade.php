@extends('layouts.app')
@section('content')
@section('title', 'User Access Control')

<style type="text/css">
    #table_length{
        display: none;
    }
</style>
<div class="card ">
  <div class="card-body">
 <div class="row">
        <div class="col-lg-12 margin-tb">
           
            <div class="pull-right">
                <a class="btn btn-dark" href="{{ url('user_access/create') }}"> Create New User</a>
            </div>
        </div>
    </div>
   
   <br>
    <table class="table table-bordered" id="table">
        <thead>
        <tr>
        	<th></th>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
       
        @foreach ($User as $key => $Users)
        <tr>
        	<td></td>
            <td>{{ $key+1 }}</td>
            <td>{{ $Users->name }}</td>
            <td>{{ $Users->email }}</td>
            <td>{{ $Users->role }}</td>
            <td>
                <form action="{{ url('user_access/destroy',$Users->id) }}" method="POST">
   

                  <a class="btn btn-success" href="{{ url('user_access/show',$Users->id) }}">View</a>

                  <a class="btn btn-warning" href="{{ url('user_access/right',$Users->id) }}">User Right</a>
    
                    <a class="btn btn-primary" href="{{ url('user_access/edit',$Users->id) }}">Edit</a>
   

                    @csrf
                    @method('DELETE')
      
                    <button class="btn btn-danger" type="submit" class="text-danger">Delete</i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
  
    
</div>
</div>

@endsection