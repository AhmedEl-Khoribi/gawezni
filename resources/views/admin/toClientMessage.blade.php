@extends('admin.master')
@section('content')

<div class="box box-info">
    <div class="box-header">
      <h3 class="box-title">Compose New Message
        <small>to client</small>
      </h3>
      <div class="pull-right box-tools">
        <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-danger btn-sm" data-widget="remove" data-toggle="tooltip"
                title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <form action="/admin/send/message" method="GET">
        {{ csrf_field() }}
        <input type="hidden" name="client_id" value="{{ $user->id }}">
        <div class="box-body pad">
            <div class="form-group">
                <input class="form-control" placeholder="To: {{ $user->username }}" disabled>
            </div>
            <textarea class="textarea" name="message_to_client"
                      style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" placeholder="Compose New Message...">
            </textarea>
        </div>
        <div class="box-footer">
          <div class="pull-right">
            <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
          </div>
          <a href="{{ url()->previous() }}" onclick="alert('Are you sure? Cancel messaging')"><button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button></a>
        </div>
    </form>
  </div>

@endsection
