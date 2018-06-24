<div class="navbar" style="direction: rtl; margin: 0 auto">
    <div class="contaier" style="margin-left:300px">

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

        <ul class="nav navcollaps" style="direction: rtl;">

            <li><a href="{{ url('/client/logout') }}"><i class="fa fa-comment"></i>الخروج</a></li>
            <li><a href="#"><i class="fa fa-comment"></i>    الدردشه</a></li>

            <li><a href="#"><i class="fa fa-envelope"></i>   الرسائل</a></li>
            <li><a href="{{ url('liked') }}"><i class="fa fa-heart"></i>     الاعجاب</a></li>
            <li><a href="#"> <i class="fa fa-users"></i>    الزيارات</a></li>
            <li><a href="#"><i class="fa fa-search"></i>    البحث</a></li>
            <li><a href="{{ url('client/home') }}"> <i class="fa fa-home"></i>     الصفحه الرئيسه</a></li>
        </ul>

        <div class="navbar-header">
            <button class="toggle"><span></span>
                <span></span>
                <span></span></button>
            <a href="" class="navbar-brand" style="margin-top: -20px"><img src="/visitor/images/logo-girl.png" width="120px"></a>
        </div><!-- navbar-header -->


    </div><!-- contaier -->
</div><!-- navbar -->