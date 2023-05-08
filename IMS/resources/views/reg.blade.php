@extends('layout')

@section('content')
        <div class="container">
            <form action="{{route('registration.post')}}" method="POST" class="mt-3">
              @csrf  
              <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="name" class="form-control" name="name">
                  </div>
                <div class="mb-3">
                  <label class="form-label">Username</label>
                  <input type="username" class="form-control" name="username">
                </div>
                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary" style="width:100%;background-color:#9C10EC;border:0">Signup</button>
              </form>
              <br>
              <p>Already have an account? <a href={{route('login')}}><b>Login</b></a></p>
        </div>
@endsection