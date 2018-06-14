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
	<script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
            });
        });
	</script>
	<style>
		#lbform input::-webkit-input-placeholder {
			color: #27aae1;
			opacity: 1;
			direction: rtl;
			text-align: right
		}
		#lbform select {
			color: #27aae1;
		}
		#lbform input , textarea {
			background: rgba(255,255,255,.9);
			color: #27aae1;
		}
		#lbform input[type="date"] {
			color: #27aae1;
			direction: rtl;
			float: right
		}

		#lbform button {
			background: #27aae1;
		}
		.input-file-container {
			position: relative;
			width: 300px;
		}
		.input-file-trigger {
			display: block;
			padding: 14px 45px;
			background: #39D2B4;
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
<body style="background-image: url(/visitor/images/male.jpg) ; background-size: cover; font-family: 'Aref Ruqaa', serif;"  >
<!--start-home-->
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
<div id="home" class="header">
	<div class="header-top">
		<div class="container">
			<div class="logo">
				<a href="{{ url('/') }}"><img src="/visitor/images/logo-man.png"></a>
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

<div class="banner1" style="height: 130vh">
	<div class="attend" style="height: 1477px !important;">

		<h3 class="tittle atd" style="font-family: 'Aref Ruqaa', serif;" >تسجيل الدخول</h3>



		<form id="lbform" enctype="multipart/form-data" class="formlayout " action="{{ url('maleRegister') }}" name="lbform-1" method="post" style="direction: rtl ;">
			{{ csrf_field() }}
			<fieldset>

				<!-- Step 1 -->
				<div class="step1">
					<div class="row cf">
						<label  >الاسم الاول</label>
						<input type="text"  name="fname" value="{{ old('fname') }}" required style="direction: rtl ;float: right" placeholder="الاسم الاول">

					</div>
					<div class="row cf">
						<label>الاسم الاخير</label>
						<input type="text"  name="lname" value="{{ old('lname') }}" required style="direction: rtl ;float: right" placeholder="الاسم الاخير">

					</div>
					<div class="row cf">
						<label> تاريخ الميلاد</label>
						<input type="date"  max="1998-01-01" value="{{ old('dob') }}" id="dob" name="dob" required >
					</div>
					<div class="row cf">
						<label>الايميل </label>
						<input type="email"  name="email" value="{{ old('email') }}" required style="direction: rtl ;float: right" placeholder="الايميل ">

					</div>
					<div class="row cf">
						<label>كلمة المرور </label>
						<input type="password"  name="password" required style="direction: rtl ;float: right"  placeholder="كلمه المرور ">

					</div>
					<div class="row cf">
						<label> اعادة كلمه المرور  </label>
						<input type="password"  name="password_confirmation" required style="direction: rtl ;float: right" placeholder="تاكيد  كلمه المرور ">
					</div>
					<div class="row cf">
						<label>  اسم المستخدم   </label>
						<input type="text"  name="username" value="{{ old('username') }}" required style="direction: rtl ;float: right" placeholder=" اسم المستخدم">

					</div>

					<div class="row cf">
						<label>رقم الهاتف</label>
						<input type="text"  name="phone" value="{{ old('phone') }}" required style="direction: rtl ;float: right" placeholder="رقم الهاتف ">

					</div>
					<br>
					<div class="row cf" style="padding: 0">
						<label>ارفع صوره شخصيه</label>
						<div class="input-file-container">
							<input class="input-file" id="my-file" type="file" name="image">
							<label tabindex="0" for="my-file" class="input-file-trigger">Select a file...</label>
						</div>
					</div>

					<br>
					<div class="row cf" >
						<button class="next-btn women" >الخطوة التاليه<span>1/3</span></button>
					</div>
					<br>
				</div>
				<!-- Step 2 -->
				<div class="step2">
					<div class="row cf">
						<label>   تحدث عن نفسك   </label>
						<textarea name="main_description" value="{{ old('main_description') }}" id="" cols="30" rows="3" ></textarea>

					</div>
					<div class="row cf">
						<label>   تحدث عن شريك حياتك   </label>
						<textarea name="other_person_description" id="" value="{{ old('other_person_description') }}" cols="30" rows="3" ></textarea>
					</div>
					<div class="row cf">
						<label>   البلد  </label>
						<select name="country" id="country" class="required gender" value="{{ old('country') }}" required>
							<option value="" selected="selected">اختر اللبد  ...</option>
							@foreach($countries as $country)
								<option value="{{ $country->id }}">{{ $country->name }}</option>
							@endforeach
						</select>
					</div>
					<div class="row cf">
						<label>   المدينه     </label>
						<select name="city_id" id="city" value="{{ old('city') }}" class="required gender" required disabled>
							<option value="" selected="selected">اختر المدينه  ...</option>
							<option value="1">مصر</option>
							<option value="2">السعوديه</option>
						</select>
					</div>
					<div class="row cf">
						<label>     لوضع المادي     </label>
						<select name="financial_status" id="money" class="required gender" value="{{ old('financial_status') }}" required>
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
					<div class="row cf">
						<label>     المؤهل التعليمي     </label>
						<select name="education" id="eductation" class="required gender" value="{{ old('education') }}" required>
							<option value="" selected="selected">  اختر المؤهل  ...</option>
							<option value="medium_school">متوسط</option>
							<option value="high_school">ثانوي</option>
							<option value="university">جامعي</option>
							<option value="PHD">دكتوراه</option>
							<option value="self_study">تعليم ذاتي</option>
						</select>
					</div>
					<div class="row cf">
						<label> المهنة</label>
						<input type="text"  value="{{ old('job') }}" name="job" required style="direction: rtl ;float: right" placeholder="المهنة ">

					</div>

					<div class="row cf">
						<label> مجال العمل</label>
						<input type="text" value="{{ old('career_field') }}"  name="career_field" required style="direction: rtl ;float: right" placeholder=" مجال العمل">

					</div>
					<br>
					<div class="row cf">
						<button class="continue-btn women">تابع<span>2/3</span></button>
					</div>
				</div>
				<!-- Step 3 -->
				<div class="step3">
					<div class="row cf">
						<label>    الحالة الصحية     </label>
						<input type="text" value="{{ old('health_details') }}"  name="health_details" required style="direction: rtl ;float: right">
					</div>
					<div class="row cf">
						<label>   الحالة الاجتماعية     </label>
						<select name="social_status" id="staute" value="{{ old('social_status') }}" class="required gender" required>
							<option value="" selected="selected">اختر حالتك  ...</option>
							<option value="single">اعزب</option>
							<option value="married">متزوج</option>
							<option value="divorced">مطلق</option>
							<option value="willow">ارمل</option>
						</select>
					</div>
					<div class="row cf">
						<label>     المرتب     </label>
						<input type="text" value="{{ old('salary') }}"  name="salary" required style="direction: rtl ;float: right" placeholder=" المرتب">
					</div>
					<div class="row cf">
						<label>    نوع الزواج     </label>
						<select name="marraige_status" id="type" value="{{ old('marraige_status') }}"  class="required gender" required>
							<option value="" selected="selected">اختر النوع  ...</option>
							<option value="first">زوجه اولي</option>
							<option value="second">زوجه ثانيه</option>
							<option value="third">زوجه ثالثه</option>
							<option value="fourth">زوجه رابعه</option>
						</select>
					</div>
					<div class="row cf">
						<label>     عدد الاطفال     </label>
						<input type="number" value="{{ old('children_number') }}"   name="children_number" required style="direction: rtl ;float: right" placeholder="عدد الابناء">
					</div>
					<div class="row cf">
						<label>     الوزن     </label>
						<input type="text" value="{{ old('weight') }}"  name="weight" required style="direction: rtl ;float: right" placeholder=" الوزن">
					</div>
					<div class="row cf">
						<label>     الطول     </label>
						<input type="text" value="{{ old('height') }}"  name="height" required style="direction: rtl ;float: right" placeholder="الطول ">
					</div>

					<div class="row cf">
						<label>     لون البشره      </label>
						<select name="skin_color" id="color" value="{{ old('skin_color') }}" class="required gender" required>
							<option value="" selected="selected">  لون البشره  ...</option>
							<option value="white">ابيض </option>
							<option value="black">اسود </option>
							<option value="dark_brown">قمحي غامق </option>
							<option value="brown">قمحي </option>
							<option value="7enty_dark">حنطي اسود </option>
							<option value="7enty_white">حنطي ابيض </option>
						</select>
					</div>
					<div class="row cf">
						<label>     الحاله البدنيه       </label>
						<select name="physique" id="body" value="{{ old('physique') }}" class="required gender" required>
							<option value="" selected="selected">   اختر الحاله  ...</option>
							<option value="thin">نحيف </option>
							<option value="medium_thin">متوسط </option>
							<option value="sporty">رياضي </option>
							<option value="fat">سمين </option>
							<option value="huge">ضخم </option>
						</select>
					</div>
					<div class="row cf">
						<button class="header" type="submit"> انضم مجانا<span>3/3</span></button>
					</div>
				</div>



			</fieldset>
		</form>

	</div>




	<div class="copy" style="background-color: #27aae1">
		<p>&copy; 2018. All Rights Reserved | Design by <a href="http://gtsaw.com/">Gtsaw</a> </p>
	</div>
</div>


<!--//footer-->




<script>

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