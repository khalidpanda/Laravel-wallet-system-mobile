@extends('layouts.loginLayout')

@section('content')

<div class="container bg1 bg login-top">

 <div class="row justify-content-center">

<div class="row no-gutters">
 <div class="col">
<a href="{{url('login')}}"><img class="back" src="{{url('/uploads/Back.png')}}"></a>
</div>
     <div class="col sign">
<a class="text-white sign" href="{{route('login')}}">SIGN IN</a>
    </div>
</div>
        <h2 class="log-sign text-responsive">Sign up</h2>
    </div>
</div>

<div class="main-content log-line" style="background-color: #161A27; height: 100%;">
<br>
        <div class="col">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group ">
                            <div class="md-input">
                                <input id="name" type="text" class="md-form-control bg bgform-control{{ $errors->has('name') ? ' is-invalid' : '' }} text-white" name="name" value="{{ old('name') }}" required autofocus>
                               <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            </div>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                             <div class="md-input">
                                    <input id="email" type="email" class="md-form-control bg bgform-control{{ $errors->has('email') ? ' is-invalid' : '' }} text-white" name="email" value="{{ old('email') }}" required>
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                             </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <div class="md-input">
                                <input id="password" type="password" class="md-form-control bg bgform-control{{ $errors->has('password') ? ' is-invalid' : '' }} text-white" name="password" required>

                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            </div>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <div class="md-input">
                                <input id="password-confirm" type="password" class="md-form-control bg bgform-control text-white" name="password_confirmation" required>

                                 <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                             </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn log-button" id="fube-text-color" style="height: 40%;">
                                    {{ __('Sign up') }}
                                </button> <br><br>
                                <a class="btn btn text-white" href="{{route('login')}}" id="fube-text" style="border: 1px solid white; border-radius: 30%; width: 50%; margin-left: 26%; ">Sign In</a>
                            </div>
                            <div class="gap5x"></div>
                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection
