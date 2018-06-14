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
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
</head>
<body >
	<!--start-home-->
	
<div class="container-fluid" style="background-image: url(/visitor/images/banner.jpg); background-size: cover">
	<div id="home" class="header">
		<div class="header-top">
			<div class="container">
				<div class="logo">
					<a href="index.html"><img src="/visitor/images/logo-girl.png"></a>
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
   
<div class="cont">
  
  <div class="form">
    <form action="">
      <h1>تسجيل</h1>
      <input type="text"
             class="user"
             placeholder="اسم المستخدم"/>
      <input type="password" 
             class="pass"
             placeholder="كلمة المرور"/>
      <button  class="login">تسجيل الدخول</button>
      
       <button  class="login" style="background-color: #f067ae">ليس لديك حساب؟؟</button>
    </form>
  </div>
  
  
  
</div>
	</div>
	<div class="container-fluid numbers" style="background-color: #27aae1">
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<h3><i class="fa fa-check"></i> نجاحات متتالية منذ 2010 </h3>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<h3><i class="fa fa-check"></i> 4000 مشترك جديد كل يوم </h3>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<h3><i class="fa fa-check"></i> 5,000,000 مشترك مسجل </h3>
		</div>
	</div>
	
	
	<!--/footer-->
		

		<div class="copy">
		    <p>&copy; 2015 Best Day. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
		</div>
		<!--//footer-->
			<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
										
								
				<script>
	$(".tabs a").on("click", function(){
  var id = $(this).attr("id");
  if(id == 2){
    $("#register").css("display","block");
    $("#login").css("display","none");
  }
  else{
    $("#register").css("display","none");
    $("#forgetP").css("display","none");
    $("#login").css("display","block");
  }
});
$(".reset").on("click", function(){
  $("#login").css("display","block");
  $("#forgetP").css("display","none");
});
$(".forget-password").on("click", function(){
    $("#register").css("display","none");
    $("#login").css("display","none");
    $("#forgetP").css("display","block");
})
function animationHover(element, animation){
  element = $(element);
  element.hover(
    function() {
      element.addClass('animated ' + animation);
      //wait for animation to finish before removing classes
      window.setTimeout( function(){
          element.removeClass('animated ' + animation);
      }, 2000);
    }
  );
};
animationHover("input[type=button]", "shake");
	</script>				
								
								
								


</body>
</html>