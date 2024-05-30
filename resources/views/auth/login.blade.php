@extends('layouts.auth')

@section('content')
<div class="row">
    <div class="col-xl-5"><img class="bg-img-cover bg-center" src="/gambar/logo.png" style="" alt="loginpage"></div>
    <div class="col-xl-7 p-0">
      <div class="login-card">
        <form method="POST" action="{{route('login')}}" class="theme-form login-form needs-validation" novalidate="">
            @csrf
          <h4>Login</h4>
          <h6>Welcome back! Log in to your account.</h6>

          <div class="form-group">
            <label>Email Address</label>
            <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
              <input class="form-control" type="email" required="" name="email" placeholder="Test@gmail.com">
              <div class="invalid-tooltip">Please enter proper email.</div>
            </div>
          </div>

          <div class="form-group">
            <label>Password</label>
            <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
              <input class="form-control" type="password" name="password" required="" placeholder="*********">
              <div class="invalid-tooltip">Please enter password.</div>
              <div class="show-hide"><span class="show">                         </span></div>
            </div>
          </div>
          
          <div class="form-group">
            <div class="checkbox">
              <input id="checkbox1" name="remember" type="checkbox">
              <label class="text-muted" for="checkbox1">Remember password</label>
            </div><a class="link" href="forget-password.html">Forgot password?</a>
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Sign in</button>
          </div>
          <div class="login-social-title">                
            <h5>or</h5>
          </div>


          <p>Don't have account?<a class="ms-2" href="{{route('register')}}">Create Account</a></p>
        </form>
      </div>
    </div>
  </div>
@endsection
