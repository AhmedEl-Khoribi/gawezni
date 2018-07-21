@extends('admin.master')
@section('content')
@php
  $do = (isset($_GET['do'])) ? $_GET['do'] : 'blocked' ;
@endphp
<style>
    .exportExcel{
  padding: 5px;
  border: 1px solid grey;
  margin: 5px;
  cursor: pointer;
}
</style>

<div class="box">
            <div class="box-header">
  <h3 class="box-title">Data Table For Not Approved Users</h3>
</div>
            <div class="box-body">
              <table id="example3" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Full Name</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th>MemberShip</th>
                  <th>Registered At</th>
                </tr>
                </thead>
                <tbody>
@foreach($users as $user)
                <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->username }}</td>
                  <td>{{ $user->fname }} {{ $user->lname }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->phone }}</td>
                  <td>{{ $user->member_ship }}</td>
                  <td>{{ $user->created_at }}</td>
                </tr>
@endforeach
                </tbody>
              </table>
            </div>
          </div>
@endsection