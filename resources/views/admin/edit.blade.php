@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Error!</h4>
                    @foreach($errors->all() as $error)
                        <p>* {{ $error }}</p>
                    @endforeach
                </div>
            @endif
            @if (Session::has('message'))
            <!-- Modal -->
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Successful</h4>
                    @if (Session::has('message'))
                        <p>{{ Session::get('message') }}</p>
                    @endif
                </div>
            @endif
            @if(isset($country))
                <form action="{{ route('country.update',$country->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('patch') }}
                    <div class="box box-danger">
                        <div class="box-header">
                            <h3 class="box-title">Edit Country : {{ $country->name }}</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label>Country Name</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-pencil"></i>
                                    </div>
                                    <input type="text" class="form-control" name="name" value="{{ $country->name }}" placeholder="Country Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>currency</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-money"></i>
                                    </div>
                                    <input type="text" class="form-control" name="currency" value="{{ $country->currency }}" placeholder="Currancy">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="content-wrapper" style="margin-left:0">
                    <!-- Content Header (Page header) -->
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">Data Table With Full Features</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>City Name</th>
                                                    <th>Date</th>
                                                    <th>Control</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $i=1;
                                            ?>
                                            @foreach($country->cities as $city)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $city->name }}</td>
                                                    <td>{{ $city->created_at->diffForHumans() }}</td>
                                                    <td>
                                                        <a href="{{ url('admin/city/'. $country->id . '/edit') }}"  class="btn btn-success"><i class="fa fa-edit"> Edit</i></a>
                                                        <form action="{{url('admin/city/'. $country->id) }}" method="post" style="display: inline;">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <button type="submit" class="btn btn-danger"> <i class="fa fa-remove">X</i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </section>
                        <!-- /.content -->
                    </div>
            @endif
            @if(isset($countryCity))

                <form action="{{ route('city.update',$countryCity->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('patch') }}
                    <div class="box box-danger">
                        <div class="box-header">
                            <h3 class="box-title">Edit City : {{ $countryCity->name }}</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label>City Name</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-pencil"></i>
                                    </div>
                                    <input type="text" class="form-control" name="name" value="{{ $countryCity->name }}" placeholder="City Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Choose Country</label>
                                <select class="form-control" name="country_id">
                                    <option  value="">Please Choose Country</option>
                                    @foreach($cntry as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            @endif
        </div>
    </div>
@endsection