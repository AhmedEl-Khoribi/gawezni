@include('visitor.template.startpage')
<body >
	<!--start-home-->


    @include('visitor.template.nav')


	<br>
	<br>
	
	
	
	<!-- Profile Page , Modal -->
<div class="page-header"></div>
<div class="profile-container">
  <div class="row">
  <div class="col-md-4">
    <img src="https://image.ibb.co/jxGOma/image.jpg" class="img-responsive" width="100" height="100" />
  </div>

  <div class="col-md-8 profile-info" >
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

        @include('visitor.template.footer')

		<!--//footer-->
			

        @include('visitor.template.endpage')

</body>
</html>