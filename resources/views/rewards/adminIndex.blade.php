
@extends('layouts.adminLayout')

@section('content')

<div class="card ">
  <div class="card-body">
    
 <div class="row">
        <div class="col-lg-12 margin-tb">
           
            <div class="pull-right">
                <a class="btn btn-dark" href="{{ url('rewards/create') }}"> Create New Rewards</a>
            </div>
        </div>
    </div>
   
   
   <br>
    <table class="table table-bordered" id="table">
        <thead>
        <tr>
        	<th></th>
            <th>No</th>
            <th>Picture</th>
            <th>Name</th>
            <th>Points</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
       
        @foreach ($Reward as $key => $Rewards)
        <tr>
        	<td></td>
            <td>{{ $key+1 }}</td>
            <td><img style="width: 50%;" src="{{URL::asset('/uploads/'.'/'.$Rewards->rewards_picture)}}"></td>
            <td>{{ $Rewards->rewards_name }}</td>
            <td>{{ $Rewards->rewards_point }}</td>
            <td>
                <form action="{{ url('rewards/destroy',$Rewards->rewards_id) }}" method="POST">
   
                    
                  <a class="btn btn-success" href="{{ url('rewards/show',$Rewards->rewards_id) }}">View</a>
                  
                    <a class="btn btn-primary" href="{{ url('rewards/edit',$Rewards->rewards_id) }}">Edit</a>
   

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
