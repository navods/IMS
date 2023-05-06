@extends('layout')

@section('content')
        <div class="container">
            <form class="mt-3">
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
              <p>New User? <b>Signup</b></p>
        </div>
@endsection