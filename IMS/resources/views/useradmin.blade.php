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

<table class="table" style="margin-top:3%;margin-left:auto;margin-right:auto;width:90%;">
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
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>

@endsection