<!DOCTYPE HTML>
<html>
<head>
<title>هتجوز </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Best Day Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="/visitor/css/bootstrap.css" rel="stylesheet" type="text/css" />

<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
<link href="//cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="icon" href="/visitor/images/16x16.png" sizes="16x16" type="image/png">

<!--Custom-Theme-files-->
	<link href="/visitor/css/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<style>
.fa-thumbs-o-down {
 color:#000;   
}
.fa-circle-thin {
 color:#000;   
}
.fa-heart {
 color:#000;   
}
.alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
}

.alert.success {background-color: #4CAF50;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}
.closebtn:hover {
    color: black;
}


p {
  margin: 5px 0;
  font-weight: 300;
}

.strip-background {
  position: absolute;
  z-index: 0;
  top: 0;
  width: 100%;
  height: 215px;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: top center;
	direction: rtl;
}

.card {
  background: #FFFFFF;
  box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.2);
  border-radius: 8px;
  padding: 20px;
}
@media screen and (min-width: 768px) {
  .card {
    padding: 30px;
  }
}

.search__container {
  padding: 0 20px;
  margin: 20px auto 0;
  position: relative;
  z-index: 1;
  min-height:300px;
}
@media screen and (min-width: 768px) {
  .search__container {
    padding: 0;
    width: 75%;
    margin-top: 40px;
  }
}

.search-item {
  border-bottom: 1px solid #D3DCE6;
  padding-bottom: 20px;
  margin-bottom: 20px;
  display: flex;
  flex-wrap: wrap;
	direction: rtl;
}
.search-item:last-child {
  border-bottom: none;
  padding-bottom: 0;
  margin-bottom: 0;
}
@media screen and (min-width: 768px) {
  .search-item {
    flex-wrap: no-wrap;
  }
}

.search-item__content {
  padding-top: 2px;
  order: 5;
  width: 100%;
}
@media screen and (min-width: 600px) {
  .search-item__content {
    width: auto;
  }
}

.search-item__image {
  order: 1;
  width: 50px;
  height:50px;
  background-color: red;
  border-radius: 8px;
  margin-right: 15px;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  margin-bottom: 10px;
}
@media screen and (min-width: 600px) {
  .search-item__image {
    width: 80px;
    height: 80px;
    margin-bottom: 0;
  }
}

.search-item__options {
  order: 2;
  margin-left: auto;
	margin-right: 250px
}
@media screen and (min-width: 600px) {
  .search-item__options {
    order: 10;
  }
}

.label {
  display: inline-block;
  border-radius: 4px;
  font-size: 10px;
  padding: 5px;
  vertical-align: middle;
}

.label--red {
  background-color: #FF4747;
  color: #FFFFFF;
}

.button {
  display: inline-block;
  text-transform: uppercase;
  border: 0;
  border-radius: 8px;
  background-color: red;
  font-size: 14px;
  padding: 22px;
}

.button--small {
  font-size: 10px;
  padding: 10px;
}

.button--block {
  display: block;
  width: 100%;
}

.button--primary {
  background-color: #72CB36;
  color: #FFFFFF;
}

.button--outline {
  border: 1px solid #D3DCE6;
  color: #A1A1A1;
  background-color: transparent;
}

.text--upcase {
  text-transform: uppercase;
}

.text--small {
  font-size: 14px;
}

.text--muted {
  color: #8F8F8F;
	direction: rtl;
	text-align: center;
	margin-right:250px
}

.text--medium {
  font-weight: 400;
	direction: rtl;
	float: right;
	padding-right: 20px
}

.text--center {
  text-align: center;
}

.form {
  width: 100%;
}

input[type="text"],
input[type="date"] {
  border: 0;
  border-bottom: 1px solid #D3DCE6;
  display: block;
  width: 100%;
  height: 60px;
  margin-bottom: 10px;
  font-size: 17px;
  padding: 10px 0 0 0;
  transition: all 0.3s ease;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}
input[type="text"]:focus,
input[type="date"]:focus {
  outline: 0;
  border-color: #72A3FF;
}

.input__w-placeholder {
  position: relative;
}

label {
  position: absolute;
  transition: all 0.1s ease;
  z-index: 1;
  left: 0;
  top: 20px;
  color: #A1A1A1;
}
.focus label, .static-label label {
  top: 0;
  font-size: 12px;
}
.text--medium a
{
    color: #000 !important;
}
    .text--medium a:hover
    {
        cursor: pointer !important;
        color: #000 !important;
    }

	</style>
</head>
<body >
	<!--start-home-->
    @include('visitor.template.nav')
<br>
<br>


	<div class="strip-background"></div>
    <h2 style="color: black;">نتائج البحث</h2>
        @if($flash = session('message'))
  <div class="alert success">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      <b>{{ $flash }}</b>
  </div>
@endif
@if($flash = session('deleted'))
  <div class="alert warning">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      <center><b>{{ $flash }}</b></center>
  </div>
@endif
@if(isset($with_images) && isset($results))
@if($with_images === 'yes')
<div class="search__container">
  <ul class="card">
    @foreach($results as $result)
    <li class="search-item">
      <div class="search-item__image" style="background-image: url(/files/users/{{$result->image}});"></div>
      <div class="search-item__content">
        <p class="text--medium">
            <a href="/client/profile/{{ $result->id }}">
                {{ $result->username }}
            </a>
        </p>
        <p class="text--small text--muted">مواليد : {{ $result->dob }}</p
        <p class="text--small text--muted">الدوله : {{ $result->city->country->name }} </p>
      </div>
      
      @if(Auth::guard('client')->check())
      @php
        $is_liked = \App\Friend::where('client_id', \Auth::guard('client')->user()->id)->where('friend_id', $result->id)->exists();
      @endphp
      @if($is_liked === false)
      <div class="search-item__options">
        <button class="button button--outline button--small friend_request"><span id="pending{{ $result->id }}"><i class="fa fa-heart" style="color: red ; font-size:20px;padding:
        5px;"></i></span></button>
        <input type="hidden" name="friend_id" value="{{ $result->id }}" class="friend_id">
      </div>
      @else
       <div class="search-item__options">
        <button class="button button--outline button--small friend_request"><span id="pending{{ $result->id }}"><i class="fa fa-thumbs-o-down"  style="font-size:20px;padding:
        5px;"></i></button>
        <input type="hidden" name="friend_id" value="{{ $result->id }}" class="friend_id">
      </div>
      @endif
      @endif
    </li>
    @endforeach
  </ul>
</div>
@else
<div class="search__container">
  <ul class="card">
    @foreach($results as $result)
    <li class="search-item">
      <div class="search-item__content">
        <p class="text--medium">
            <a href="/client/profile/{{ $result->id }}">
                {{ $result->username }}
            </a>
        </p>
        <p class="text--small text--muted">مواليد : {{ $result->dob }}</p>
        <p class="text--small text--muted">الدوله : {{ $result->city->country->name }} </p>
      </div>
      @if(Auth::guard('client')->check())
      @php
        $is_liked = \App\Friend::where('client_id', \Auth::guard('client')->user()->id)->where('friend_id', $result->id)->exists();
      @endphp
     @if($is_liked === false)
      <div class="search-item__options">
        <button class="button button--outline button--small friend_request"><span id="pending{{ $result->id }}"><i class="fa fa-heart" style="color: red ; font-size:20px;padding:
        5px;"></i></span></button>
        <input type="hidden" name="friend_id" value="{{ $result->id }}" class="friend_id">
      </div>
      @else
      <div class="search-item__options">
        <button class="button button--outline button--small friend_request"><span id="pending{{ $result->id }}"><i class="fa fa-thumbs-o-down"  style="font-size:20px;padding:
        5px;"></i></button>
        <input type="hidden" name="friend_id" value="{{ $result->id }}" class="friend_id">
      </div>
      @endif
      @endif
    </li>
    @endforeach
  </ul>
</div>
@endif

@endif
        @include('visitor.template.footer')

        @include('visitor.template.endpage')
<script>

	$(".toggle").click(function(){
  $(".navcollaps").toggleClass("show");
});
	</script>
	<script>
	$(document).ready( function () {
    $('#myTable').DataTable();
} );
	</script>



		<script>


var focusInput = ".input__w-placeholder input";

$(focusInput).focus(function() {
  $(this).parent().addClass("focus");
});

$(focusInput).blur(function() {
  if( !this.value ) {
    $(this).parent().removeClass("focus");
  }
});
	</script>


</body>
</html>