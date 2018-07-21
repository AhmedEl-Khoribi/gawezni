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


    @include('visitor.template.nav')	<br>
	<br>
	<div class="form-container">
  <form action="/client/update/{{ $usser->id }}" method="post" id="form" novalidate="novalidate" enctype="multipart/form-data">
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
      <label>النوع</label>
      <select class="form-control" name="gender" id="gender">
        <option value="male" @if($usser->gender === "male") {{ 'selected' }} @endif>ذكر</option>
        <option value="female" @if($usser->gender === "female") {{ 'selected' }} @endif>أنثى</option>
      </select>
    </div>
   <div class="form-group">
    <label>Phone</label>
          <input type="text" name="phone" class="form-control" value="{{ $usser->phone }}">
   </div>
    <div class="form-group">
      <label for="email">البريد الشخصي</label>
      <input class="form-control" type="email" name="email" required value="{{ $usser->email }}">
    </div> 
    <hr>
    <div class="form-group">
      <label>مواصفات الشخصية</label>
    <textarea id="editor1" name="main_description" rows="10" cols="80"> {{ $usser->main_description }}</textarea>
    </div>
    <div class="form-group">
      <label>مواصفات شريك الحياة</label>
    <textarea id="editor1" name="other_person_description" rows="10" cols="80"> {{ $usser->other_person_description }}</textarea>
    </div>
    <hr>
     <div class="form-group">
      <label for="dob">تاريخ الميلاد:</label>
      <input class="form-control" type="date" name="dob" value="{{ $usser->dob }}">
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
          <option value="single" @if($usser->social_status === "single") {{ 'selected' }} @endif>اعزب</option>
          <option value="married" @if($usser->social_status === "married") {{ 'selected' }} @endif>متزوج</option>
          <option value="divorced" @if($usser->social_status === "divorced") {{ 'selected' }} @endif>مطلق</option>
          <option value="willow" @if($usser->social_status === "willow") {{ 'selected' }} @endif>ارمل</option>
        </select>
    </div>
    @if($usser->gender === 'male' && $usser->social_status === 'married')
        <div class="form-group" id="marraige12">
          <label>عدد الزوجات</label>
          <select class="form-control" name="marraige_status">
            <option value="first" @if($usser->marraige_status === "first") {{ 'selected' }} @endif>الأولى</option>
            <option value="second" @if($usser->marraige_status === "second") {{ 'selected' }} @endif>الثانية</option>
            <option value="third" @if($usser->marraige_status === "third") {{ 'selected' }} @endif>الثالثة</option>
            <option value="fourth" @if($usser->marraige_status === "fourth") {{ 'selected' }} @endif>الرابعة</option>
          </select>
        </div>
      @endif
      @if($usser->social_status === 'married' || $usser->social_status === 'divorced')
      <div class="form-group" id="numberChild">
        <label>عدد الابناء :</label>
          <input type="number" name="children_number" class="form-control" value="{{ $usser->children_number }}">
      </div>
      @endif
    <div class="form-group">
        <label>مجال العمل</label>
          <input type="text" name="career_field" class="form-control" value="{{ $usser->career_field }}">
    </div>
    <div class="form-group">
      <label for="job">المهنه:</label>
      <input class="form-control" type="text" name="job" required value="{{ $usser->job }}">
    </div> 
     <div class="form-group">
          <label>الحالة المادية</label>
          <select class="form-control" name="financial_status">
            <option value="poor" @if($usser->financial_status === "poor") {{ 'selected' }} @endif>فقير</option>
            <option value="lower_than_medium" @if($usser->financial_status === "lower_than_medium") {{ 'selected' }} @endif>أقل من المتوسط</option>
            <option value="medium" @if($usser->financial_status === "medium") {{ 'selected' }} @endif>متوسط</option>
            <option value="more_than_medium" @if($usser->financial_status === "more_than_medium") {{ 'selected' }} @endif>أكثر من متوسط</option>
            <option value="good" @if($usser->financial_status === "good") {{ 'selected' }} @endif>مرتاح ماديا</option>
            <option value="mastora" @if($usser->financial_status === "mastora") {{ 'selected' }} @endif>ميسر الحال</option>
            <option value="rich" @if($usser->financial_status === "rich") {{ 'selected' }} @endif>غني</option>
          </select>
        </div>
    <div class="form-group">
      <label>المرتب  ( {{ $usser->city->country->currency }} )</label>
          <input type="text" name="salary" class="form-control" value="{{ $usser->salary }}">
    </div>    
    <div class="form-group">
   	  <label for="age">درجة التعليم: </label>
    	  <select class="form-control" name="education">
            <option value="medium_school" @if($usser->education === "medium_school") {{ 'selected' }} @endif>تعليم متوسط</option>
            <option value="high_school" @if($usser->education === "high_school") {{ 'selected' }} @endif>تعليم متوسط</option>
            <option value="university" @if($usser->education === "university") {{ 'selected' }} @endif>جامعي</option>
            <option value="PHD" @if($usser->education === "PHD") {{ 'selected' }} @endif>دكتوراه</option>
            <option value="self_study" @if($usser->education === "self_study") {{ 'selected' }} @endif>تعليم ذاتي </option>
          </select>
    </div>
    <div class="form-group">
   	  <label for="age">لون البشرة: </label>
    	 <select class="form-control" name=" skin_color">
        <option value="white" @if($usser->skin_color === "white") {{ 'selected' }} @endif>ابيض</option>
        <option value="black" @if($usser->skin_color === "black") {{ 'selected' }} @endif>اسود</option>
        <option value="dark_brown" @if($usser->skin_color === "dark_brown") {{ 'selected' }} @endif>قمحي</option>
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
          <label>اللياقة</label>
          <select class="form-control" name="physique">
            <option value="thin" @if($usser->physique === "thin") {{ 'selected' }} @endif>نحيف</option>
            <option value="medium_thin" @if($usser->physique === "medium_thin") {{ 'selected' }} @endif>متوسط البنية
            </option>
            <option value="sporty" @if($usser->physique === "sporty") {{ 'selected' }} @endif>رياضي</option>
            <option value="fat" @if($usser->physique === "fat") {{ 'selected' }} @endif>بدين</option>
            <option value="huge" @if($usser->physique === "huge") {{ 'selected' }} @endif>ضخم</option>
          </select>
    </div>
    <div class="form-group">
      <label for="email">الحالة الصحية:</label>
          <input type="text" name="health_details" class="form-control" value="{{ $usser->health_details }}">
    </div> 
    <div>
        <img style="width: 100%;height: 216px;" src="{{ asset('files/users/'.\Auth::guard('client')->user()->image) }}" alt="photo" >
        
    </div>
    <div class="form-group">
      <label for="image">غير صورتك</label>
      <input type="file" name="image" class="form-control" style="padding:0">
    </div>
    <div class="form-group">
       <input class="submit form-control" type="submit" name="submit" value="تعديل">
    </div>
    @if(count($errors))
<div class="alert alert-danger">
<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
</div>
@endif
  </form>
</div>

    @include('visitor.template.footer')



<script src="/visitor/js/jquery.min.js"> </script>
<!--/script-->
<script type="text/javascript" src="/visitor/js/move-top.js"></script>
<script type="text/javascript" src="/visitor/js/easing.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
//<script src="//cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
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