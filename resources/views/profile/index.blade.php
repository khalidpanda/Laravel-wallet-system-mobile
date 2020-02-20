@extends('layouts.app')
@section('content')
@section('title', 'Profile')

<div class="card card-primary ">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="{{URL::asset('/dist/img/user4.png')}}" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$User->name}}</h3>

                <p class="text-muted text-center">{{$User->email}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Name</b> <a class="float-right">{{$User->name}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{$User->email}}</a>
                  </li>
               
                  <li class="list-group-item">
                    <b>Role</b> <a class="float-right">{{$User->role}}</a>
                  </li>
                </ul>

                <!-- <a href="#" class="btn btn-primary btn-block"><b>Save</b></a> -->
              </div>
              <!-- /.card-body -->
            </div>


@endsection