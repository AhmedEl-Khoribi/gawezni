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

h1 {
    font-size:28px
}
	
	h1 , h2, h3, h4, h5{
		color: black;
		text-align: right
	}
	.list{
		list-style: square ;
		direction: rtl;
		text-align: right;
		padding-right: 50px;
		padding-top: 20px
	}
	.list li{
		padding: 5px
	}
	</style>
</head>
<body >
	<!--start-home-->


    @include('visitor.template.nav')




	<div class="container" style="min-height:48vh;margin-top:50px">
	<h1 style="text-align: center ; "> نصائح واقتراحات </h1>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h5>لتسهيل التواصل والتعارف بين المشتركين تضع إدارة الموقع بعض النصائح والاقتراحات الهادفة بين يديك للوصول إلى مبتغاك.</h5>
		</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
<ul class="list">
		<?= $advices; ?>	
</ul>
				
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