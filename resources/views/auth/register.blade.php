@extends('layouts.master')
@section('title','Register')
@section('content')

   <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100">
          <div class="login100-form-title">
            @if(session()->has('message'))
               <div class="alert alert-success">
                 {{ session()->get('message') }}
               </div>
           @endif
            <span class="login100-form-title-1">
              Register
            </span>
          </div>

          <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="wrap-input100 validate-input m-b-26" data-validate="Firstname is required">
                  <span class="label-input100">Name</span>
                  <input class="input100" type="text" name="name" placeholder="Enter Name" value="{{ old('name') }}">
                  <span class="focus-input100"></span>
                  
            </div>
            @if ($errors->has('name'))
                <span class="errors" role="alert">
               {{ $errors->first('name') }}
                </span>
            @endif
                      
                      

           <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
              <span class="label-input100">Email</span>
              <input class="input100" type="text" name="email" placeholder="Enter email" value="{{ old('email') }}">
              <span class="focus-input100"></span>
               
           </div>
           @if ($errors->has('email'))
               <span class="errors" role="alert">
                {{ $errors->first('email') }}
               </span>
           @endif

                     

            <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
              <span class="label-input100">Password</span>
              <input class="input100" type="password" name="password" placeholder="Enter password">
              <span class="focus-input100"></span>
            </div>

            @if ($errors->has('password'))
                <span class="errors" role="alert">
                    {{ $errors->first('password') }}
                </span>
            @endif

             <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
              <span class="label-input100">Confirm Password</span>
              <input class="input100" type="password" name="password_confirmation" placeholder="Confirm password">
              <span class="focus-input100"></span>
            </div>

            <div class="flex-sb-m w-full p-b-30">

              <div>
               
              </div>
                      </div>
                      

            <div class="container-login100-form-btn">
              <button class="login100-form-btn">
                Register
                          </button>
                      </div>
          </form>
        </div>
      </div>
    </div>



@endsection
