@extends('layouts.app')
@section('content')
@section('title', 'Profile')

 <a href="{{ url('logout') }}" class="nav-link"  
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              
              <p>
               {{ __('Logout') }}
              </p>
            </a>
            <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

@endsection