@extends('layout')

@section('bootstrap')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('content')
    
<!--style="position: absolute; top: 0; bottom: 0; height: 100%; right: 0; width: 85%;"
<div>
    <table class="data">
        <tr>
            <th>
                ID
            </th>
            <th>
                Name
            </th>
            <th>
                Faculty
            </th>
            <th>
                Department
            </th>
            <th>
                Lab
            </th>
            <th>
                Authorization
            </th>
        </tr>
    </table>
</div>-->
<h1 style="margin-top:3%; margin-left:3%">New Registrations</h1>

<table class="table" style="margin-top:2%;margin-left:auto;margin-right:auto;width:90%;">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Faculty</th>
        <th scope="col">Department</th>
        <th scope="col">Lab</th>
        <th scope="col">Permission</th>
      </tr>
    </thead>
    <tbody>
      <!--<td scope="row">1</td>-->
      @foreach ($users as $user)
        <tr>
          <td>{{$user['username']}}</td>
          <td>{{$user['name']}}</td>
          <td>{{$user['facselect']}}</td>
          <td>{{$user['department']}}</td>
          <td>{{$user['labID']}}</td>
          <td>
              <div class="container">
                <form action="listuserpost/{{$user->username}}" method="POST" class="mt-0">
                  @csrf 
                  <div class="row">
                    <div class="col-5">
                      <select id="permission" name="permission" class="form-select">
                        <option value="1">No Access</option>
                        <option value="2">Accept - Technical Officer</option>
                        <option value="3">Accept - Supervisor</option>
                        <option value="4">Accept - Administrator</option>
                        <option value="0">Decline</option>
                      </select>
                    </div>
                    <div class="col-2">
                      <button type="submit" class="btn btn-primary" style="width:100%;background-color:#9C10EC;border:0;align:right">Confirm</button>
                    </div>
                  </div>
                </form>
              </div>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection