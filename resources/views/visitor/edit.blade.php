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
	* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background-color: #383737;
  overflow-x: hidden;
}

.form-container {
  width: 400px;
  margin: 0 auto;
  box-shadow: 0px 0px 10px #000;
  margin-top: 20px;
  padding: 20px;
  color: #E3DFDF;
}

h2 {
  text-align: center; 
	color: #f067ae
}

label {
  display: block;
  margin: 10px 0;
	color: white;
	direction: rtl;
	float: right
}

label.error {
  color: #D51C1C;
  margin-top: -6px;
}

input {
  height: 26px;
  width: 100%;
  border-radius: 4px;
  outline: none;
  border: 1px solid #88FC56;
  background-color: #555755;
  color: #E3DFDF;
  font-size: 14px;
  padding-left:10px;
  cursor: pointer;
  margin-bottom: 20px;
}

input:focus {
  box-shadow: 0 0 6px #88FC56;
}

input.error {
  border: 1px solid #D51C1C;  
}

input:focus.error {
  box-shadow: 0 0 6px #D51C1C;
}

.submit {
  display: block;
  width: 50%;
  margin: 20px auto 0 auto;
  height: 40px;
  background-color: #27aae1;
  color: #555755;
  font-weight: bold;
  padding-left: 0;
}

input[type="checkbox"] {
	visibility: hidden;
  width: 20px;
}

	select{
		direction: rtl;
		float: right
	}
input[type="checkbox"]:after {
  content: '';
  display: block;
  position: absolute;
  top: -1px;
  left: -1px;
  width: 20px;
  height: 20px;
  border: 1.6px solid #D51C1C;
  border-radius: 4px;
  box-sizing: border-box;
  transition: all .3s ease;
}

input[type=checkbox]:checked ~ .checkbox-switch:after {
	opacity: 1;
}

input[type=checkbox].error:after {
  visibility: visible;
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
      <a href="/" class="navbar-brand" style="margin-top: -20px"><img src="/visitor/images/logo-girl.png" width="120px"></a>
    </div><!-- navbar-header -->


  </div><!-- contaier -->
</div><!-- navbar -->
	<br>
	<br>
	<div class="form-container">
  <form action="/client/update/{{ $usser->id }}" method="post" id="form" novalidate="novalidate">
  {{ csrf_field() }}
  <input type="hidden" name="_method" value="PATCH">

    <h2>تعديل البيانات </h2>
    <div class="form-group">
      <label for="name">اسم المستخدم </label>
      <input class="form-control" type="text" name="username" minlength="2" required value="{{ $usser->username }}">
    </div>
    <div class="form-group">
      <label for="name">الاسم الاول</label>
      <input class="form-control" type="text" name="fname" minlength="2" required value="{{ $usser->fname }}">
    </div>
    <div class="form-group">
      <label for="name">الاسم الاخر:</label>
      <input class="form-control" type="text" name="lname" minlength="2" required value="{{ $usser->lname }}">
    </div>
   <div class="form-group">
    <label>Phone</label>
          <input type="text" name="phone" class="form-control" value="{{ $usser->phone }}">
   </div>
    <div class="form-group">
      <label for="email">البريد الشخصي</label>
      <input class="form-control" type="email" name="email" required value="{{ $usser->email }}">
    </div>  
     <div class="form-group">
      <label for="dob">تاريخ الميلاد:</label>
      <input class="form-control" type="date" name="dob" required value="{{ $usser->dob }}">
    </div>   
    <div class="form-group">
   	  <label for="age">الجنسيه:</label>
    	  <select class="form-control" id="country">
          @foreach($countries as $country)
          <option value="{{ $country->id }}" @if($usser->city->country->name === $country->name) {{ 'selected' }} @endif>{{  $country->name }}
          </option>
          @endforeach
        </select>
    </div>
    <div class="form-group">
   	  <label for="age">الحاله الاجتماعية:</label>
    	  <select class="form-control" name="social_status" id="social_single">
          <option value="single" @if($usser->social_status === "single") {{ 'selected' }} @endif>Single</option>
          <option value="married" @if($usser->social_status === "married") {{ 'selected' }} @endif>Married</option>
          <option value="divorced" @if($usser->social_status === "divorced") {{ 'selected' }} @endif>Divorced</option>
          <option value="willow" @if($usser->social_status === "willow") {{ 'selected' }} @endif>Willow</option>
        </select>
    </div>
    <div class="form-group">
      <label for="children">عدد الابناء :</label>
      <input class="form-control" type="text" name="children_number" id="phone" required value="{{ $usser->children_number }}">
    </div>
    <div class="form-group">
      <label for="job">المهنه:</label>
      <input class="form-control" type="text" name="job" required value="{{ $usser->job }}">
    </div>     
    <div class="form-group">
   	  <label for="age">درجة التعليم: </label>
    	  <select class="form-control" name="education">
            <option value="medium_school" @if($usser->education === "medium_school") {{ 'selected' }} @endif>Medium School</option>
            <option value="high_school" @if($usser->education === "high_school") {{ 'selected' }} @endif>High School</option>
            <option value="university" @if($usser->education === "university") {{ 'selected' }} @endif>University</option>
            <option value="PHD" @if($usser->education === "PHD") {{ 'selected' }} @endif>PHD</option>
            <option value="self_study" @if($usser->education === "self_study") {{ 'selected' }} @endif>Self Study</option>
          </select>
    </div>
    <div class="form-group">
   	  <label for="age">لون البشرة: </label>
    	 <select class="form-control" name=" skin_color">
        <option value="white" @if($usser->skin_color === "white") {{ 'selected' }} @endif>ابيض</option>
        <option value="black" @if($usser->skin_color === "black") {{ 'selected' }} @endif>اسود</option>
        <option value="dark_brown" @if($usser->skin_color === "dark_brown") {{ 'selected' }} @endif>قمجي</option>
        <option value="brown" @if($usser->skin_color === "brown") {{ 'selected' }} @endif>بني</option>
        <option value="7enty_dark" @if($usser->skin_color === "7enty_dark") {{ 'selected' }} @endif>حنطي غامق</option>
        <option value="7enty_white" @if($usser->skin_color === "7enty_white") {{ 'selected' }} @endif>حنطي فاتح</option>
      </select>
    </div>
       <div class="form-group">
      <label for="email">الطول:</label>
          <input type="text" name="height" class="form-control" value="{{ $usser->height }}">
    </div>  
       <div class="form-group">
      <label for="email">الوزن:</label>
          <input type="text" name="weight" class="form-control" value="{{ $usser->weight }}">
    </div>  
    <div class="form-group">
       <input class="submit form-control" type="submit" name="submit" value="تعديل">
    </div>
  </form>
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
			


<script src="/visitor/js/jquery.min.js"> </script>
<!--/script-->
<script type="text/javascript" src="/visitor/js/move-top.js"></script>
<script type="text/javascript" src="/visitor/js/easing.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
<script src="//cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
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
							
							
								


</body>
</html>