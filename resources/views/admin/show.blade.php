@extends('admin.master')
@section('content')
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
    @if(isset($counteryCity))
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
                                        <th>Countery Name</th>
                                        <th>Currency</th>
                                        <th>Cities Names</th>
                                        <th>Date</th>
                                        <th>Control</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=1;
                                    ?>
                                    @foreach($counteryCity as $country)
                                        <?php
                                        $cities = $country->cities;
                                        $cityName = '';
                                        foreach($cities as $city)
                                        {
                                            $cityName .= $city->name . ' , ';
                                        }
                                        $cityName = trim($cityName,' , ');
                                        ?>
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $country->name }}</td>
                                            <td>{{ $country->currency }}</td>
                                            <td>{{ $cityName }}</td>
                                            <td>{{ $country->created_at->diffForHumans() }}</td>
                                            <td>
                                                <a href="{{ url('admin/country/'. $country->id . '/edit') }}" class="btn btn-success"><i class="fa fa-edit"> Edit</i></a>
                                                <a>
                                                    <form action="{{ url('admin/country/'.$country->id) }}" method="post" style="display: inline;">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-danger"> <i class="fa fa-remove"></i></button>
                                                    </form>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
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

@endsection