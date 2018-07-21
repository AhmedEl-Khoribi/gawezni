@extends('admin.master')
@section('content')
<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-yellow">
    <div class="inner">
        @php
            $count = \App\Client::count();
            $premium = \App\Client::where('member_ship', 'premium')->count();
        @endphp
      <h3>{{ $count }}</h3>

      <p>All Users</p>
    </div>
    <div class="icon">
      <i class="ion ion-person-add"></i>
    </div>
    <a href="/admin/all_users" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div>
<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-red">
    <div class="inner">
      <h3>{{ $premium }}</h3>

      <p>Premium Users</p>
    </div>
    <div class="icon">
      <i class="ion ion-pie-graph"></i>
    </div>
    <a href="/admin/all_users" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div>
@endsection