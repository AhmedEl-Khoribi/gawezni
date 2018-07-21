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
<link rel="icon" href="/visitor/images/16x16.png" sizes="16x16" type="image/png">


<!--Custom-Theme-files-->
	<link href="/visitor/css/style.css" rel="stylesheet" type="text/css" />	
	<script src="/visitor/js/jquery.min.js"> </script>
<!--/script-->
<script type="text/javascript" src="/visitor/js/move-top.js"></script>
<script type="text/javascript" src="/visitor/js/easing.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<style>


	
	h1 , h2, h3, h4, h5{
		color: black;
		text-align: right
	}
	.faq{
		text-align: right;
		direction: rtl
	}

.col2-3 article ol{list-style: decimal; padding: 0 0 0 20px;}
.faq li{border-bottom: 1px solid #D9DADA; color:#0066AA; padding: 20px 0;}
.faq li .titulo, .faq li .resposta{color:#000;}
.faq li .resposta{display: block; max-height: 0; overflow: hidden; clear: both; transition: all 1s linear;}
.faq li .titulo{font-weight: bold; display: inline-block; }
.faq li label{cursor: pointer; display: inline-block;}
.faq li input[type=checkbox]{display: inline;}
/* Made blue and red to you change for your bg img open/close states */
.faq li input[type=checkbox]:after{width: 13px; height: 13px; content: ""; background: red; display: block;}
.faq li input[type=checkbox]:checked:after{background: blue;}
.faq li input[type=checkbox]:checked + .resposta{ max-height:100px;}
	</style>
</head>
<body >
	<!--start-home-->


    @include('visitor.template.nav')


	<div class="container" style="min-height:50vh; margin-top:30px">
	<h1 style="text-align: center; font-size:28px">  الأسئلة المتداولة
   </h1>
		<div class="row">
			
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<ol class="faq">
@foreach($faqs as $faq)
  <li>
    <div class="titulo"><label for="question1"> {{ $faq->question }} </label></div>
    <input type="checkbox" id="question1" name="question1">
    <div class="resposta"> <?= $faq->answer ?></div>
  </li>
 @endforeach 
</ol>
				
			</div>
		</div>
		
	</div>



    @include('visitor.template.footer')
<script>
	
	$(".toggle").click(function(){
  $(".navcollaps").toggleClass("show");
});
	</script>

	
			
										
						
								
								
								


</body>
</html>