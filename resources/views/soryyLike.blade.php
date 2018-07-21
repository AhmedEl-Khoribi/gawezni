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


.content-area {
  min-width: 100%;
  background-color: #FFFFFF;
	margin-top: 200px;
	min-height:30vh
}


.content-section {
  min-height: 100px;
  padding: 0;
  margin: 0;
}

.content-block {
  text-align: center;
  color: #000000;
	padding: 50px;
  background-color: #FFFFFF;
  font-family: Roboto, sans-serif;
  box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 30px, rgba(0, 0, 0, 0.23) 0px 6px 10px;
  border-radius: 2px;
  min-height: 100px;
  margin-bottom: 3%;
	direction: rtl
}
</style>
</head>
<body >
  @include('visitor.template.nav')

<div class="content-area container"> 
<!--main content area--> 
  
  <!-- full length row -->
  <div class="row offset-md-1">
    <div class="content-section col-md-11 col-sm-12 container"> 
      <!-- CONTENT --> 
      <div class="content-block col-xs-12 col-sm-12">    لا يوجد معجبين عندك حتي الان !! </div>      
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