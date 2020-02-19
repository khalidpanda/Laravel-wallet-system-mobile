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
   
                  <a href="{{ url('user_access/show',$Users->id) }}"><i class="fa fa-eye fa-2x"></i></a>
                  &nbsp;&nbsp;
                    <a  href="{{ url('user_access/edit',$Users->id) }}"><i class="fa fa-edit fa-2x"></i></a>
                    &nbsp;&nbsp;
                    @csrf
                    @method('DELETE')
      
                    <a type="submit" class="text-danger"><i class="fa fa-trash-alt fa-2x"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
  
    
</div>
</div>

@endsection