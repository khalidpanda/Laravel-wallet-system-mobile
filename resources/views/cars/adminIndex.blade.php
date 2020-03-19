
@extends('layouts.adminLayout')

@section('content')

<div class="card ">
  <div class="card-body">
    
 <div class="row">
        <div class="col-lg-12 margin-tb">
           
            <div class="pull-right">
                <a class="btn btn-dark" href="{{ url('cars/create') }}"> Create New Cars</a>
            </div>
        </div>
    </div>
   
   
   <br>
    <table class="table table-bordered" id="table">
        <thead>
        <tr>
        	<th></th>
            <th>No</th>
            <th>Logo</th>
            <th>Name</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
       
        @foreach ($Car as $key => $Cars)
        <tr>
        	<td></td>
            <td>{{ $key+1 }}</td>
            <td><img style="width: 50%;" src="{{URL::asset('/uploads/'.'/'.$Cars->cars_logo)}}"></td>
            <td>{{ $Cars->cars_name }}</td>
            <td>{{ $Cars->cars_price }}</td>
            <td>
                <form action="{{ url('cars/destroy',$Cars->cars_id) }}" method="POST">
   
                    
                  <a class="btn btn-success" href="{{ url('cars/show',$Cars->cars_id) }}">View</a>
                  
                    <a class="btn btn-primary" href="{{ url('cars/edit',$Cars->cars_id) }}">Edit</a>
   

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
