

<head>
     <link rel="icon" href="/visitor/images/16x16.png" sizes="16x16" type="image/png"> 
</head>

<div class="navbar" style="direction: rtl; margin: 0 auto">
<?php
    $setting = \App\SiteInfo::find(1);
?>
<style>


.drop-menu {
  position: relative;
  margin: 0 auto;
  padding: 0;
  width:140px;
  text-align:right
}
.drop-menu > a {
  position: absolute;
  z-index: 2;
  display: block;
  padding: 0 1em;
  height: 3em;
  font-weight: bold;
  text-decoration: none;
  text-align: center;
  cursor: pointer;
  border-radius: 6px;
  color: #fff;
}
.drop-menu > a:after {
  content: "";
  position: relative;
  top: -5px;
  left: -65px;
  color:white;
  font-size:20px;
  height: 0;
  width: 0;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-top: 10px solid #fff;
}
.drop-menu.active ul {
  display: block !important;
}
.drop-menu ul {
  z-index: 1;
  position: absolute;
  top: 35px;
  left: 0;
  margin: 0;
  padding: 3em 0 1em;
  /*width: 100%;*/
  list-style: none;
  background: #fff;
  border-radius: 6px;
  box-shadow: 0 2px 4px rgba(0,0,0,0.45);
  
}
.drop-menu ul li:first-child {
  border-top: 1px solid #e9e9e9;
}
.drop-menu li a {
  color: #555;
  display: block;
  padding: 8px 16px;
  cursor: pointer;
  font-size: 12px;
  text-decoration:none;
}
.drop-menu li a:hover{
  background:#155FB0;
  color: #fff;
  text-decoration: none;   
}
</style>

 <div class="navbar-header">
            <button class="toggle"><span></span>
                <span></span>
                <span></span></button>
            <a href="" class="navbar-brand"><img src="/public/site_info/{{$setting->logo}}" width="120px"></a>
        </div><!-- navbar-header -->
    <div class="contaier-fluid">
         
        <ul class="nav navcollaps" style="direction: rtl;">
        @if(Auth::guard('client')->check())
         
 <li style="padding-top:5px">
               <div class="drop-menu">   
    <a href="javascript:void(0)">  <i class="fa fa-cogs">
               </i>  بياناتي </a>
    <ul >
                  <li><a href="/client/home"> <i class="fa fa-users" style="color: black">
               </i>  {{ Auth::guard('client')->user()->fname . Auth::guard('client')->user()->lname }}</a></li>
        <li ><a  href="/client/edit"><i class="fa fa-pencil-square-o" style="color: black"></i>  تعديل البيانات</a></li>
        <li><a  href="/blocked"><i class="fa fa-ban" style="color: black"></i> قائمة الحظر </a></li>
        <li><a href="{{ url('/client/logout') }}"><i class="fa fa-frown-o" style="color: black"></i> تسجيل الخروج </a></li>
      </ul>
</div>
               </li>
              
               
             <li><a href="{{ url('/client/message') }}"><i class="fa fa-envelope"></i>   الرسائل</a></li>
            <li><a href="{{ url('liked') }}"><i class="fa fa-heart"></i>     الاعجاب</a></li>
            
              <li><a href="https://hatgwez.rocket.chat" target="_blank"><i class="fa fa-comment"></i>    الدردشه</a></li>
            <li><a href="/client/visits"> <i class="fa fa-eye"></i>    الزيارات</a></li>

      @endif
          
            <li><a href="/client/advanced_search"><i class="fa fa-search"></i>    البحث</a></li>
            <li><a href="/"> <i class="fa fa-home"></i>     الصفحه الرئيسه</a></li>
        </ul>
      


    </div><!-- contaier -->
</div><!-- navbar -->

<script>
  
  $(".toggle").click(function(){
  $(".navcollaps").toggleClass("show");
});
  </script>
  <script >
    
    ;(function() {
  function DropMenu() {}

  DropMenu.prototype = {
    init: function() {
      document.querySelector('.drop-menu ul').style.display = 'none';
      document.querySelector('.drop-menu > a').addEventListener('click', this.toggle, false);
    },
    toggle: function() {
      this.parentNode.classList.toggle('active');
    }
  };

  var dropMenu = new DropMenu();
  dropMenu.init();
})();
  </script>