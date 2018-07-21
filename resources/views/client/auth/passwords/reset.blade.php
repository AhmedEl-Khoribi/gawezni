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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!--Custom-Theme-files-->
	<link href="/visitor/css/style.css" rel="stylesheet" type="text/css" />
	<script src="/visitor/js/jquery.min.js"> </script>
<!--/script-->
<script type="text/javascript" src="/visitor/js/move-top.js"></script>
<script type="text/javascript" src="/visitor/js/easing.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<style>
	body{
		direction: rtl;
	}

	
	h1 , h2, h3, h4, h5{
		color: black;
		text-align: right
	}
	@import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);

* {
	margin:0;
	padding:0;
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-webkit-font-smoothing:antialiased;
	-moz-font-smoothing:antialiased;
	-o-font-smoothing:antialiased;
	font-smoothing:antialiased;
	text-rendering:optimizeLegibility;
}



#contact input[type="text"], #contact input[type="email"], #contact input[type="password"], #contact input[type="url"], #contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

#contact {
	background:#F9F9F9;
	padding:25px;
	margin:50px 0;
}

#contact h3 {
	color: #F96;
	display: block;
	font-size: 30px;
	font-weight: 400;
}

#contact h4 {
	margin:5px 0 15px;
	display:block;
	font-size:13px;
}

fieldset {
	border: medium none !important;
	margin: 0 0 10px;
	min-width: 100%;
	padding: 0;
	width: 100%;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="password"], #contact input[type="url"], #contact textarea {
	width:100%;
	border:1px solid #CCC;
	background:#FFF;
	margin:0 0 5px;
	padding:10px;
}

#contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="password"]:hover, #contact input[type="url"]:hover, #contact textarea:hover {
	-webkit-transition:border-color 0.3s ease-in-out;
	-moz-transition:border-color 0.3s ease-in-out;
	transition:border-color 0.3s ease-in-out;
	border:1px solid #AAA;
}

#contact textarea {
	max-width:100%;
}

#contact button[type="submit"] {
	cursor:pointer;
	width:100%;
	border:none;
	background:#0CF;
	color:#FFF;
	margin:0 0 5px;
	padding:10px;
	font-size:15px;
}

#contact button[type="submit"]:hover {
	background:#09C;
	-webkit-transition:background 0.3s ease-in-out;
	-moz-transition:background 0.3s ease-in-out;
	transition:background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

#contact input:focus, #contact textarea:focus {
	outline:0;
	border:1px solid #999;
}
::-webkit-input-placeholder {
 color:#888;
}
:-moz-placeholder {
 color:#888;
}
::-moz-placeholder {
 color:#888;
}
:-ms-input-placeholder {
 color:#888;
}

	</style>
</head>
<body >
	<!--start-home-->


    @include('visitor.template.nav')






	<div class="container">
	<h1 style="text-align: center"> اعد ادخال بياناتك </h1>
		<div class="row">
		

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="container">
					<form id="contact" class="form-horizontal" role="form" method="POST" action="{{ url('/client/password/reset') }}">
						{{ csrf_field() }}

						<input type="hidden" name="token" value="{{ $token }}">
						<h3>اعد ادخال بياناتك</h3><br><br>

						<fieldset>
							<input placeholder="العنوان الالكتروني" type="email" tabindex="2" required id="email"  class="form-control" name="email" value="{{ $email or old('email') }}" autofocus>
							@if ($errors->has('email'))
								<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
							@endif
						</fieldset>
						<fieldset>
							<input placeholder=" كلمه المرور" type="password" tabindex="3" required id="password" class="form-control" name="password">
							@if ($errors->has('password'))
								<span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
							@endif
						</fieldset>
						<fieldset>
							<input placeholder=" اعاده كلمه المرور " type="password" tabindex="3" required id="password-confirm"  class="form-control" name="password_confirmation">
							@if ($errors->has('password_confirmation'))
								<span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
							@endif
						</fieldset>

						<fieldset>
							<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">ارسال</button>
						</fieldset>
					</form>

</div>
				
			</div>
		</div>
	</div>


	
 @include('visitor.template.footer')
			



<script>
	
	$(".toggle").click(function(){
  $(".navcollaps").toggleClass("show");
});
	</script>

	
			
										
						
								
								
								


</body>
</html>