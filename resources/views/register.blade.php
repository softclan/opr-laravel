@extends('layouts.master')
  @section('title','Register')

  @section('content')
    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100">
          <div class="login100-form-title">
            <span class="login100-form-title-1">
              Register
            </span>
          </div>

          <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="wrap-input100 validate-input m-b-26" data-validate="Firstname is required">
              <span class="label-input100">User Name</span>
              <input class="input100" type="text" name="username" placeholder="Enter Username">
              <span class="focus-input100"></span>
                      </div>
                      
                      

                       <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
                          <span class="label-input100">Email</span>
                          <input class="input100" type="text" name="username" placeholder="Enter email">
                          <span class="focus-input100"></span>
                      </div>

                     

            <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
              <span class="label-input100">Password</span>
              <input class="input100" type="password" name="pass" placeholder="Enter password">
              <span class="focus-input100"></span>
            </div>

             <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
              <span class="label-input100">Confirm Password</span>
              <input class="input100" type="password" name="pass" placeholder="Confirm password">
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