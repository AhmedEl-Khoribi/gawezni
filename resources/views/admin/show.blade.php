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
                                            <td>{{ $country->id }}</td>
                                            <td>{{ $country->name }}</td>
                                            <td>{{ $country->currency }}</td>
                                            <td>{{ $cityName }}</td>
                                            <td>{{ $country->created_at }}</td>
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
    @if(isset($chats))
        <div class="content-wrapper" style="margin-left:0;">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">All Client Messages</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Sender Name</th>
                                            <th>Sends Message Count</th>
                                            <th>recived Message Count</th>
                                            <th>Sending At</th>
                                            <th>view Client Chats</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $i=1;
                                    ?>
                                    @foreach($chats as $chat)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ \App\Client::find($chat->sender_id)->fname }}</td>
                                            <td>{{ \App\Mail::where('sender_id',$chat->sender_id)->count() }}</td>
                                            <td>{{ \App\Mail::where('receiver_id',$chat->sender_id)->count() }}</td>
                                            <td>{{ \App\Client::find($chat->sender_id)->created_at }}</td>
                                            <td><a href="mail/{{ $chat->sender_id }}/edit"> Show </a></td>
                                        </tr>
                                    @endforeach
                                        <td></td>
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
    @if(isset($clientChat))
        <div class="col-md-12">
                <!-- DIRECT CHAT -->
                <div class="box box-warning direct-chat direct-chat-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Chats To {{ \App\Client::find($clientChat[0]->sender_id)->fname . ' ' . \App\Client::find($clientChat[0]->sender_id)->lname }}</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts"
                                    data-widget="chat-pane-toggle">
                                <i class="fa fa-comments"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="direct-chat-messages">
                            <?php
                            $i=1;
                            ?>
                            @foreach($clientChat as $chat)
                                    <?php
                                        $var = explode('/',parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH ))[3];
                                    ?>
                                @if($chat->sender_id == $var)
                                    <div class="direct-chat-msg">
                                        <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name pull-right">{{ \App\Client::find($chat->sender_id)->fname . ' ' . \App\Client::find($chat->sender_id)->lname }}</span>
                                            <span class="direct-chat-timestamp pull-left">{{ $chat->created_at }}</span>
                                        </div>
                                        <img class="direct-chat-img" src="{{ asset('files/users/'.\App\Client::find($chat->sender_id)->image ) }}" alt="message user image">
                                        <div class="direct-chat-text">
                                            {{ $chat->body }}
                                        </div>
                                    </div>
                                @else
                                    <div class="direct-chat-msg right">
                                        <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name pull-right">{{ \App\Client::find($chat->sender_id)->fname . ' ' . \App\Client::find($chat->sender_id)->lname }}</span>
                                            <span class="direct-chat-timestamp pull-left">{{ $chat->created_at }}</span>
                                        </div>
                                        <img class="direct-chat-img" src="{{ asset('files/users/'.\App\Client::find($chat->sender_id)->image ) }}" alt="message user image">
                                        <div class="direct-chat-text">
                                            {{ $chat->body }}
                                        </div>
                                    </div>
                                @endif

                            @endforeach
                        </div>
                        <!--/.direct-chat-messages-->

                        <!-- /.direct-chat-pane -->
                    </div>














                </div>
                <!--/.direct-chat -->
            </div>

    @endif
@endsection
