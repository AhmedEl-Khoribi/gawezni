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

    <link href="https://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Custom-Theme-files-->
    <link href="/visitor/css/style.css" rel="stylesheet" type="text/css" />
    <link  href="/extra/datepicker.css" rel="stylesheet">
	<style>

		.input-file-container {
			position: relative;
			width: 300px;
		}
		.input-file-trigger {
			display: block;
			padding: 14px 45px;
			background: #f067ae;
			color: #fff;
			font-size: 1em;
			transition: all .4s;
			cursor: pointer;
		}
		.input-file {
			position: absolute;
			top: 0; left: 0;
			width: 225px;
			opacity: 0;
			padding: 14px 0;
			cursor: pointer;
		}
		.input-file:hover + .input-file-trigger,
		.input-file:focus + .input-file-trigger,
		.input-file-trigger:hover,
		.input-file-trigger:focus {
			background: #34495E;
			color: #39D2B4;
		}

	</style>
</head>
<body style="background-image: url(/visitor/images/female.jpg) ; background-size: cover; font-family: 'Aref Ruqaa', serif;"  >
<!--start-home-->
<div id="home" class="header">
	<div class="header-top">
		<div class="container">
			<div class="logo">
				<a href="{{ url('/') }}"><img src="/visitor/images//logo-girl.png"></a>
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
<style>
	#lbform button , .women{
		background: #f067ae;
		color: #fff;
		font-size: 20px;
		font-family: 'Open sans', sans-serif;
		width: 100%;
		padding: 10px 0;
		font-weight: 700;
		border: medium none;
		text-transform: uppercase;
		-webkit-border-radius: 2px 2px 2px 2px;
		border-radius: 2px 2px 2px 2px;
	}
</style>
<div class="banner1" style="height: 160vh">
	<div class="attend" style="height: 1250px !important;">
		<h3 class="tittle atd" style="font-family: 'Aref Ruqaa', serif;" >تسجيل الدخول</h3>



		<form id="lbform" enctype="multipart/form-data" class="formlayout" action="{{ url('femaleRegister') }}" name="lbform-1" method="post" style="direction: rtl ;">
			{{ csrf_field() }}
			<fieldset>
				<!-- Step 1 -->
                <!-- Step 1 -->
                <div class="step1">
                    <div class="row cf">
                        <label  >الاسم الاول</label>
                        <input type="text"  name="fname" value="{{ old('fname') }}" id="fname" required style="direction: rtl ;float: right" placeholder="الاسم الاول">
                    </div>
                    <span id="fnameText" class="text-center"></span>
                    <div class="row cf">
                        <label>الاسم الاخير</label>
                        <input type="text"  name="lname" value="{{ old('lname') }}" id="lname" required style="direction: rtl ;float: right" placeholder="الاسم الاخير">
                    </div>
                    <span id="lnameText" class="text-center"></span>
                    <div class="row cf">
                        <label> تاريخ الميلاد</label>
                        <input type="date"   value="{{ old('dob') }}" max="1998-01-01" id="dob" name="dob" required >
                    </div>
                    <span id="dobText" class="text-center"></span>
                    <div class="row cf">
                        <label>الايميل </label>
                        <input type="email"  name="email" value="{{ old('email') }}" id="email" required style="direction: rtl ;float: right" placeholder="الايميل ">
                    </div>
                    <span id="emailText" class="text-center"></span>
                    <div class="row cf">
                        <label>كلمة المرور </label>
                        <input type="password"  name="password" required style="direction: rtl ;float: right" id="password"  placeholder="كلمه المرور ">
                    </div>
                    <span id="passwordText" class="text-center"></span>
                    <div class="row cf">
                        <label> اعادة كلمه المرور  </label>
                        <input type="password"  name="password_confirmation" id="repassword" required style="direction: rtl ;float: right" placeholder="تاكيد  كلمه المرور ">
                    </div>
                    <span id="repasswordText" class="text-center"></span>
                    <div class="row cf">
                        <label>  اسم المستخدم   </label>
                        <input type="text"  name="username" value="{{ old('username') }}" id="username" required style="direction: rtl ;float: right" placeholder=" اسم المستخدم">
                    </div>
                    <span id="usernameText" class="text-center"></span>
                    <div class="row cf">
                        <label>رقم الهاتف</label>
                        <input type="text"  name="phone" value="{{ old('phone') }}" id="phone" required style="direction: rtl ;float: right" placeholder="رقم الهاتف ">
                    </div>
                    <span id="phoneText" class="text-center"></span>
                    <br>
                    <div class="row cf" style="padding: 0">
                        <label>ارفع صوره شخصيه</label>
                        <div class="input-file-container">
                            <input class="input-file" id="my-file" type="file" name="image">
                            <label tabindex="0" for="my-file" class="input-file-trigger" style="width: 100%;text-align: center;">ضع صورة . . . . . </label>
                        </div>
                    </div>
                    <span id="myFileText" class="text-center"></span>
                    <br>
                    <div class="row cf" >
                        <button class="next-btn women" id="step1" >الخطوة التاليه<span>1/3</span></button>
                    </div>
                    <br>
                </div>
                <!-- Step 2 -->
                <div class="step2">
                    <div class="row cf">
                        <label>   تحدث عن نفسك   </label>
                        <textarea name="main_description" value="{{ old('main_description') }}" id="main_description" cols="30" rows="3" ></textarea>

                    </div>
                    <span id="mainDescriptionText" class="text-center"></span>
                    <div class="row cf">
                        <label>   تحدث عن شريك حياتك   </label>
                        <textarea name="other_person_description" value="{{ old('other_person_description') }}" id="other_person_description" cols="30" rows="3" ></textarea>
                    </div>
                    <span id="otherPersonDescriptionText" class="text-center"></span>
                    <div class="row cf">
                        <label>   البلد  </label>
                        <select name="country" id="country" class="required gender" value="{{ old('country') }}" id="country" required>
                            <option value="" selected="selected">اختر اللبد  ...</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <span id="countryText" class="text-center"></span>
                    <div class="row cf">
                        <label>   المدينه     </label>
                        <select name="city_id" id="city" value="{{ old('city') }}" class="required gender" id="city" required disabled>
                            <option value="" selected="selected">اختر المدينه  ...</option>
                        </select>
                    </div>
                    <span id="cityText" class="text-center"></span>
                    <div class="row cf">
                        <label>     لوضع المادي     </label>
                        <select name="financial_status" id="financial_status" class="required gender" value="{{ old('financial_status') }}" required>
                            <option value="" selected="selected">اختر حالتك الماديه  ...</option>
                            <option value="poor">فقير</option>
                            <option value="lower_than_medium">اقل من المتوسط</option>
                            <option value="medium">متوسط</option>
                            <option value="more_than_medium">اعلي من المتوسط</option>
                            <option value="good">جيده</option>
                            <option value="mastora">ميسره</option>
                            <option value="rich">ثري</option>
                        </select>
                    </div>
                    <span id="financialStatusText" class="text-center"></span>
                    <div class="row cf">
                        <label>     المؤهل التعليمي     </label>
                        <select name="education" class="required gender" id="education" value="{{ old('education') }}" required>
                            <option value="" selected="selected">  اختر المؤهل  ...</option>
                            <option value="medium_school">متوسط</option>
                            <option value="high_school">ثانوي</option>
                            <option value="university">جامعي</option>
                            <option value="PHD">دكتوراه</option>
                            <option value="self_study">تعليم ذاتي</option>
                        </select>
                    </div>
                    <span id="educationText" class="text-center"></span>
                    <div class="row cf">
                        <label> المهنة</label>
                        <input type="text"  value="{{ old('job') }}" id="job" name="job" required style="direction: rtl ;float: right" placeholder="المهنة ">

                    </div>
                    <span id="jobText" class="text-center"></span>

                    <div class="row cf">
                        <label> مجال العمل</label>
                        <input type="text" value="{{ old('career_field') }}" id="career_field"  name="career_field" required style="direction: rtl ;float: right" placeholder=" مجال العمل">

                    </div>
                    <span id="careerFieldText" class="text-center"></span>
                    <br>
                    <div class="row cf">
                        <button class="continue-btn women" id="step2">تابع<span>2/3</span></button>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="step3">
                    <div class="row cf">
                        <label>    الحالة الصحية     </label>
                        <input type="text" id="health_details" value="{{ old('health_details') }}"  name="health_details" required style="direction: rtl ;float: right">
                    </div>
                    <span id="healthDetailsText" class="text-center"></span>
                    <div class="row cf">
                        <label>   الحالة الاجتماعية     </label>
                        <select name="social_status" id="social_status" value="{{ old('social_status') }}" class="required gender" required>
                            <option value="" selected="selected">اختر حالتك  ...</option>
                            <option value="single">اعزب</option>
                            <option value="married">متزوج</option>
                            <option value="divorced">مطلق</option>
                            <option value="willow">ارمل</option>
                        </select>
                    </div>
                    <span id="socialStatusText" class="text-center"></span>
                    <div id="marraige" style="display: none">
                        <div class="row cf">
                            <label>    عدد الزوجات     </label>
                            <select name="marraige_status" id="marraige_status" value="{{ old('marraige_status') }}"  class="gender">
                                <option value="" selected="selected">عدد الزوجات ...</option>
                                <option value="first">زوجه اولي</option>
                                <option value="second">زوجه ثانيه</option>
                                <option value="third">زوجه ثالثه</option>
                                <option value="fourth">زوجه رابعه</option>
                            </select>
                        </div>
                        <span id="marraigeStatusText" class="text-center"></span>
                    </div>
                    <div id="children" style="display: none">
                        <div class="row cf">
                            <label>     عدد الاطفال     </label>
                            <input type="number" value="{{ old('children_number') }}" id="children_number"  name="children_number" style="direction: rtl ;float: right" placeholder="عدد الابناء">
                        </div>
                        <span id="childrenNumberText" class="text-center"></span>
                    </div>
                    <div class="row cf">
                        <label>     المرتب     </label>
                        <input type="number" value="{{ old('salary') }}" id="salary"  name="salary" required style="direction: rtl ;float: right" placeholder=" المرتب">
                    </div>
                    <span id="salaryText" class="text-center"></span>
                    <div class="row cf">
                        <label>     الوزن     </label>
                        <input type="number" value="{{ old('weight') }}" id="weight"  name="weight" required style="direction: rtl ;float: right" placeholder=" الوزن">
                    </div>
                    <span id="weightText" class="text-center"></span>
                    <div class="row cf">
                        <label>     الطول     </label>
                        <input type="number" value="{{ old('height') }}"  name="height" id="height" required style="direction: rtl ;float: right" placeholder="الطول ">
                    </div>
                    <span id="heightText" class="text-center"></span>
                    <div class="row cf">
                        <label>     لون البشره      </label>
                        <select name="skin_color" id="skin_color" value="{{ old('skin_color') }}"  class="required gender" required>
                            <option value="" selected="selected">  لون البشره  ...</option>
                            <option value="white">ابيض </option>
                            <option value="black">اسود </option>
                            <option value="dark_brown">قمحي غامق </option>
                            <option value="brown">قمحي </option>
                            <option value="7enty_dark">حنطي اسود </option>
                            <option value="7enty_white">حنطي ابيض </option>
                        </select>
                    </div>
                    <span id="skinColorText" class="text-center"></span>
                    <div class="row cf">
                        <label>     الحاله البدنيه       </label>
                        <select name="physique" id="physique" value="{{ old('physique') }}" class="required gender" required>
                            <option value="" selected="selected">   اختر الحاله  ...</option>
                            <option value="thin">نحيف </option>
                            <option value="medium_thin">متوسط </option>
                            <option value="sporty">رياضي </option>
                            <option value="fat">سمين </option>
                            <option value="huge">ضخم </option>
                        </select>
                    </div>
                    <span id="physiqueText" class="text-center"></span>
                    <div class="row cf">
                        <button class="header" type="submit" id="step3"> انضم مجانا<span>3/3</span></button>
                    </div>
                </div>


			</fieldset>
		</form>
		<div class="clearfix"></div>
	</div>

</div>


<!--//footer-->

<script
        src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>
<!--/script-->
<script src="https://fengyuanchen.github.io/js/common.js"></script>
<script src="/extra/datepicker.js"></script>


<script type="text/javascript" src="/visitor/js/move-top.js"></script>
<script type="text/javascript" src="/visitor/js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
        });

        $("#dob").datepicker({
            date: new Date(1998, 1, 14)
        });
    });
</script>


<script>

    $(document).ready(function(){
        function fieldEmpty(place,message,button)
        {
            var text ='<span style="color: #FF0;margin-left:40px;" >' + message + '</span>';
            $(place).html(text);
            $(button).preventDefault();
        }
        $("#step1").click(function(){
            var fname = $("#fname").val();
            var lname = $("#lname").val();
            var email = $("#email").val();
            var dob = $("#dob").val();
            var username = $("#username").val();
            var password = $("#password").val();
            var repassword = $("#repassword").val();
            var phone = $("#phone").val();
            var myFile = $("#my-file").val();
            if(fname == '')
            {
                fieldEmpty('#fnameText','يجب ادخال الاسم الاول','#step1');
            }
            if(lname == '')
            {
                fieldEmpty('#lnameText','يجب ادخال اسم العائله','#step1');
            }
            if(email == '')
            {
                fieldEmpty('#emailText','يجب ادخال البؤيد الاكتروني','#step1');
            }
            if(dob == '')
            {
                fieldEmpty('#dobText','يجب ادخال تاريخ الميلاد','#step1');
            }
            if(username == '')
            {
                fieldEmpty('#usernameText','يجب ادخال اسم المستخدم','#step1');
            }
            if(password == '')
            {
                fieldEmpty('#passwordText','يجب ادخال كلمه المرور','#step1');
            }
            if(repassword == '')
            {
                fieldEmpty('#repasswordText','يجب ادخال تاكيد كلمه المرور','#step1');
            }
            if( phone == '')
            {
                fieldEmpty('#phoneText','يجب ادخال رقم التليفون','#step1');
            }
            if( myFile == '')
            {
                fieldEmpty('#myFileText','يجب اختيار صوره','#step1');
            }
            if(password !== repassword)
            {
                alert("كلمه المرور غير متطابقه حاول مره اخره");
                $("#step1").preventDefault();
            }
        });
        $("#step2").click(function(){
            var main_description = $("#main_description").val();
            var other_person_description = $("#other_person_description").val();
            var country = $("#country").val();
            var city = $("#city").val();
            var financial_status = $("#financial_status").val();
            var education = $("#education").val();
            var job = $("#job").val();
            var career_field = $("#career_field").val();
            if(main_description == '')
            {
                fieldEmpty('#mainDescriptionText','يجب ادخال وصف شخيتك','#step2');
            }
            if(other_person_description == '')
            {
                fieldEmpty('#otherPersonDescriptionText','يجب ادخال وصف شريك حياتك','#step2');
            }
            if(country == '')
            {
                fieldEmpty('#countryText','يجب اختيار البد','#step2');
            }
            if(city == '')
            {
                fieldEmpty('#cityText','يجب اختيار المدينه','#step2');
            }
            if(financial_status == '')
            {
                fieldEmpty('#financialStatusText','يجب اختيار حالتك الماليه','#step2');
            }
            if(education == '')
            {
                fieldEmpty('#educationText','يجب اختيار المرحله التعليميه','#step2');
            }
            if(job == '')
            {
                fieldEmpty('#jobText','يجب ادخال الوظيفه الحاليه','#step2');
            }
            if( career_field == '') {
                fieldEmpty('#careerFieldText', 'يجب ادخال مجال شغلك','#step2');
            }
        });
        $("#social_status").on('change',function() {
            var value = $("#social_status").val();
            if (value === 'married')
            {
                $("#marraige").fadeIn(1000);
            }
            else
            {
                $("#marraige").fadeOut(1000);
            }
            if (value !== 'single')
            {
                $("#children").fadeIn();
            }
            else
            {
                $("#children").fadeOut();
            }
        });
        $("#step3").click(function(){
            var health_details = $("#health_details").val();
            var social_status = $("#social_status").val();
            if(social_status == 'married')
            {
                var marraige_status = $("#marraige_status").val();
            }
            if(social_status !== single)
            {
                var children_number = $("#children_number").val();
            }
            var salary = $("#salary").val();
            var height = $("#height").val();
            var weight = $("#weight").val();
            var skin_color = $("#skin_color").val();
            var physique = $("#physique").val();
            if(health_details == '')
            {
                fieldEmpty('#healthDetailsText','يجب ادخال حالتك الصحية','#step3');
            }
            if(social_status == '')
            {
                fieldEmpty('#socialStatusText','يجب ادخال حالتك الاجتماعيه','#step3');
            }
            if(social_status == 'married')
            {
                if(marraige_status == '')
                {
                    fieldEmpty('#marraigeStatusText','يجب اختيار عدد الزوجات ان وجد','#step3');
                }
            }
            if(social_status !== 'single')
            {
                if(children_number == '')
                {
                    fieldEmpty('#childrenNumberText','يجب ادخال عدد الابناء ان وجد','#step3');
                }
            }
            if(salary == '')
            {
                fieldEmpty('#salaryText','يجب ادخال الراتب الحالي','#step3');
            }
            if( salary > 50000 || salary <200 ) {
                fieldEmpty('#salaryText', 'الراتب الشهري لا يمكن ان يقل عن 200 او يزيد عن 50000','#step3');
            }
            if(weight == '')
            {
                fieldEmpty('#weightText','يجب ادخال وزنك بال كيلو جرام','#step3');
            }
            if(height == '')
            {
                fieldEmpty('#heightText','يجب ادخالك طولك بال سم','#step3');
            }
            if(weight > 150 || weight < 30)
            {
                fieldEmpty('#weightText','الوزن يجب ان لا يقل عن 30 كيلو جرام ولا يزيد عن 150 كيلو جرام','#step3');
            }
            if(height > 200 || height < 50)
            {
                fieldEmpty('#heightText','الطول يجب ان لا يقل عن 50 سم ولا يزيد عن 200 سم','#step3');
            }
            if( skin_color == '') {
                fieldEmpty('#skinColorText', 'يجب اختيار لون بشرتك','#step3');
            }
            if( physique == '') {
                fieldEmpty('#physiqueText', 'يجب اختيار شخصيتك البدنيه','#step3');
            }
        });

        $("#salary").keyup(function(){
            var ob = {};
            var data = $(this).val();
            ob.url = '/salary/' + data;
            ob.type = "GET"; // "POST"
            ob.success = function(data)
            {
                if(data.success != null)
                {
                    document.getElementById('step3').disabled = false;
                }
                else
                {
                    var text ='<span style="color: #db0141;margin-left:30px">'+ data.error +'</span>';
                    $("#salaryText").html(text);
                    document.getElementById('step3').disabled = true;
                }
            }
            ob.dataType = "json";
            $.ajax(ob);
        });
        $("#height").keyup(function(){
            var ob = {};
            var data = $(this).val();
            ob.url = '/height/' + data;
            ob.type = "GET"; // "POST"
            ob.success = function(data)
            {
                if(data.success != null)
                {
                    document.getElementById('step3').disabled = false;
                }
                else
                {
                    var text ='<span style="color: #db0141;margin-left:30px">'+ data.error +'</span>';
                    $("#heightText").html(text);
                    document.getElementById('step3').disabled = true;
                }
            }
            ob.dataType = "json";
            $.ajax(ob);
        });
        $("#weight").keyup(function(){
            var ob = {};
            var data = $(this).val();
            ob.url = '/weight/' + data;
            ob.type = "GET"; // "POST"
            ob.success = function(data)
            {
                if(data.success != null)
                {
                    document.getElementById('step3').disabled = false;
                }
                else
                {
                    var text ='<span style="color: #db0141;margin-left:30px">'+ data.error +'</span>';
                    $("#weightText").html(text);
                    document.getElementById('step3').disabled = true;
                }
            }
            ob.dataType = "json";
            $.ajax(ob);
        });

        $("#email").keyup(function(){
            var ob = {};
            var data = $(this).val();
            ob.url = '/email/' + data;
            ob.type = "GET"; // "POST"
            ob.success = function(data)
            {
                if(data.success != null)
                {
                    var text ='<span style="color: #0F0;margin-left:30px">'+ data.success +'</span>';
                    $("#emailText").html(text);
                    document.getElementById('step1').disabled = false;
                }
                else
                {
                    var text ='<span style="color: #db0141;margin-left:30px">'+ data.error +'</span>';
                    $("#emailText").html(text);
                    document.getElementById('step1').disabled = true;
                }
            }
            ob.dataType = "json";
            $.ajax(ob);
        });
        $("#phone").keyup(function(){
            var ob = {};
            var data = $(this).val();
            ob.url = '/phone/' + data;
            ob.type = "GET"; // "POST"
            ob.success = function(data)
            {
                if(data.success != null)
                {
                    var text ='<span style="color: #0F0;margin-left:30px">'+ data.success +'</span>';
                    $("#phoneText").html(text);
                    document.getElementById('step1').disabled = false;
                }
                else
                {
                    var text ='<span style="color: #db0141;margin-left:30px">'+ data.error +'</span>';
                    $("#phoneText").html(text);
                    document.getElementById('step1').disabled = true;
                }
            }
            ob.dataType = "json";
            $.ajax(ob);
        });
        $("#username").keyup(function(){
            var ob = {};
            var data = $(this).val();
            ob.url = '/username/' + data;
            ob.type = "GET"; // "POST"
            ob.success = function(data)
            {
                if(data.success != null)
                {
                    var text ='<span style="color: #0F0;margin-left:30px">'+ data.success +'</span>';
                    $("#usernameText").html(text);
                    document.getElementById('step1').disabled = false;
                }
                else
                {
                    var text ='<span style="color: #db0141;margin-left:30px">'+ data.error +'</span>';
                    $("#usernameText").html(text);
                    document.getElementById('step1').disabled = true;
                }
            }
            ob.dataType = "json";
            $.ajax(ob);
        });

    });
    // Date input field validation
    $('#lbform').on('submit', function(e) {
        var dob = e.target.dob.value.split('-');
        ['dobyear', 'dobmonth', 'dobday'].forEach(function (field, index) {
            $('<input>').
            attr('type', 'hidden').
            attr('name', field).
            attr('value', dob[index]).
            appendTo(e.target);
        });
    });

    (function() {
        var dob = document.getElementById('dob');

        // No HTML5 validation API? don't go any further
        if (typeof dob.setCustomValidity !== 'function') {
            return;
        }

        function getSelectedDate(input) {
            var date = input.valueAsDate,
                parts, d, m, y;

            if (!date) {
                parts = input.value.split(/\D/);
                d = +parts[0];
                m = +parts[1] - 1;
                y = +parts[2];
                date = new Date(y, m, d);

                if (date.getFullYear() != y ||
                    date.getMonth() != m ||
                    date.getDate() != d
                ) {
                    date = null;
                }
            }
            return date;
        }

        // Use the HTML5 validation API to report issues
        function validateDOB(input) {
            var date = getSelectedDate(input);
            if (date && date.getFullYear() > 1998) {
                input.setCustomValidity('You must be over 18 years old to join');
            } else {
                input.setCustomValidity('');
            }
        }

        // watch for change and revalidate
        dob.addEventListener('change', function (e) {
            validateDOB(this);
        });

        // the validate default value
        validateDOB(dob);
    }());

    // My little script to slide the steps left and right
    $(document).ready(function(){
        $(".next-btn").click(function(){
            $(".step2").css("left", "0");
            $(".step1").css("opacity", "0");
        });
        $(".continue-btn").click(function(){
            $(".step3").css("left", "0");
            $(".step2").css("left", "-9999px");
        });
    });
    $(document).ready(function(){
        $("#country").on('change',function(){
            var country = $("#country").val();
            var ob={};
            ob.url = '/city/' + country;
            ob.type = "GET";
            ob.success = function(data)
            {
                if(data.cities != null)
                {
                    document.getElementById('city').disabled = false;
                    $("#city").html(data.cities);
                    document.getElementById('sub').disabled = false;
                }
                else
                {
                    document.getElementById('city').disabled = true;
                    document.getElementById('sub').disabled = true;
                }
            }
            ob.dataType = "json";
            $.ajax(ob);
        });
    });


</script>






</body>
</html>
