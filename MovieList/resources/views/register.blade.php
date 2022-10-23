@extends('navbarguest')
@section('title', 'Register')
@section('content')
    <link rel="stylesheet" href="https://bootswatch.com/5/cyborg/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <form class="content" method="POST">
        <fieldset>
            <h5>Hello, Welcome back to <b>Movie</b>List</h5>
            <div class="form-group row"  id="column">
              <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your username">
              </div>
            </div>

            <div class="form-group row"  id="column">
              <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control-plaintext" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Email">
              </div>
            </div>

            <div class="form-group row"  id="column">
              <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control-plaintext" id="staticEmail" placeholder="Enter your Password">
              </div>
            </div>

            <div class="form-group row"  id="column">
              <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Confirm Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control-plaintext" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your conrfirm password">
              </div>
            </div>

          <button type="submit" class="btn btn-primary">Login</button>
          <div class="directLogin">
            <p>Already have an account? <a href="{{ asset('/') }}"><b>Login now!</b></a></p>
          </div>
        </fieldset>
      </form>
@include('footer')
@endsection
