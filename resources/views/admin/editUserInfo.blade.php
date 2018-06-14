@extends('admin.master')
@section('content')

<form method="POST" action="/admin/updateUser/{{ $user->id }}">
	{{ csrf_field() }}
  <input type="hidden" name="_method" value="PATCH">
<div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Main Information</h3>
            </div>
	<div class="form-group has-success">
	  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Username</label>
	  <input type="text" class="form-control" name="username" id="inputSuccess" value="{{ $user->username }}">
	  <span class="help-block">Must Choose a unique Username</span>
	</div>
	<div class="form-group">
      <label>Email</label>
      <input type="text" name="email" class="form-control" value="{{ $user->email }}">
    </div>
	<div class="box-body">
      <div class="row">
        <div class="col-xs-3">
        <label>Phone</label>
          <input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
        </div>
        <div class="col-xs-4">
        <label>Career Field</label>
          <input type="text" name="career_field" class="form-control" value="{{ $user->career_field }}">
        </div>
        <div class="col-xs-5">
        <label>Job</label>
          <input type="text" name="job" class="form-control" value="{{ $user->job }}">
        </div>
      </div>
    </div>
    <div class="box-body">
      <div class="row">
        <div class="col-xs-3">
        <div class="form-group">
          <label>Education</label>
          <select class="form-control" name="education">
            <option value="medium_school" @if($user->education === "medium_school") {{ 'selected' }} @endif>Medium School</option>
            <option value="high_school" @if($user->education === "high_school") {{ 'selected' }} @endif>High School</option>
            <option value="university" @if($user->education === "university") {{ 'selected' }} @endif>University</option>
            <option value="PHD" @if($user->education === "PHD") {{ 'selected' }} @endif>PHD</option>
            <option value="self_study" @if($user->education === "self_study") {{ 'selected' }} @endif>Self Study</option>
          </select>
        </div>
        </div>
        <div class="col-xs-4">
        <label>Salary ( {{ $user->city->country->currency }} )</label>
          <input type="text" name="salary" class="form-control" value="{{ $user->salary }}">
        </div>
        <div class="col-xs-5">
        <div class="form-group">
          <label>Finantial Status</label>
          <select class="form-control" name="financial_status">
            <option value="poor" @if($user->financial_status === "poor") {{ 'selected' }} @endif>Poor</option>
            <option value="lower_than_medium" @if($user->financial_status === "lower_than_medium") {{ 'selected' }} @endif>Lower Than Medium</option>
            <option value="medium" @if($user->financial_status === "medium") {{ 'selected' }} @endif>Medium</option>
            <option value="more_than_medium" @if($user->financial_status === "more_than_medium") {{ 'selected' }} @endif>More Than Medium</option>
            <option value="good" @if($user->financial_status === "good") {{ 'selected' }} @endif>Good</option>
            <option value="mastora" @if($user->financial_status === "mastora") {{ 'selected' }} @endif>Mastoora w ell7</option>
            <option value="rich" @if($user->financial_status === "rich") {{ 'selected' }} @endif>Rich</option>
          </select>
        </div>
      </div>
    </div>
   </div>
   <div class="box-body">
      <div class="row">
         <div class="col-xs-3">
        	<label>First Name</label>
          <input type="text" name="fname" class="form-control" value="{{ $user->fname }}">
        </div>
        <div class="col-xs-4">
        <label>Last Name</label>
          <input type="text" name="lname" class="form-control" value="{{ $user->lname }}">
        </div>
        <div class="col-xs-5">
        <div class="form-group">
          <label>Gender</label>
          <select class="form-control" name="gender" id="gender">
            <option value="male" @if($user->gender === "male") {{ 'selected' }} @endif>Male</option>
            <option value="female" @if($user->gender === "female") {{ 'selected' }} @endif>Female</option>
          </select>
        </div>
      </div>
    </div>
   </div>
   <div class="row">
         <div class="col-xs-3">
   <div class="form-group">
    <label>Date Of Birth:</label>
    <div class="input-group date">
      <div class="input-group-addon">
        <i class="fa fa-calendar"></i>
      </div>
      <input type="text" name="dob" class="form-control pull-right" id="datepicker" value="{{ $user->dob }}">
    </div>
	</div>
	</div>
	<div class="col-xs-4">
    <div class="form-group">
      <label>Country</label>
      <select class="form-control" id="country">
      	@foreach($countries as $country)
        <option value="{{ $country->id }}" @if($user->city->country->name === $country->name) {{ 'selected' }} @endif>{{  $country->name }}
        </option>
        @endforeach
      </select>
    </div>
    </div>
    <div class="col-xs-4">
    <div class="form-group" style="display: none;" id="cityDisplay">
      <label>City</label>
      <select class="form-control" id="city" name="city_id">
        <option value="1">choose City</option>
      </select>
    </div>
    </div>
  </div>
</div>
<div class="box box-success">
	<div class="box-header with-border">
        <h3 class="box-title">Social Infromation</h3>
    </div>
<div class="box-body">
      <div class="row">
        <div class="col-xs-3">
        <div class="form-group">
          <label>Social Status</label>
          <select class="form-control" name="social_status" id="social_single">
            <option value="single" @if($user->social_status === "single") {{ 'selected' }} @endif>Single</option>
            <option value="married" @if($user->social_status === "married") {{ 'selected' }} @endif>Married</option>
            <option value="divorced" @if($user->social_status === "divorced") {{ 'selected' }} @endif>Divorced</option>
            <option value="willow" @if($user->social_status === "willow") {{ 'selected' }} @endif>Willow</option>
          </select>
        </div>
        </div>
        @if($user->gender === 'male')
        <div class="col-xs-3" id="marraige12">
        <div class="form-group">
          <label>Number Of Wives</label>
          <select class="form-control" name="marraige_status">
            <option value="first" @if($user->marraige_status === "first") {{ 'selected' }} @endif>First</option>
            <option value="second" @if($user->marraige_status === "second") {{ 'selected' }} @endif>Second</option>
            <option value="third" @if($user->marraige_status === "third") {{ 'selected' }} @endif>Third</option>
            <option value="fourth" @if($user->marraige_status === "fourth") {{ 'selected' }} @endif>Fourth</option>
          </select>
        </div>
      </div>
      @endif
      @if($user->social_status === 'married' || $user->social_status === 'divorced')
      <div class="col-xs-4" id="numberChild">
        <label>Number Of Children</label>
          <input type="text" name="children_number" class="form-control" value="{{ $user->children_number }}">
      </div>
      @endif
    </div>
   </div>
   <div class="box box-info">
    <div class="box-header">
      <h3 class="box-title">About User
        <small>Describtion about user</small>
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
            <textarea id="editor1" name="main_description" rows="10" cols="80">
                  {{ $user->main_description }}
            </textarea>
    </div>
  </div>
   <div class="box box-info">
    <div class="box-header">
      <h3 class="box-title">Other Person Information
        <small>Your partner description</small>
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
    <div class="box-body pad">
        <textarea class="textarea" name="other_person_description"
                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                  	{{ $user->other_person_description }}
        </textarea>
    </div>
  </div>
  <div class="box box-warning">
	<div class="box-header with-border">
	    <h3 class="box-title">Shape & Body</h3>
  </div>
  <div class="box-body">
      <div class="row">
         <div class="col-xs-3">
        	<label>Weight</label>
          <input type="text" name="weight" class="form-control" value="{{ $user->weight }}">
        </div>
        <div class="col-xs-4">
        <label>Height</label>
          <input type="text" name="height" class="form-control" value="{{ $user->height }}">
        </div>
        <div class="col-xs-5">
        <div class="form-group">
          <label>Physique</label>
          <select class="form-control" name="physique">
            <option value="thin" @if($user->physique === "thin") {{ 'selected' }} @endif>Thin</option>
            <option value="medium_thin" @if($user->physique === "medium_thin") {{ 'selected' }} @endif>Moderate thin
            </option>
            <option value="sporty" @if($user->physique === "sporty") {{ 'selected' }} @endif>Sporty</option>
            <option value="fat" @if($user->physique === "fat") {{ 'selected' }} @endif>Fat</option>
			<option value="huge" @if($user->physique === "huge") {{ 'selected' }} @endif>Huge</option>
          </select>
        </div>
      </div>
    </div>
   </div>
   <div class="form-group">
	  <label>Skin Color</label>
	  <select class="form-control" name="skin_color">
	    <option value="white" @if($user->skin_color === "white") {{ 'selected' }} @endif>White</option>
	    <option value="black" @if($user->skin_color === "black") {{ 'selected' }} @endif>Black
	    </option>
	    <option value="dark_brown" @if($user->skin_color === "dark_brown") {{ 'selected' }} @endif>Dark Brown</option>
	    <option value="brown" @if($user->skin_color === "brown") {{ 'selected' }} @endif>Brown</option>
		<option value="7enty_dark" @if($user->skin_color === "7enty_dark") {{ 'selected' }} @endif>حنطي غامق</option>
		<option value="7enty_white" @if($user->skin_color === "7enty_white") {{ 'selected' }} @endif>ححنطي  فاتح
		</option>
	  </select>
	</div>
</div>
<div class="form-group has-error">
  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Health Issues</label>
  <input type="text" name="health_details" class="form-control" id="inputError" value="{{ $user->health_details }}">
  <span class="help-block">all about users health</span>
</div>
<div class="box-footer">
<button type="submit" class="btn btn-success btn-block btn-flat">Edit User's Info</button>
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