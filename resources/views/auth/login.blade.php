@extends('layouts.master')
    @section('title','Login')

@section('content')

<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="errors" style="background-image: url(images/bg-01.jpg);">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                         <span class="errors">
                          {{ session()->get('message') }}
                          </span>
                        </div>
                    @endif
                    <span class="login100-form-title-1">
                        Sign In
                    </span>
                </div>

               
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="text" name="email" placeholder="Enter Email">
                        <span class="focus-input100"></span>
                    </div>
                    @if ($errors->has('email'))
                        <span class="errors" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="Enter password">
                        <span class="focus-input100"></span>
                    </div>


                    @if ($errors->has('password'))
                        <span class="errors" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                    <div class="flex-sb-m w-full p-b-30">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div>

                        <div>
                            <a href="{{ route('password.request') }}" class="txt1">
                                Forgot Password?
                            </a>
                        </div>
                    </div>
                    

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
