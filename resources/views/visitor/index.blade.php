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
<link href="//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic" rel="stylesheet" type="text/css">

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
<!--Custom-Theme-files-->
	<link href="/visitor/css/style.css" rel="stylesheet" type="text/css" />
	<script src="/visitor/js/jquery.min.js"> </script>
<!--/script-->
<script type="text/javascript" src="/visitor/js/move-top.js"></script>
<script type="text/javascript" src="/visitor/js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
</head>
<body style="background-image: url(/visitor/images/1718.jpg); background-size: cover ; height: 100vh">
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
	<!--start-home-->
	<div id="home" class="header">
		<div class="header-top">
			<div class="container">
				<div class="logo">
					<a href="{{ url('/') }}"><img src="/visitor/images/logo-girl.png"></a>
				</div>
			
            <!-- script-for-menu -->
				<script>
				$( "span.menu" ).click(function() {
				  $( ".top-menu" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>
	<!--End-top-nav-script-->
			</div>
		</div>
       </div>
	<div class="banner" >
	     	<div class="container">
					<div  class="callbacks_container">
					<ul class="rslides" id="slider4">
					<li>
								<div class="banner-info">
									<h3> <span><i class="fa fa-heart" style="color: #f067ae"></i></span>هتجوز</h3>
								</div>
							</li>
							
						</ul>
					</div>
					<!--banner-->
	  			<script src="/visitor/js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager:true,
			        nav:false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			 <!--main-drop-->
			 <div class="main-drop ">
			
				 <div class="couple ">
				 <h5 style="color: #f067ae" class="hidden-xs hidden-sm">تسجيل الدخول</h5>
				 <div class="bride">
			   <a onclick="return confirm('رجاء الموافقه علي القسم')">
				   <img src="/visitor/images/women.png" class="img-responsive" alt="">
				   <h5 style="color: #f067ae">انثي</h5></a>
				 </div>
				 <div class="groom">
				 <a onclick="return confirm('رجاء الموافقه علي القسم')">
				  <img src="/visitor/images/man.png" class="img-responsive" alt="">
				 <h5 style="color: #27aae1">ذكر</h5></a>
				 </div>
			 </div>
			 </div>
			 <!--//main-drop-->
			</div>
		 
	<!--welcome-->
	   <div class="welcome ">
		    <div class="container">
				<div class="welcome-top">
					 <h2>نرجو منك أداء هذا القسم قبل التسجيل </h2>
					 <p>
أقسم بالله العظيم أني لم أدخل هذا الموقع الا بهدف الزواج الشرعي وفق كتاب الله و سنة رسوله , وليس لأي هدف آخر . 

وأعاهد الله وأعاهدكم على أن لا أضيع تعب الموقع , وأن لا أخدع الأعضاء , وأن أكون صادقا مع الله ثم مع نفسي , وأن ألتزم بشروط الموقع , و شروط المراسلة فيه , عسى ربي يكتب لي الخير في هذا المكان .
<br>
والله خير الشاهدين

</p>
				   
					   <a class="read"><input type="checkbox" id="checked" title="unchecked">  لقد قمت بأداء القسم , وسألتزم به </a>
				    </div>
				</div>
			</div>
				<div class="copy" style="background-color: #27aae1">
		    <p>&copy; 2018 . All Rights Reserved | Design by <a href="http://gtsaw.com/">Gtsaw</a> </p>
		</div>
</div>
						<script type="text/javascript">
									$(document).ready(function() {
										$().UItoTop({ easingType: 'easeOutQuart' });
										$('#checked').click(function () {
                                            var checked = $('#checked').attr('title');
                                            if(checked === 'checked')
											{
                                                $('#checked').attr('title','unchecked');
                                                $('.bride').html("<a onclick=\"return confirm('رجاء الموافقه علي القسم')\">" +
                                                    "<img src=\"/visitor/images/women.png\" class=\"img-responsive\" alt=\"\">" +
                                                    "<h5 style=\"color: #f067ae\">انثي</h5></a>");
                                                $('.groom').html("<a onclick=\"return confirm('رجاء الموافقه علي القسم')\">" +
                                                    "<img src=\"/visitor/images/man.png\" class=\"img-responsive\" alt=\"\">" +
                                                    "<h5 style=\"color: #27aae1\">ذكر</h5></a>");
											}
											else
											{
                                                $('#checked').attr('title','checked');
                                                $('.bride').html("<a href=\"{{ url('femaleRegister') }}\" >" +
                                                    "<img src=\"/visitor/images/women.png\" class=\"img-responsive\" alt=\"\">" +
                                                    "<h5 style=\"color: #f067ae\">انثي</h5></a>");
                                                $('.groom').html("<a href=\"{{ url('maleRegister') }}\" >" +
                                                    "<img src=\"/visitor/images/man.png\" class=\"img-responsive\" alt=\"\">" +
                                                    "<h5 style=\"color: #27aae1\">ذكر</h5></a>");
                                            }
                                        });
									});
								</script>
</body>
</html>