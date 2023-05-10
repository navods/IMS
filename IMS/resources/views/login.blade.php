@extends('layout')

@section('bootstrap')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('content')
        <div class="container">
            <form action="{{route('login.post')}}" method="POST" class="mt-3">
              @csrf 
              <div class="mb-3">
                  <label class="form-label">Username</label>
                  <input type="username" class="form-control" name="username">
                </div>
                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary" style="width:100%;background-color:#9C10EC;border:0">Login</button>
              </form>
              <br>
              <p>New User? <a href={{route('registration')}}><b>Signup</b></a></p>
        </div>
@endsection