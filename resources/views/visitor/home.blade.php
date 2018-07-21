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
body {
background-color: #333;
font-family: "Open Sans", sans-serif;
}

.wrapper {
background-color: white;
height: auto;
margin: 0 auto;
margin-top: -95px;
border-radius: 5px;

}

.user-image {
background-size: cover;
height: auto;
width: auto;

}

.user-image img {
width: 100%;
max-height: 400px;
}

.texto {
height: 30px;
width: 120px;
border: none;
background-color: #00819B;
position: absolute;
margin-top: -20px;
border-radius: 5px;
transition: width 400ms ease, background-color 400ms ease, margin-left 400ms ease;
-webkit-transition: width 400ms ease, background-color 400ms ease, margin-left 400ms ease;
-o-transition: width 400ms ease, background-color 400ms ease, margin-left 400ms ease;
-moz-transition: width 400ms ease, background-color 400ms ease, margin-left 400ms ease;
}
.text2 {
height: 30px;
width: 120px;
border: none;
background-color: #00819B;
position: absolute;
margin-left:130px;
margin-top: -20px;
border-radius: 5px;
transition: width 400ms ease, background-color 400ms ease, margin-left 400ms ease;
-webkit-transition: width 400ms ease, background-color 400ms ease, margin-left 400ms ease;
-o-transition: width 400ms ease, background-color 400ms ease, margin-left 400ms ease;
-moz-transition: width 400ms ease, background-color 400ms ease, margin-left 400ms ease;
}


.but-text {
font-size: 17px;
color: white;
text-align: center
}


.user-text {
margin-top: -20px;
}
span{
font-size: 20px;
margin-left: 20px;
margin-right: 10px
}
.user-name {
margin-left: 20px;
margin: 0 auto
}

.user-info {
margin-left: 20px;
margin-right: 10px;
margin-top: 10px;
direction: rtl;
text-align: right
}

.user-social {
width: 100%;
height: 50px;
position: relative;
margin-top: 20px;
text-align: center;
direction: rtl;

}

i {
margin-top: 5px;
margin-right: 20px;
text-align: center;
color: black;
}

.followers, .post {
display: inline-block;
margin-left: 20px;
color: #00819B;
font-weight: 700;
direction: ltr;
text-align: right
}

.fol, .pos {
float: right;
color: darkgrey;
font-size: 14px;
margin-left: 5px;
font-weight: 400;
}
h3{
padding-right: 20px;
direction: rtl;
text-align: right
}

h5 ,h6{
text-align: center
}





.cred {
font-size: 8pt;
color: #666464;;
text-decoration: none;
border-bottom: 1px solid #272727;
padding:10px 0px;
}
.cred:hover {
color: #169AF9;
}


.center {
display: block;
margin: 0 auto;
position: relative;
width: 300px;
top:1%
}

.like,
.dislike, .ban {
position: relative;
font-size: 2em;
width: 100px;
height: 100px;
text-align: center;
float: left;
cursor: pointer;
}

.dislike i,
.like i ,.ban i {
position: absolute;
line-height: 150px;
left: 0;
right: 0;
-webkit-transition: all .25s ease-in-out;
-moz-transition: all .25s ease-in-out;
-o-transition: all .25s ease-in-out;
transition: all .25s ease-in-out;
-webkit-box-reflect: below -45px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(70%, transparent) , to(rgba(250, 250, 250, 0.1)));
}
.like i{
color: red;
}
.dislike i{
color: #169AF9
}
.ban i{
color: #000
}
.outer {
font-size: 280%;
color: #000;

}

.dislike:hover i,
.like:hover i , .ban:hover i  {
color: #169AF9;
}

.dislike:hover .outer,
.like:hover .outer  ,.like:hover .ban  {
font-size: 300%;
color: #fff;
}

.active {
color: #169AF9;
}

.active .outer {
color: #000;
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
@include('visitor.template.nav')
<br>
<br>



<!-- Profile Page , Modal -->
<div class="page-header"></div>



<div class="contaier">
@if($flash = session('message'))
<script>
alert("{{ $flash }}");
</script>

@endif
@if($flash = session('deleted'))
<script>
alert("{{ $flash }}");
</script>
@endif
<div class="row">
<div class="wrapper col-xs-12 col-sm-12 col-md-8 col-lg-8">

<div class="user-image ">
<img src="{{ asset('files/users/' . $user->image ) }}">
</div>
@php
$number_of_visits = \App\ProfileView::where('profile_id', \Auth::guard('client')->user()->id)->count();
$likes = \App\Friend::where('friend_id', \Auth::guard('client')->user()->id)->count();
@endphp

<div class="text2"><span class="but-text"><i class="fa fa-eye">  {{ $number_of_visits }}</i> </span></div>
<div class="texto"><span class="but-text"><i class="fa fa-heart">  {{ $likes }}</i> </span></div>
<br>
<br>
<div class="user-text">
<h1 class="user-name">{{ $user->username }} </h1>
<h5>{{ $user->email }} </h5>
<h6>{{ $user->phone }} </h6>
@if(Auth::guard('client')->check())
@php
    $number_of_empty_fields = 0;

    if(\Auth::guard('client')->user()->fname === null)
    {
        $number_of_empty_fields++;
    }
    if(\Auth::guard('client')->user()->lname === null)
    {
        $number_of_empty_fields++;
    }
    if(\Auth::guard('client')->user()->email === null)
    {
        $number_of_empty_fields++;
    }
    if(\Auth::guard('client')->user()->password === null)
    {
        $number_of_empty_fields++;
    }
    if(\Auth::guard('client')->user()->username === null)
    {
        $number_of_empty_fields++;
    }
    if(\Auth::guard('client')->user()->phone === null)
    {
        $number_of_empty_fields++;
    }
    if(\Auth::guard('client')->user()->gender === null)
    {
        $number_of_empty_fields++;
    }
    if(\Auth::guard('client')->user()->main_description === null)
    {
        $number_of_empty_fields++;
    }
    if(\Auth::guard('client')->user()->city_id === null)
    {
        $number_of_empty_fields++;
    }
    if(\Auth::guard('client')->user()->other_person_description === null)
    {
        $number_of_empty_fields++;
    }
    if(\Auth::guard('client')->user()->dob === null)
    {
        $number_of_empty_fields++;
    }
    if(\Auth::guard('client')->user()->children_number === null)
    {
        $number_of_empty_fields++;
    }
    if(\Auth::guard('client')->user()->weight === null)
    {
        $number_of_empty_fields++;
    }
    if(\Auth::guard('client')->user()->height === null)
    {
        $number_of_empty_fields++;
    }
    if(\Auth::guard('client')->user()->skin_color === null)
    {
        $number_of_empty_fields++;
    }
    if(\Auth::guard('client')->user()->physique === null)
    {
        $number_of_empty_fields++;
    }
    if(\Auth::guard('client')->user()->education === null)
    {
        $number_of_empty_fields++;
    }
    if(\Auth::guard('client')->user()->financial_status === null)
    {
        $number_of_empty_fields++;
    }
    if(\Auth::guard('client')->user()->health_details === null)
    {
        $number_of_empty_fields++;
    }
    if(\Auth::guard('client')->user()->career_field === null)
    {
        $number_of_empty_fields++;
    }
    if(\Auth::guard('client')->user()->job === null)
    {
        $number_of_empty_fields++;
    }
     if(\Auth::guard('client')->user()->salary === null)
    {
        $number_of_empty_fields++;
    }
    if(\Auth::guard('client')->user()->image === null)
    {
        $number_of_empty_fields++;
    }
    
    $final_complete = (1 - ($number_of_empty_fields/24)) * 100;

@endphp
@if($final_complete != 100)
<div class="jumbotron" style="direction: rtl;">
  <h1 class="display-4">مرحبا {{ $user->fname }}</h1>
  <p class="lead" style="text-align: right;">معلوماتك الشخصية غير مكتملة بعد برجاء, اسكمالها كي يتم العثور عليك في نتائج البحث.</p>
  <hr class="my-4">
  <p class="lead">
    <a class="btn btn-warning btn-lg" href="/client/edit" role="button" style="float: right;">أكمل بياناتك</a>
  </p>
</div>
@else


<h3>مواصفات الشخصيه</h3>
<p class="user-info"><?= $user->main_description; ?> </p>
<hr>
<h3>مواصفات شريك الحياه</h3>
<p class="user-info"><?= $user->other_person_description; ?> </p>
<hr>
<div style="background-color: black; min-height:30px;direction:rlt " class="col-md-12 ">
<div class="clearfix"></div>
<div class="user-social col-lg-12 col-md-12" >

<div class="col-md-5 col-xs-6 col-sm-12">
<p class="followers" ><span class="fol">تاريخ الميلاد</span> {{ $user->dob }}</p></div>
<div class="col-md-5 col-xs-6 col-sm-12">
<p class="followers">{{ $user->fname }} {{ $user->lname }}<span class="fol">الأسم</span></p></div>
<div class="col-md-2 col-xs-2 col-sm-2  hidden-sm hidden-xs">
<i class="fa fa-bar-chart fa-2x"></i></div>
</div>
<div class="user-social col-lg-12 col-md-12">
<div class=" col-md-5 col-xs-6 col-sm-12">
<p class="followers">    <span class="pos">النوع</span> @if($user->gender == 'male') ذكر @else انثى @endif</p></div>
<div class=" col-md-5 col-xs-6 col-sm-12">
<p class="followers">{{ $user->city->name }}, {{ $user->city->country->name }}<span class="pos"> المدينه</span></p></div>
<div class="col-md-2 col-xs-2 col-sm-2  hidden-sm hidden-xs">
<i class="fa fa-bar-chart fa-2x"></i></div>
</div>
<div class="user-social col-lg-12 col-md-12">
<div class=" col-md-5 col-xs-6 col-sm-12">
<p class="followers">التعليم <span class="pos">@if($user->education === 'medium_school') تعليم متوسط@elseif($user->education === 'high_school')تعليم عالي @elseif($user->education === 'university') تعليم جامعي @elseif($user->education === 'PHD') دكتوراه @else تعليم ذاتي @endif </span> </p></div>
<div class="col-md-5 col-xs-6 col-sm-12">
<p class="followers"> <span class="fol">الحاله الاجتماعية</span> @if($user->social_status === 'married') متزوج @elseif($user->social_status === 'single') اعزب @elseif($user->social_status === 'divorced')مطلق  @else ارمل @endif</p></div>
<div class="col-md-2 col-xs-2 col-sm-2 hidden-sm hidden-xs">
<i class="fa fa-bar-chart fa-2x "></i></div>
</div>
<div class="user-social col-lg-12 col-md-12">
@if($user->social_status == 'married' && $user->gender === 'male')
<div class="col-md-5 col-xs-6 col-sm-12">

<p class="followers"><span class="fol"> حاله الزواج</span>@if($user->marraige_status === 'first') الاولى @elseif($user->marraige_status === 'second') الثانية @elseif($user->marraige_status === 'third') الثالثة @else الرابعة @endif</p></div>
@endif
@if($user->social_status != 'single')
<div class="col-md-5 col-xs-6 col-sm-12">
<p class="followers"><span class="pos"> عدد الاطفال</span>{{ $user->children_number }}</p></div>
<div class="col-md-2 col-xs-2 col-sm-2  hidden-sm hidden-xs">
<i class="fa fa-bar-chart fa-2x"></i></div>
@endif

</div>

<div class="user-social col-lg-12 col-md-12">
<div class="col-md-5 col-xs-6 col-sm-12">
<p class="followers"><span class="fol"> مجال العمل</span> {{ $user->career_field }}</p></div>
<div class="col-md-5 col-xs-6 col-sm-12">
<p class="followers"><span class="fol"> شركه العمل </span> {{ $user->job }}</p></div>

<div class="col-md-2 col-xs-2 col-sm-2 hidden-sm hidden-xs"><i class="fa fa-bar-chart fa-2x"></i> </div>

</div>

<div class="user-social col-lg-12 col-md-12">
<div class="col-md-5 col-xs-6 col-sm-12">
<p class="followers"><span class="fol"> الحاله الماديه</span>@if($user->financial_status === 'poor') فقير @elseif($user->financial_status==='rich') غني @elseif($user->financial_status==='lower_than_medium')أقل من المتوسط @elseif($user->financial_status=== 'medium')متوسط  @elseif($user->financial_status === 'more_than_medium') اعلى من المتوسط @elseif($user->financial_status === 'good')جيدة @else ميسرة @endif </p></div>
<div class="col-md-5 col-xs-6 col-sm-12">
<p class="followers"><span class="pos"> الراتب </span> {{ $user->salary }}</p>  </div>
<div class=" col-md-2 col-xs-2 col-sm-2  hidden-sm hidden-xs"><i class="fa fa-bar-chart fa-2x"></i> </div>

</div>
<div class="user-social col-lg-12 col-md-12">
<div class="col-md-5 col-xs-6 col-sm-12">
<p class="followers"><span class="fol">  اللياقه</span>@if($user->physique==='thin')نحيف  @elseif($user->physique==='medium_thin')متوسط البنية @elseif($user->physique=== 'medium')متوسط  @elseif($user->physique === 'sporty') رياضي @elseif($user->physique === 'fat')بدين @else ضخم @endif</p> </div>
<div class="col-md-5 col-xs-6 col-sm-12">
<p class="followers"><span class="pos"> الحاله الصحيه </span> {{ $user->health_details }}</p></div>
<div class="col-md-2 col-xs-2 col-sm-2  hidden-sm hidden-xs">
<i class="fa fa-bar-chart fa-2x"></i></div>
</div>
<div class="user-social col-lg-12 col-md-12">
<div class="col-md-5 col-xs-6 col-sm-12">
<p class="followers"><span class="fol">  الطول</span> {{ $user->height }}</p> </div>
<div class="col-md-5 col-xs-6 col-sm-12">
<p class="followers"><span class="fol">  الوزن </span> {{ $user->weight }}</p></div>
<div class="col-md-2 col-xs-2 col-sm-2  hidden-sm hidden-xs">
<i class="fa fa-bar-chart fa-2x "></i></div>
</div>
<div class="user-social col-lg-12 col-md-12">
<div class="col-md-5 col-xs-6 col-sm-12">
<p class="followers"><span class="fol">  لون البشره</span> @if($user->skin_color === 'white') ابيض @elseif($user->skin_color === 'black') اسود @elseif($user->skin_color === 'dark_brown') قمحي غامق @elseif($user->skin_color === 'brown') بني @elseif($user->skin_color === '7enty_dark') حنطي اسود @else حنطي ابيض  @endif</p></div>
<div class="col-md-5 col-xs-6 col-sm-12">
<p class="followers"><span class="fol">  نوعيه الاشتراك</span>  @if($user->member_ship === 'free') مجاني @else مميز @endif</p></div>
<div class="col-md-2 col-xs-2 col-sm-2  hidden-sm hidden-xs">
<i class="fa fa-bar-chart fa-2x"></i></div>
</div>

</div>

@endif
@endif



<div  style="direction:rtl; text-align:center; margin: 0px auto">
<div class="todo-links col-md-4 col-xs-12 col-sm-12 col-lg-4"><a  href="/blocked"><i class="fa fa-square" style="color: black"></i>قائمة الحظر </a></div>

<div class="todo-links col-md-4 col-xs-12 col-sm-12 col-lg-4"><a  href="/client/edit"><i class="fa fa-pencil-square-o" style="color: black"></i>  تعديل البيانات</a>
</div>

<div class="todo-links col-md-4 col-xs-12 col-sm-12 col-lg-4"><a href="{{ url('/client/logout') }}"><i class="fa fa-frown-o" style="color: black"></i> تسجيل الخروج</a>
</div>


</div>
</div>

</div>


</div>
</div>
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





<script>
$(function() {
$('.like, .dislike').click(function() {
event.preventDefault();
$('.active').removeClass('active');
$(this).effect("bounce", {
times: 4
}, 1000);
$(this).addClass('active');
});
})

</script>


</body>
</html>