@extends('admin.master')
@section('content')
@php
  $do = (isset($_GET['do'])) ? $_GET['do'] : 'blocked' ;
@endphp
              <center>
                <a href="/admin/users?do=blocked"><button class="btn btn-link">Not-Approved/Blocked Users</button></a> || <a href="/admin/users?do=approved"><button class="btn btn-link">Approved Users</button></a>
              </center>
@if($flash = session('message'))
<div class="alert success">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
    <b>{{ $flash }}</b>
</div>
@endif
@if($flash = session('deleted'))
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
    <b>{{ $flash }}</b>
</div>
@endif
 @if($do === 'blocked')
 <div class="box">
            <div class="box-header">
  <h3 class="box-title">Data Table For Not Approved Users</h3>
</div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Approved / Not Approved</th>
                  <th>Edit / Delete / Message</th>
                  <th>View Details</th>
                </tr>
                </thead>
                <tbody>
@foreach($not_approved as $userz)
                <tr>
                  <td>{{ $userz->id }}</td>
                  <td>{{ $userz->username }}</td>
                  <td>{{ $userz->email }}</td>
                  <td>
                    <a href="/admin/approve/{{ $userz->id }}">
                      <button type="button" class="btn bg-navy btn-flat margin">Approve User</button>
                    </a>
                  </td>
                  <td>
                    <a href="/admin/edit_user/{{ $userz->id }}" class="btn btn-app">
                         <i class="fa fa-edit"></i> Edit
                    </a>
                    <a href="/admin/delete/{{ $userz->id }}" class="btn btn-app">
                         <i class="fa fa-close"></i> Delete
                    </a>
                    <a href="/admin/send_message/{{ $userz->id }}" class="btn btn-app">
                      <i class="fa fa-envelope"></i> Message
                    </a>
                  </td>
                  <td>
                  <a href="/admin/details/{{ $userz->id }}">
                    <button type="button" class="btn btn-default btn-block">View User Details</button>
                  </a>
                  </td>
                </tr>
@endforeach
                </tbody>
              </table>
            </div>
          </div>
@endif
 @if($do === 'approved')
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table For Approved Users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Approved / Not Approved</th>
                  <th>Edits / Deletes</th>
                  <th>View Details</th>
                </tr>
                </thead>
                <tbody>
@foreach($approved as $user)
                <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->username }}</td>
                  <td>{{ $user->email }}</td>
                  <td>
                    <a href="/admin/unapprove/{{ $user->id }}">
                      <button type="button" class="btn bg-purple btn-flat margin">Block User</button>
                    </a>
                  </td>
                  <td>
                    <a href="/admin/edit_user/{{ $user->id }}" class="btn btn-app">
                         <i class="fa fa-edit"></i> Edit
                    </a>
                    <a href="/admin/delete/{{ $user->id }}" class="btn btn-app">
                         <i class="fa fa-close"></i> Delete
                    </a>
                    <a href="/admin/send_message/{{ $user->id }}" class="btn btn-app">
                      <i class="fa fa-envelope"></i> Inbox
                    </a>
                  </td>
                  <td>
                  <a href="/admin/details/{{ $user->id }}">
                    <button type="button" class="btn btn-block btn-dnager">View User Details</button>
                  </a>
                  </td>
                </tr>
@endforeach
                </tbody>
              </table>
            </div>
          </div>
@endif
@endsection