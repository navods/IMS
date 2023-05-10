@extends('layout')

@section('bootstrap')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('content')
        <div class="container">
            <form action="{{route('registration.post')}}" method="POST" class="mt-3">
              @csrf  
              <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="name" class="form-control" name="name">
                  </div>
                <div class="mb-3">
                  <label class="form-label">User ID</label>
                  <input type="username" class="form-control" name="username">
                </div>
                <div class="mb-3">
                  <label for="facselect" class="form-label">Select Faculty</label>
                  <select id="facselect" class="form-select">
                    <option>Faculty of Technology</option>
                    <option>Faculty of Science</option>
                    <option>Faculty of Law</option>
                    <option>Faculty of Management & Finance</option>
                    <option>Faculty of Arts</option>
                    <option>Faculty of Medicine</option>
                    <option>Faculty of Nursing</option>
                    <option>Faculty of Indigenous Medicine</option>
                    <option>Faculty of Graduate Studies</option>
                    <option>Faculty of Education</option>
                    <option>School of Computing</option>
                    <option>Sri Palee Campus</option>
                    <option>Department of Physical Education</option>
                    <option>College House</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">Enter Department (if applicable)</label>
                  <input type="department" class="form-control" name="department">
                </div>
                <div class="mb-3">
                  <label class="form-label">Enter Lab ID (if applicable)</label>
                  <input type="labID" class="form-control" name="labID">
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

<!--comment-->