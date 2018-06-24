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
	
	body{
  background-color:#ccc;
  font-family: 'Montserrat', sans-serif;
}
.page-header{
  background-color:#27aae1;
  height:100px;
  margin:0px;
}
.profile-container{
  width:40%;
  margin:auto;
  background-color:#fff;
  padding:30px;
  margin-top:-50px;
  height:auto;direction: rtl
}
.user-name{
  color:#0e2f44;
  font-weight:bold;
	text-align: center
}
.user-mail{
  color:#858585;
	text-align: center
}
.user-company{
  font-weight:bold;
  color:#f067ae;
	text-align: center
}
	.more-info{
  background-color:#e5e5e5;
  border-bottom:#ccc 1px solid ;
	direction: rtl;
		text-align: center
}
	.more-info h5{
		color: #27aae1;
		font-weight: 200
	}
	.todo-links{
  padding:10px;
  border-bottom:1px solid #ccc;

}
.todo-links a i{
  margin-right:20px;
}
.todo-links a{
  color:#000;
  font-size:16px;
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
</style>
</head>
<body >
	<!--start-home-->


  <div class="navbar" style="direction: rtl; margin: 0 auto">
  <div class="contaier" style="margin-left:300px">

      <ul class="nav navcollaps" style="direction: rtl;">

          <li><a href="{{ url('/client/logout') }}"><i class="fa fa-comment"></i>الخروج</a></li>
        <li><a href="#"><i class="fa fa-comment"></i>    الدردشه</a></li>
         
        <li><a href="#"><i class="fa fa-envelope"></i>   الرسائل</a></li>
          <li><a href="#"><i class="fa fa-heart"></i>     الاعجاب</a></li>
        <li><a href="#"> <i class="fa fa-users"></i>    الزيارات</a></li>
         <li><a href="#"><i class="fa fa-search"></i>    البحث</a></li>
         <li><a href="#"> <i class="fa fa-home"></i>     الصفحه الرئيسه</a></li>
      </ul>
      
         <div class="navbar-header">
      <button class="toggle"><span></span>
      <span></span>
      <span></span></button>
      <a href="" class="navbar-brand" style="margin-top: -20px"><img src="/visitor/images/logo-girl.png" width="120px"></a>
    </div><!-- navbar-header -->


  </div><!-- contaier -->
</div><!-- navbar -->


	<br>
	<br>
	
	
	
	<!-- Profile Page , Modal -->
<div class="page-header"></div>
<div class="profile-container">
  <div class="row">
  <div class="col-md-4">
    <img src="{{ asset('files/users/' . $user->image ) }}" class="img-responsive" width="100" height="100" />
  </div>

  <div class="col-md-8 profile-info" >
    @if($flash = session('message'))
          <div class="alert success">
              <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
              <b>{{ $flash }}</b>
          </div>
      @endif
      @if($flash = session('deleted'))
          <div class="alert">
              <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
              <b>{{ $flash }}</b>
          </div>
      @endif
    <h4 class="user-name">{{ $user->fname . ' ' . $user->lname }}</h4>
    <h5 class="user-mail"><i>{{ $user->geneder }} </i></h5>
    <h5 class="user-company">{{ \App\Country::find($user->city->country_id)->name . ' , ' . $user->city->name }}</h5>
      {{--<button  class="login" style="width: 47%"><i class="fa fa-heartbeat"></i> </button>--}}
      {{--<button  class="login" style="width: 47%"><i class="fa fa-heart"></i> </button>--}}
  </div>
</div>
  <br/><br/>
  {{--<div class="row more-info">--}}
  {{--<div class="col-md-6">--}}
    {{--<h5><b>طريقة التواصل مع الآخرين</b></h5>--}}
    {{--<p>الموقع</p>--}}
  {{--</div>--}}
    {{--<div class="col-md-6">--}}
      {{--<h5><b>آخر تواجد في الموقع</b></h5>--}}
    {{--<p>20/06/2018--}}
{{--</p>--}}
  {{--</div>--}}
  {{--</div>--}}
   <div class="row more-info">
  <div class="col-md-6">
    <h5 ><b>البريد الالكتروني</b></h5>
    <p>{{ $user->email }}</p> <!-- </3 :( -->
  </div>
    <div class="col-md-6">
      <h5><b>اسم المستخدم</b></h5>
    <p> {{ $user->username }} </p>
  </div>
  </div>
    <div class="row more-info">
        <div class="col-md-6">
            <h5 ><b>رقم التليفون</b></h5>
            <p>{{ $user->phone }}</p> <!-- </3 :( -->
        </div>
        <div class="col-md-6">
            <h5><b> نوع العضوية</b></h5>
            <p>{{ $user->member_ship }} </p>
        </div>
    </div>
    <div class="row more-info">
        <div class="col-md-6">
            <h5 ><b>التعليم</b></h5>
            <p>{{ $user->education }}</p> <!-- </3 :( -->
        </div>
        <div class="col-md-6">
            <h5><b>البنية</b></h5>
            <p> {{ $user->physique }} </p>
        </div>
    </div>
    <div class="row more-info">
        <div class="col-md-6">
            <h5 ><b>الحالة الماديه</b></h5>
            <p>{{ $user->financial_status }}</p> <!-- </3 :( -->
        </div>
        <div class="col-md-6">
            <h5><b>الراتب الحالي</b></h5>
            <p> {{ $user->salary }} </p>
        </div>
    </div>

  <div class="row more-info">
  <div class="col-md-6">
    <h5 ><b>الطول</b></h5>
    <p>{{ $user->height }}</p> <!-- </3 :( -->
  </div>
    <div class="col-md-6">
      <h5><b> الوزن </b></h5>
    <p>{{ $user->weight }} </p>
  </div>
  </div>
  
  <div class="row more-info">
  <div class="col-md-6">
    <h5 ><b>لون البشرة</b></h5>
    <p>{{ $user->skin_color }}</p> <!-- </3 :( -->
  </div>
      <div class="col-md-6">
          <h5 ><b>النوع</b></h5>
          <p>{{ $user->gender }}</p> <!-- </3 :( -->
      </div>
  </div>
    <div class="row more-info">
        <div class="col-md-6">
            <h5><b> لديك ابناء </b></h5>
            <p>{{ $user->children_number }} </p>
        </div>
        <div class="col-md-6">
            <h5><b> تاريخ الميلاد</b></h5>
            <p>{{ $user->dob }}</p>
        </div>
    </div>
    <div class="row more-info">
        <div class="col-md-6">
            <h5><b> الحاله الاجتماعيه</b></h5>
            <p>{{ $user->social_status }} </p>
        </div>
        @if($user->social_status == 'married')
            <div class="col-md-6">
                <h5 ><b>عدد الزوجات</b></h5>
                <p>{{ $user->marraige_status }}</p> <!-- </3 :( -->
            </div>
        @endif
    </div>
    <div class="row more-info">
        @if($user->social_status !== 'single')
            <div class="col-md-6">
                <h5 ><b>عدد الابناء</b></h5>
                <p>{{ $user->children_number }}</p> <!-- </3 :( -->
            </div>
        @endif
        <div class="col-md-6">
            <h5><b> الحاله الصحية</b></h5>
            <p>{{ $user->health_details }}</p>
        </div>
    </div>
    <div class="row more-info">
        <div class="col-md-6">
            <h5 ><b>مجال العمل</b></h5>
            <p>{{ $user->career_field }}</p> <!-- </3 :( -->
        </div>
        <div class="col-md-6">
            <h5><b>الوظيفة</b></h5>
            <p> {{ $user->job }} </p>
        </div>
    </div>
    <div class="row more-info">
        <div class="col-md-6">
            <h5><b>التواجد</b></h5>
            <p>{{ $user->online }} </p>
        </div>
    </div>
  <div class="row more-info">
  <div class="col-md-12">
    <h5 ><b>تحدث عن نفسك </b></h5>
    <p>{{ $user->main_description }}

  </p> <!-- </3 :( -->
  </div>
    
  </div>
  
  <div class="row more-info">
  <div class="col-md-12">
    <h5 ><b> صف الشخص الذي تبحث عنه </b></h5>
    <p>{{ $user->other_person_description }}

  </p> <!-- </3 :( -->
  </div>
    
  </div>
  <br/>
  <div class="row">
   
    <div class="todo-links"><a  href="/client/edit"><i class="fa fa-pencil-square-o" style="color: black"></i>  تعديل البيانات</a>
    </div>

     <div class="todo-links"><a href="{{ url('/client/logout') }}"><i class="fa fa-frown-o" style="color: black"></i> تسجيل الخروج</a>
    </div>
   

  </div>
  <br/><br/>
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
							
							
							
							
		<script>
	
	var nexusratio = 0.5628415300546448;
//43.4512445,-80.498576

$(document).ready(function(){
	//Resize();
});

function Resize(){
	var h = $(document).height();
	console.log(h);
	if(h > 512){
		$("#nexus6p").css('height', 512);
		$("#nexus6p").css('width', 512 * nexusratio);
	}
	else{
		var w = h * nexusratio;
		$("#nexus6p").css('height', h);
		$("#nexus6p").css('width', w);
	}
}

$(".menu").on("click", function(e){
	$(this).toggleClass("on");
});


$(".menu-item").on("click", function(e){
	$(".profile-bottom .profile-container").removeClass("open");
	var c = $(this).attr('menu-data');
	console.log(c);
		$("."+c).addClass('open');
});
	
	</script>
								
								
							
									


</body>
</html>