
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
                <form action="{{ route('country.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="box box-danger">
                        <div class="box-header">
                            <h3 class="box-title">New Country</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label>Country Name</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-pencil"></i>
                                    </div>
                                    <input type="text" class="form-control" name="name" placeholder="Country Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>currency</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-money"></i>
                                    </div>
                                    <input type="text" class="form-control" name="currency" placeholder="Currency">
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
            @endif
            @if(isset($city))
                    <form action="{{ route('city.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="box box-danger">
                            <div class="box-header">
                                <h3 class="box-title">New City</h3>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label>City Name</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-pencil"></i>
                                        </div>
                                        <input type="text" class="form-control" name="name" placeholder="City Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Choose Country</label>
                                    <select class="form-control" name="country_id">
                                        <option  value="">Please Choose Country</option>
                                        @foreach($cityCountry as $country)
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