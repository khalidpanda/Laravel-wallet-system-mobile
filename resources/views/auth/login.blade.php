@extends('layouts.loginLayout')



@section('content')

<!-- <img src="{{asset('dist/img/fube.png')}}" style="margin-left: 30px; margin-top: 14px;" height="42" width="62"> -->
<div class="container bg1 bg login-top">

    <div class="row justify-content-center">

<div class="row no-gutters">
    <div class="col">
<a href="#"><img class="back" src="{{URL::asset('icon/Back.png')}}"></a>
    </div>
     <div class="col sign">
<a class="tetx-white sign" href="{{route('register')}}">SIGH UP</a>
    </div>
</div>

        <h2 class="log-sign text-responsive">Sign in</h2>
   
    </div>

</div>
  
<br>

<div class="main-content log-line" style="background-color: #161A27; height: 100%;">
<br>
    <div class="row">

         <div class="col">
              <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                  <div class="form-group">
                           
  <div class="md-input">
                                    <input  class="md-form-control bg bgform-control{{ $errors->has('email') ? ' is-invalid' : '' }} text-white"   required="" type="email" name="email">
                                  
                                  
                                    <label for="email" >Email</label>
                                </div>
                         
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        @csrf
         
          <div class="w-100"></div>
    <div class="col">
           <div class="form-group">
                       
                           
    <div class="md-input">
                                    <input  name="password" class="md-form-control bg {{ $errors->has('password') ? ' is-invalid' : '' }} text-white" name="password" value="" required="" type="password" style="background-color: #161A27;">
                                   
                                    <span class="bar"></span>
                                    <label for="password">{{ __('Password') }}</label>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="highlight invalid-feedback" role="alert"></span>
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        

    </div>
        
    </div>
<div class="gap5x"></div>
 <div class="w-100"></div>
    <div class="col">
        
          <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn log-button">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn forgot text-white" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a><br><br>
                               
                            </div>
                        </div>
                    </form>
    </div>
    

</div>




                            
      <!--  <div class="col-md-8">
            <div class="card" style="margin-top: 120px; background-color: #e2e2e2;">
                <div class="card-header text-white text-center text-bold bg-dark">{{ __('Hello There ! Please login to continue') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="fube-login" id="fube-text-color">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a><br><br>
                                <p>Dont have an account?&nbsp;<a href="{{route('register')}}" id="fube-text-color">Register</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->




@endsection
