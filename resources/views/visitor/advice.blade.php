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
	.list{
		list-style: square ;
		direction: rtl;
		text-align: right;
		padding-right: 50px;
		padding-top: 20px
	}
	.list li{
		padding: 5px
	}
	</style>
</head>
<body >
	<!--start-home-->


  <div class="navbar" style="direction: rtl; margin: 0 auto">
  <div class="contaier" style="margin-left:300px">

 
      
       <ul class="nav navcollaps" style="direction: rtl;">

		  <li><a href=""> <i class="fa fa-users"></i> {{ Auth::guard('client')->user()->fname . Auth::guard('client')->user()->lname }}</a></li>
		  <li><a href="{{ url('/client/logout') }}"> Logout</a></li>
          <li><a href="#"><i class="fa fa-comment"></i>    الدردشه</a></li>
          <li><a href="/inbox"><i class="fa fa-envelope"></i>   الرسائل</a></li>
          <li><a href="/liked"><i class="fa fa-heart"></i>     الاعجاب</a></li>
        <li><a href="#"> <i class="fa fa-users"></i>    الزيارات</a></li>
         <li><a href="/search"><i class="fa fa-search"></i>    البحث</a></li>
         <li><a href="/"> <i class="fa fa-home"></i>     الصفحه الرئيسه</a></li>
      </ul>
      
         <div class="navbar-header">
      <button class="toggle"><span></span>
      <span></span>
      <span></span></button>
      <a href="" class="navbar-brand" style="margin-top: -20px"><img src="/visitor/images/logo-girl.png" width="120px"></a>
    </div><!-- navbar-header -->


  </div><!-- contaier -->
</div><!-- navbar -->





	<div class="container">
	<h1 style="text-align: center"> نصائح واقتراحات </h1>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h5>لتسهيل التواصل والتعارف بين المشتركين تضع إدارة الموقع بعض النصائح والاقتراحات الهادفة بين يديك للوصول إلى مبتغاك.</h5>
		</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
<ul class="list">
		<?= $advices; ?>	
</ul>
				
			</div>
		</div>
	</div>


	
	
	<!--/footer-->
	 
	 
		<footer class="footer-distributed">

			<div class="footer-left">
					<p class="footer-company-about" style="direction: rtl;text-align: right" >
					<span style="direction: rtl"> هتجوز </span>
موقع تعارف وتواصل عريق يضع الوطن العربي والعالم بين يديك من خلال الدردشة والمراسلة والمحادثة والشات للقاء شريك العمر والارتباط بالنصف الآخر و فارس الأحلام. 				</p>

				


				
			</div>

			<div class="footer-center" style="direction: rtl;text-align: center" >
					<div>
            <a href="/client/contact">
          <i class="fa fa-envelope"></i>
          <p>رسائل الادارة</p></a>
        </div>

        <div>
          <a href="/client/nsay7">
          <i class="fa fa-check"></i>
          <p>نصائح واقتراحات</p>
        </a>
        </div>

        <div>
          <a href="/client/faq">
          <i class="fa fa-question"></i>
          <p>الاسئله المتداولة</p>
        </a>
        </div>

			

			</div>

			<div class="footer-right">
<h3><img src="/visitor/images/logo-man.png"></h3>

			</div>

		</footer>

	 
	 
	 
	 
	 
		 
<footer>
		<div class="copy">
		    <p>&copy; 2018 All Rights Reserved | Design by <a href="http://gtsaw.com/">gtsaw</a> </p>
		</div>
		</footer>
		<!--//footer-->
			



<script>
	
	$(".toggle").click(function(){
  $(".navcollaps").toggleClass("show");
});
	</script>

	
			
										
						
								
								
								


</body>
</html>