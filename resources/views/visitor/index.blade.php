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
</head>
<body >
	<!--start-home-->
	
<div class="container-fluid" style="background-image: url('/visitor/images/banner.jpg'); background-size: cover">
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

<div class="cont">
  
  <div class="form">
    <form action="{{ url('/client/login') }}" method="post">
      <h1>تسجيل</h1>
      	{{ csrf_field() }}
		<input type="text" name="username" {{ old('username') }} class="user" placeholder="اسم المستخدم او البريد الالكتروني او رقم التليفون"/>
		@if ($errors->has('username'))
			<span class="help-block">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
		@endif
        <input type="password" name="password" class="pass" placeholder="كلمة المرور"/>
		@if ($errors->has('password'))
			<span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
		@endif
		@if($flash = session('error'))
			<span class="help-block">
                <strong>{{ $flash }}</strong>
            </span>
		@endif
      <button  class="login">تسجيل الدخول</button>
    </form>
	  <a href="/register">
		  <button  class="login" style="background-color: #f067ae">ليس لديك حساب؟؟</button>
	  </a>
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
	<!-- gallery-->
	
	
	<div class="container gallery-section">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-xs-4 col-sm-4" style="border: 1px solid #27aae1">
				<a href="#">
					<img src="/visitor/images/man.png" >
					
				</a>
			</div>
			<div class="col-lg-2 col-md-2 col-xs-4 col-sm-4" style="border: 1px solid #f067ea">
				<a href="#">
					<img src="/visitor/images/women.png" >
					
				</a>
			</div>
			<div class="col-lg-2 col-md-2 col-xs-4 col-sm-4" style="border: 1px solid #27aae1">
				<a href="#">
					<img src="/visitor/images/man.png" class="male">
					
				</a>
			</div>
			<div class="col-lg-2 col-md-2 col-xs-4 col-sm-4" style="border: 1px solid #f067ea">
				<a href="#">
					<img src="/visitor/images/women.png">
					
				</a>
			</div>
			<div class="col-lg-2 col-md-2 col-xs-4 col-sm-4" style="border: 1px solid #27aae1">
				<a href="#">
					<img src="/visitor/images/man.png">
					
				</a>
			</div>
			<div class="col-lg-2 col-md-2 col-xs-4 col-sm-4" style="border: 1px solid #f067ea">
				<a href="#">
					<img src="/visitor/images/women.png">
					
				</a>
			</div>
			
		</div>
	</div>
	<!-- gallery-->
	
	
	<div class="clearfix"></div>
	<div class="container about">
		<div class="row" style="direction: rtl">
			<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
				<h1 >أهلا بكم في موقع أنا وأنتِ...</h1>
			</div>
				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" >
				<p>
				أنا وأنتِ موقع عريق للتعارف والتواصل يجمع العالم على صفحاته لتوفير فرص زواج أكبر وأفضل بين العرب. أنا وأنتِ يقرب المسافات ويجمع القلوب. لديك فرص ذهبية للاختيار بين مليونين مشترك لتحديد من يتناسب مع شخصيتك ومتطلباتك. اشترك الآن لتصل لمبتغاك بغض النظر أين يكون.
				</p>
			</div>
		</div>
	</div>
	<!-- about-->
	<div class="clearfix"></div>
	
	<!-- room -->
	<div class="container" style="direction: rtl">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 chat">
				<h3> <i class="fa fa-comments"></i> غرف الدرشه  </h3>
				<hr>
				<h4>متواجد حاليا (15) </h4>
				<hr>
				<div class="col-sm-6 col-xs-6">
				<a href="#">
					<h5>  <i class="fa fa-comments"></i>   دردشة زواج </h5>
					</a>
				</div>
				<div class="col-sm-6 col-xs-6">
				<a href="#">
					<h5>  <i class="fa fa-comments"></i>   دردشة عامة </h5>
					</a>
				</div>
				<br>
				<br>
				<br>
				<div class="col-sm-6 col-xs-6">
				<a href="#">
					<h5>  <i class="fa fa-comments"></i>   دردشة تعارف </h5>
					</a>
				</div>
				<div class="col-sm-6 col-xs-6">
				<a href="#">
					<h5>  <i class="fa fa-comments"></i>   دردشة تواصل </h5>
					</a>
				</div>
				<div class="col-sm-12 col-xs-12 chat2">
				
					<div class="col-sm-6 col-xs-6">
					<img src="/visitor/images/mobile.png" width="300px" style="padding-top: 10px">
				</div>
				<div class="col-sm-6 col-xs-6">
					<h4>انضم إلينا من أي جهاز محمول</h4>
				</div>
					
					
				</div>
				
			</div>
			
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 search">
					<h3> <i class="fa fa-search"></i>  البحث السريع  </h3>
					<hr>
				
				<h5>   النوع:  <span style="padding-right: 30px"> <input type="radio" name="radio" style="padding: 50px" > انثي   <input type="radio" name="radio"> ذكر </span></h5>
      <hr>
        
         <h5 style="text-align: right;padding-right:130px">
          
           <input type="checkbox" name="checkbox" >
            <i></i>بيانات مع الصور 
            </h5>
            
         <h5  style="text-align: right;padding-right: 130px">
          <br>
           <input type="checkbox" name="checkbox" >
            <i></i>  المتواجدون الآن في الموقع  
            </h5>
            <br>
            <h5  style="text-align: right;padding-right: 130px">
           <input type="checkbox" name="checkbox" >
            <i></i>     زوار الموقع اليوم  
            </h5>
          <hr>
            <form >
    <div class="form-group">
      <select class="form-control" >
        <option>اختر الدولة ... </option>
        <option>مصر</option>
        <option>السعوديه</option>
        <option>الكويت</option>
      </select>
     
    </div>
  </form>
         
             <form>
    <div class="form-group">
      <select class="form-control">
        <option>اختر العمر ... </option>
        <option>20</option>
        <option>30</option>
        <option>30</option>
      </select>
     
    </div>
  </form>
         
         <hr>
    
        
<button  class="login"> <i class="fa fa-search"></i> ابحث </button>
				
			</div>
		</div>
	</div>
	
	
	
	<!-- room -->
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<!--/footer-->
	 
	 
		<footer class="footer-distributed">

			<div class="footer-left">
					<p class="footer-company-about" style="direction: rtl;text-align: right" >
					<span style="direction: rtl"> هتجوز </span>
موقع تعارف وتواصل عريق يضع الوطن العربي والعالم بين يديك من خلال الدردشة والمراسلة والمحادثة والشات للقاء شريك العمر والارتباط بالنصف الآخر و فارس الأحلام. 				</p>

				


				
			</div>

			<div class="footer-center" style="direction: rtl;text-align: center" >
					<div>
					<i class="fa fa-envelope"></i>
					<p>رسائل الادارة</p>
				</div>

				<div>
					<i class="fa fa-check"></i>
					<p>نصائح واقتراحات</p>
				</div>

				<div>
					<i class="fa fa-question"></i>
					<p>الاسئله المتداولة</p>
				</div>

			

			</div>

			<div class="footer-right">
<h3><img src="/visitor/images/logo-man.png"></h3>

			</div>

		</footer>

	 
	 
	 
	 
	 
		 
<footer>
		<div class="copy">
		    <p>&copy; 2015 Best Day. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
		</div>
		</footer>
		<!--//footer-->


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