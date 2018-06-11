@extends('admin.master')
@section('content')

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table For Not Approved Users</h3>
            </div>
@if($flash = session('message'))
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
    <b>{{ $flash }}</b>
</div>
@endif
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Approved / Not Approved</th>
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
                  <a href="/admin/details/{{ $userz->id }}">
                    <button type="button" class="btn btn-default btn-block">View User Details</button>
                  </a>
                  </td>
                </tr>
@endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
<hr>
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
                      <button type="button" class="btn bg-navy btn-flat margin">Block User</button>
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
            <!-- /.box-body -->
          </div>
@endsection