@extends('admin.master')
@section('content')

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table For Not-Approved Users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>UserName</th>
                  <th>Email</th>
                  <th>Approved / Not Approved</th>
                  <th>See Full Profile</th>
                </tr>
                </thead>
                <tbody>
                @foreach()
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
@endsection