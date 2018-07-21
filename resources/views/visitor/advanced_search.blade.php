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
<link rel="icon" href="/visitor/images/16x16.png" sizes="16x16" type="image/png">



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
</head>
<body >
@include('visitor.template.nav')
<form method="GET" action="/client/AS">
	<div class="container" style="direction: rtl">
		<div class="row">

			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 chat" style="height: 450px">
					<h3>  الاساسية   </h3>
					<hr>
				
	
		<h5>   النوع:  <span style="padding-right: 30px">    <input type="radio" name="gender" value="female">  انثي
<input type="radio" name="gender" value="male">  ذكر
				</span></h5>

      <hr>
        
         <h5 style="text-align: right;padding-right:130px">
          
           <input type="checkbox" name="with_images" value="with_images">
            <i></i>بيانات مع الصور 
            </h5>
            
         <h5  style="text-align: right;padding-right: 130px">
          <br>
           <input type="checkbox" name="is_online" value="is_online">
            <i></i>  المتواجدون الآن في الموقع  
            </h5>
            <br>
          <hr>
    <!--<div class="form-group">-->
    <!--  <select class="form-control" name="created_at">-->
    <!--    <option disabled selected> تاريخ التسجيل ... </option>-->
    <!--    @for($i=1; $i<=12; $i++)-->
    <!--    <option value="{{ $i }}"> في شهر {{ $i }}</option>-->
    <!--    @endfor>-->
    <!--  </select>-->
    <!--</div>-->
</div>
			
			
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 search"  style="height: 450px">
					<h3> التفصايل </h3>
					<hr>
      <hr>
         <div class="form-group">
      <select class="form-control" id="country"  name="country">
      	<option selected disabled>اختر الدولة ... </option>
      	@foreach($countries as $country)
        <option value="{{ $country->id }}">{{  $country->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group" style="display: none;" id="cityDisplay">
      <select class="form-control" id="city" name="city_id">
        <option disabled selected>اختر االمدينة ... </option>
      </select>
    </div>
            <hr>
     <div class="form-group">
      <select class="form-control" name="age">
        <option disabled selected>مواليد...</option>
        @for($i=1955; $i<=2000; $i++)
        <option value="{{ $i }}">{{ $i }}</option>
        @endfor
      </select>
    </div>
      <hr>
       
    <div class="form-group">
      <select class="form-control" name="social_status">
        <option disabled selected> الحاله الاجتماعية ... </option>
        <option value="single">اعزب</option>
        <option value="married">متزوج</option>
        <option value="divorced">مطلق/مطلقة</option>
        <option value="willow">ارمل/ارملة</option>
      </select>
     
    </div>

			</div>
		</div>
	</div>

	<div class="container" style="direction: rtl">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 search" style="height: 450px">
					<h3>  التفاصيل المتقدمة   </h3>
					<hr>
<input type="text" class="user" autocomplete="off" name="fname" placeholder="اسم المستخدم"/>
      <hr>
         
    <div class="form-group">
      <select class="form-control" name="children_number">
        <option selected disabled> لديك ابناء ... </option>
        @for($i=0; $i<=20; $i++)
        <option value="{{ $i }}">{{ $i }}</option>
        @endfor
      </select>
     
    </div>
    <div class="form-group">
      <select class="form-control" name="education">
        <option selected disabled> التحصيل العلمي  ... </option>
        <option value="medium_school">تعليم متوسط</option>
        <option value="high_school"> تعليم عالي</option>
        <option value="university"> تعليم جامعي</option>
        <option value="PHD"> دكتوراه</option>
        <option value="self_study"> تعليم ذاتي</option>
      </select>
    </div>
    <div class="form-group">
      <input type="text" class="user" name="career_field" autocomplete="off" placeholder="المهنة">
    </div>
</div>
		
<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 chat"  style="height: 450px">
					<h3> المظهر </h3>
            <hr>
    <div class="form-group">
      <select class="form-control" name="skin_color">
        <option disabled selected> لون البشرة ... </option>
        <option value="white">ابيض</option>
        <option value="black">اسود</option>
        <option value="dark_brown">قمجي</option>
        <option value="brown">بني</option>
        <option value="7enty_dark">حنطي غامق</option>
        <option value="7enty_white">حنطي فاتح</option>
      </select>
     
    </div>
    
      <hr>
       
    <div class="form-group">
      <select class="form-control" name="height">
        <option disabled selected>  الطول ... </option>
        <option value="155">قصير</option>
        <option value="175">متوسط</option>
        <option value="200">طويل</option>
      </select>
     
    </div>

    <div class="form-group">
      <select class="form-control" name="physique"> 
        <option disabled selected> الحالة البدنية ... </option>
        <option value="thin">نحيف</option>
        <option value="medium_thin">متوسط البنية</option>
        <option value="sporty">رياضي</option>
        <option value="fat">بدين</option>
		<option value="huge">ضخم</option>
      </select>
    </div>
</div>
			
<button  class="login" type="submit" style="width:50%; margin: 0 auto"> <i class="fa fa-search"></i> ابحث </button>
</form>
		</div>
	</div>
	

	<hr>
@include('visitor.template.footer')

<script>
	
	$(".toggle").click(function(){
  $(".navcollaps").toggleClass("show");
});
</script>

	
<script type="text/javascript">
  $(document).ready(function(){
    $("#country").on('change',function(){
      var id = $("#country").val();
      $.ajax({
      type: "GET",
      url: '/client/country/city/' + id,
      data: {},
      success: function( msg ) {
        $("#cityDisplay").fadeIn(1000);
        $("#city").html(msg.message);

      },
      dataType: "json"
  });

    });

    $("#gender").on('change',function(){
       var gender = $("#gender").val();
       if(gender === 'female')
       {
        $("#marraige12").fadeOut(1000);
       }
       else
       {
        $("#marraige12").fadeIn(1000);
       }
    });

      $("#social_single").on('change',function(){
       var social_single = $("#social_single").val();
       if(social_single === 'single')
       {
        $("#numberChild").fadeOut(1000);
        $("#marraige12").fadeOut(1000);
       }
       else
       {
         $("#numberChild").fadeIn(1000);
        $("#marraige12").fadeIn(1000);
       }
    });




  });

</script>			
										
						
								
								
								


</body>
</html>