@extends('layouts.app')
@section('content')
@section('title', 'Transaction History')

<div class="card card-default color-palette-box">
          <div class="card-header">
          	<center>
            <h3>
            	RM{{number_format($User->wallet,2)}}
            </h3>
            </center>
          </div>
          <div class="card-body">
          	<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Topup</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Transaction</a>
  </li>
  
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  	
<ul class="nav flex-column">
                  	@foreach ($Trans as $key => $value)
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      {{$value->timestamp->toDateString()}} <span class="float-right badge bg-success">
                      	RM {{$value->trans_value}}</span>
                    </a>
                  </li>
                  @endforeach
                 
                </ul>

  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
  
</div>
          </div>

      </div>

@endsection