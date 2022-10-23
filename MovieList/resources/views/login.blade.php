@extends('navbarguest')
@section('title', 'Login')
@section('content')
    <link rel="stylesheet" href="https://bootswatch.com/5/cyborg/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
      <form class="content" method="POST">
        <fieldset>
            <h5>Hello, Welcome back to <b>Movie</b>List</h5>
          <div class="form-group row" id="column">
            <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control-plaintext" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
            </div>
          </div>

          <div class="form-group row" id="column">
            <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control-plaintext" id="staticEmail" placeholder="Enter Password">
            </div>
          </div>

          <fieldset class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Remember me
              </label>
            </div>
          </fieldset>

          <button type="submit" class="btn btn-primary">Login</button>
          <div class="directRegister">
            <p>Don't have an account? <a href="{{ asset('register') }}"><b>Register now!</b></a></p>
          </div>
        </fieldset>
      </form>
@include('footer')
@endsection
