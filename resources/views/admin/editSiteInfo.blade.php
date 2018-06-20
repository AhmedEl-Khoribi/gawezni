@extends('admin.master')
@section('content')

<form method="POST" action="/admin/updateSiteInfo/{{ $info->id }}"  enctype="multipart/form-data">
	{{ csrf_field() }}
  <input type="hidden" name="_method" value="PATCH">
<div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Site Information</h3>
            </div>
	<div class="form-group has-success">
	  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Site Name</label>
	  <input type="text" class="form-control" name="site_name" id="inputSuccess" value="{{ $info->site_name }}">
	  <span class="help-block">Must Choose Special &amp; Unique Site Name</span>
	</div>
	<div class="form-group has-error">
    <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Site Key Words</label>
    <input name="key_words" type="text" class="form-control" id="inputError" value="{{ $info->key_words }}">
    <span class="help-block">Will appear in google search</span>
  </div>
  <hr>
  <div class="row">
      <div class="col-xs-4">  
        <h5>Old Site Logo</h5>
      <img src="{{ asset('site_info/'. $info->logo) }}" width="215">
      </div>
      <div class="col-xs-8">  
        <label>Upload new site logo</label>
        <input type="file" name="logo" class="form-control">
      </div>
  </div>
  <hr>
  <div class="row">
      <div class="col-xs-4">  
        <h5>Old Site Fivicon</h5>
      <img src="{{ asset('site_info/'. $info->fivicon) }}" width="215">
      </div>
      <div class="col-xs-8">  
        <label>Upload new site Fivicon</label>
        <input type="file" name="fivicon" class="form-control">
      </div>
  </div>
  <hr>
  <div class="form_group">
    <label>Description</label>
    <input name="description" class="form-control input-lg" type="text" value="{{ $info->description }}">
  </div>
  <br>
  <div class="row">
      <div class="col-xs-3">  
        <label>Author</label>
        <input name="author" type="text" class="form-control" value="{{ $info->author }}">
      </div>
      <div class="col-xs-4">  
        <label>Policy</label>
        <textarea name="policy" class="form-control" rows="3">{{ $info->policy }}
        </textarea>
      </div>
      <div class="col-xs-4">  
        <label>Website Uses</label>
        <textarea name="website_used" class="form-control" rows="3">{{ $info->website_used }}
        </textarea>
      </div>
  </div>
  <br>
  <div class="row">
      <div class="col-xs-6">  
        <label>Payment Methods</label>
        <textarea name="payment_methods" class="form-control" rows="3">{{ $info->payment_methods }}
        </textarea>
      </div>
      <div class="col-xs-6">  
        <label>Footer About</label>
        <textarea name="footer_about" class="form-control" rows="3">{{ $info->footer_about }}
        </textarea>
      </div>
  </div>
  <br>
  <div class="row">
      <div class="col-xs-3">  
        <label>Facebook Acc.</label>
        <input name="fb" type="text" class="form-control" value="{{ $info->fb }}">
      </div>
      <div class="col-xs-3">  
        <label>Twitter Acc.</label>
          <input name="tw" type="text" class="form-control" value="{{ $info->tw }}">
      </div>
      <div class="col-xs-3">  
        <label>Instagram Acc.</label>
        <input name="instagram" type="text" class="form-control" value="{{ $info->instagram }}">
      </div>
      <div class="col-xs-3">  
        <label>Google Acc.</label>
        <input name="google" type="text" class="form-control" value="{{ $info->google }}">
      </div>
  </div>
  <br>
   <div class="box box-info">
    <div class="box-header">
      <h3 class="box-title">Kasam
      </h3>
      <div class="pull-right box-tools">
        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-danger btn-sm" data-widget="remove" data-toggle="tooltip"
                title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body pad">
            <textarea id="editor1" name="term_docx" rows="10" cols="80">
                  {{ $info->term_docx }}
            </textarea>
    </div>
  </div>
<div class="box-footer">
<button type="submit" class="btn btn-success btn-block btn-flat">Edit Site's Info</button>
</div>
</form>
@if(count($errors))
<div class="alert alert-danger">
<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
</div>
@endif
@endsection