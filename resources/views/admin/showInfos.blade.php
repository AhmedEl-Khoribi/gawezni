@extends('admin.master')
@section('content')
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

<div class="box">
            <div class="box-header">
  <h3 class="box-title">Data Table For Site Information</h3>
</div>
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Site Name</th>
          <th>Logo</th>
          <th>Fivicon</th>
          <th>Key Words</th>
          <th>Description</th>
          <th>Author</th>
          <th>Kasam</th>
          <th>Policy</th>
          <th>Website Use</th>
          <th>Payment Methods</th>
          <th>Footer About Us</th>
          <th>Social Accounts</th>
          <th>Edit / Delete</th>
        </tr>
        </thead>
        <tbody>
@foreach($infos as $info)
        <tr>
          <td>{{ $info->id }}</td>
          <td>{{ $info->site_name }}</td>
          <td><img src="/public/site_info/{{ $info->logo }}" width="70"></td>
          <td><img src="/public/site_info/{{ $info->fivicon }}" width="90"></td>
          <td>{{ $info->key_words }}</td>
          <td>{{ $info->description }}</td>
          <td>{{ $info->author }}</td>
          <td>{{ $info->term_docx }}</td>
          <td>{{ $info->policy }}</td>
          <td>{{ $info->website_used }}</td>
          <td>{{ $info->payment_methods }}</td>
          <td>{{ $info->footer_about }}</td>
          <td>
              <a href="{{ $info->fb }}" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
              <br>
              <a href="{{ $info->tw }}" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
              <br>
              <a href="{{ $info->instagram }}" class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
              <br>
              <a href="{{ $info->google }}" class="btn btn-social-icon btn-google"><i class="fa fa-google-plus"></i></a>
          </td>
          <td>
            <a href="/admin/edit_info/{{ $info->id }}" class="btn btn-app">
                 <i class="fa fa-edit"></i> Edit
            </a>
          </td>
        </tr>
@endforeach
        </tbody>
      </table>
    </div>
  </div>

          @endsection