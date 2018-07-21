<footer class="footer-distributed">
<?php
    $setting = \App\SiteInfo::find(1);
?>
<style>
    .title{
  color: white;
  font-size: 30px;
  font-family: Raleway;
  text-align: center;
  
}
body{
  background: #1D2133;
}
svg path{
   cursor: pointer;
}
svg.grey path {
  fill: rgb(62 , 83 ,126) !important;
 
}
svg circle{
   cursor: pointer;
}
svg.grey circle {
  fill: rgb(62 , 83 ,126) !important;
  cursor: pointer;
}
.wrappero{
  position: fixed;
  width: 900px;
  height: 700px; 
/*   transform-origin: 470px 120px; */
  transition: all 150ms cubic-bezier(0.445, 0.05, 0.55, 0.95);
  top: 50px;
  left: calc(80% - (900px / 2));
}
.wrappero.hide2{
    bottom:0;
  margin-left:0;
  
}
.wrappero.animate {
    animation: bell 1.7s ease-in-out infinite;
}

.num{
  position: relative;
  left: 485px;
  border: #1D2133 solid 3px;
  top: 120px;
  z-index: 1;
  background: red;
 width: 35px;
  height: 35px;
  text-align: center;
  padding: 5px;
  color: white;
  font-size:15px;
  font-family: 'Raleway';
  border-radius: 50%;
}
.num.hide2{
  opacity: 0;
}
.bell {

   fill: #fff;
}
.bell.hide2{
     animation: clapper 1.7s ease-in-out infinite;

}
@keyframes bell {
  0% { transform: rotate(0); }
  20% { transform: rotate(12.5deg); }
  40% { transform: rotate(-12.5deg); }
  60% { transform: rotate(12.5deg); }
  80% { transform: rotate(2deg); }
  85%  { transform: rotate(0); }
  100% { transform: rotate(0); }
}

@keyframes clapper {
  0% { transform: translateX(10px);}
  25% { transform: translateX(60px); }
  50% { transform: translateX(-40px); }
  75% { transform: translateX(-10px); }
  100% { transform: translateX(10px); }
}
.notification{

  display: flex;
  position: fixed;
  background: rgb(62 , 83 ,126);
  width: 350px;
  height: 160px;
  top: 400px;
  border-radius: 10px;
  flex-direction: column;
  left: calc(50% - (350px / 2));
  transform: scale(1);
  transition: all 150ms cubic-bezier(0.785, 0.135, 0.15, 0.86);
}
.notification.hide2 {
  transform: scale(0);
}

.notification:before{
  content: '';
  position: absolute;
  width: 40px;
  height: 40px;
  background: rgb(62 , 83 ,126);
  transform: rotate(45deg);
  top: -8px;
  left: calc(50% - 2px);

}
.section{
  width: 100%;
  display: flex;
  align-items: center;
  flex: 1;
  border-bottom: 2px rgb(50 , 70 ,113) solid;
}
.section.four{
   border-bottom: 0px ;
}
.text{
  width: 25px;
  height: 25px;
  border-radius: 50%;
  margin-left: 80px;
  text-align: center;
    color: white
}

.rect{
  position: relative;
  left: 50px;
  width: 220px;
  height: 12px;
  border-radius: 30px;
  top: -27px;
}

    
    </style>
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
<!--Start garas -->
@if($final_complete != 100)
<div class="wrappero hide2">
<div class = "num hide2">{{ ceil($final_complete) }}%</div>

<svg width="900px" height="300px" viewBox="0 0 1280 800" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
    <path d="M590.832,448.337C589.517,447.337 587.981,446.403 587.268,445.76C585.646,444.297 584.799,442.068 583.9,439.879C583.076,437.287 583.226,434.708 583.826,432.105C598.194,409.92 613.659,388.608 615.226,353.606C614.434,313.878 623.308,291.788 636.25,278.444C646.872,265.203 661.154,255.282 678.585,248.44L678.682,248.392L678.782,248.315C678.544,246.767 678.498,245.016 678.624,243.268C678.695,242.277 678.846,241.558 678.891,240.782C678.979,239.258 679.235,237.743 679.617,236.244C683.002,222.955 697.006,213.234 710.971,213.252C725.736,213.271 740.731,223.402 743.195,238.331C743.829,242.172 743.947,245.478 743.635,248.315L743.674,248.315C743.666,249.147 743.627,249.95 743.552,250.709C764.033,255.522 778.234,269.91 790.363,287.817C800.055,309.26 808.132,332.749 805.903,365.982C807.185,397.309 827.417,409.547 831.671,424.611C823.129,420.685 814.503,416.156 805.461,414.136C798.061,410.999 790.252,409.309 782.342,408.311C774.976,406.891 767.529,405.671 759.828,405.082C750.158,403.271 740.388,402.951 730.57,403.341C735.655,405.566 740.848,407.555 746.861,408.442C750.394,408.979 753.871,409.508 756.3,409.982C760.698,410.838 765.552,412.122 769.691,413.057C773.005,413.806 776.268,414.71 779.84,415.717C783.341,416.652 786.619,417.054 789.637,418.667C792.317,419.256 794.42,421.268 796.434,422.357C798.768,423.618 800.839,425.135 802.242,427.168L804.335,430.933C805.091,433.967 805.325,437.021 804.201,440.126C803.005,442.829 801.051,444.819 798.698,446.434C798.065,446.976 797.42,447.494 796.76,447.981C793.873,451.945 782.789,456.794 765.653,460.908C763.77,461.469 761.844,461.906 759.865,462.219C742.58,465.912 720.171,468.804 694.412,469.557C642.401,471.078 599.137,456.184 590.832,448.337Z" style="fill:#fff;"/>
    <g transform="matrix(1,0,0,1,-7.83975,-8.3859)">
    
        <circle class="bell" cx="696.599" cy="475.846" r="27.99"/>
     
    </g>
    
</svg>
</div>
<div class="notification hide2">
    <div class="section one">
<!--       <div class="text one">
      </div> -->
      <div class="rect one" style="text-align: right;color: white">  عذرا, معلوماتك الشخصية غير مكتملة <br> رجاء اكمالها من <a href="/client/edit">هنا</a>
      <br>
      حتى يظهر حسابك في نتائج البحث</div>      
      </div>
</div>
<!--END Garas-->
@endif
@endif
    <div class="footer-left">
        <h3 style="direction: rtl;text-align: right">{{ $setting->site_name }}</h3>
      <p class="footer-company-about" style="direction: rtl;text-align: right" >
            <?= $setting->footer_about ?>
    </div>
    <div class="footer-center" style="direction: rtl;text-align: center" >
        <div>
            <a href="/client/contact">
            <i class="fa fa-envelope"></i>
            <p>رسائل الادارة</p>
            </a>
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
        <a href=".">
        <h3><img src="/public/site_info/{{$setting->logo}}"></h3></a>

    </div>
</footer>
<footer>
    <div class="copy">
        <p>&copy; 2018 All Rights Reserved | Design by <a href="http://gtsaw.com/">gtsaw</a> </p>
    </div>
</footer>
<script src="/visitor/js/jquery.min.js"> </script>
<script>
const $ = selector => document.querySelector(selector)
let shouldClickOnBell = false
const toggleClass = (el, className) => {
  if (el.classList.contains(className)) {
    el.classList.remove(className)
  } else {
    el.classList.add(className)
  }
}

const notification = $('.notification')
const bellSvg = $('svg')
const bellSvgPath = $('svg path')
const  wrapperHide = $('.wrappero')
const  numHide = $('.num')
const  bellHide = $('.bell')



bellSvgPath.addEventListener('click', () => {
  if (shouldClickOnBell) {
    toggleClass(wrapperHide, 'hide2')
  toggleClass(wrapperHide, 'animate')
  toggleClass(notification, 'hide2')
  toggleClass(bellSvg, 'grey')
  toggleClass(numHide, 'hide2')
  toggleClass(bellHide, 'hide2') 
  }
})

setTimeout(() => {
  numHide.classList.remove('hide2')
  bellHide.classList.add('hide2')
  wrapperHide.classList.add('animate')
  shouldClickOnBell = true
}, 1000)
    
    </script>   
<!--Start of Tawk.to Script-->
<!--<script type="text/javascript">-->
<!--var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();-->
<!--(function(){-->
<!--var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];-->
<!--s1.async=true;-->
<!--s1.src='https://embed.tawk.to/5b33438aeba8cd3125e336ff/default';-->
<!--s1.charset='UTF-8';-->
<!--s1.setAttribute('crossorigin','*');-->
<!--s0.parentNode.insertBefore(s1,s0);-->
<!--})();-->
<!--</script>-->
<!--End of Tawk.to Script-->