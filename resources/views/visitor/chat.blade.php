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
<link rel="icon" href="/visitor/images/16x16.png" sizes="16x16" type="image/png">

<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
<link href="//cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

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
    .fa-minus, .fa-comments{
        color:black;
    }
</style>
</head>
<body>
	<!--start-home-->
  @include('visitor.template.nav')
	<br>
	<br>

	<!--start-home-->
<div class="container" id="wrapper">
  <div class="row">
            <div class="col-md-12">
              <!-- DIRECT CHAT -->
              <div class="box box-warning direct-chat direct-chat-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Direct Chat</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts"
                            data-widget="chat-pane-toggle">
                      <i class="fa fa-comments"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body" >
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages" id="your_div">
        @if(isset($previous_messages))              
                    @foreach($previous_messages as $message)
                    <!-- Message. Default to the left -->
                    @if($message->sender_id == \Auth::guard('client')->user()->id)
                    <div class="direct-chat-msg">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">{{ \App\Client::find($message->sender_id)->username }}</span>
                        <span class="direct-chat-timestamp pull-right">{{ $message->created_at }}</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="/files/users/{{ \App\Client::find($message->sender_id)->image }}" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        {{ $message->body }}
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    @else
                    <!-- /.direct-chat-msg -->
                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right">{{ \App\Client::find($message->sender_id)->username }}</span>
                        <span class="direct-chat-timestamp pull-left">{{ $message->created_at }}</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="/files/users/{{ \App\Client::find($message->sender_id)->image }}" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                       {{ $message->body }}
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                    @endif
                    @endforeach
        @endif
                  </div>
                  <div class="direct-chat-contacts">
                    <ul class="contacts-list">
                        @foreach($all_conversations as $conv)
                          @if($conv->client_1 == \Auth::guard('client')->user()->id)
                        <li>
                        <a href="/client/message/{{ $conv->client_2 }}">
                          <img class="contacts-list-img" src="/files/users/{{ \App\Client::find($conv->client_2)->image }}" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  {{ \App\Client::find($conv->client_2)->username }}
                                  <small class="contacts-list-date pull-right">{{ $conv->created_at }}</small>
                                </span>
                          </div>
                        </a>
                      </li>
                      @elseif($conv->client_2 == \Auth::guard('client')->user()->id)
                      <li>
                        <a href="/client/message/{{ $conv->client_1 }}">
                          <img class="contacts-list-img" src="/files/users/{{ \App\Client::find($conv->client_1)->image }}" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  {{ \App\Client::find($conv->client_1)->username }}
                                  <small class="contacts-list-date pull-right">{{ $conv->created_at }}</small>
                                </span>
                          </div>
                        </a>
                      </li>
                      @else
                      <li>لا يوجد رسايل سابقة</li>
                      @endif
                      @endforeach
                    </ul>
                  </div>
                  <!-- /.direct-chat-pane -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <form action="/client/message" method="post">
                        {{ csrf_field() }}
                        <input hidden="hidden" name="conversation_id" value="{{ $conversation_id }}">
                        <input hidden="hidden" name="receiver_id" value="{{ $id }}">
                    <div class="input-group">
                      <input type="text" name="body" placeholder="Type Message ..." class="form-control" autocomplete="off">
                      <span class="input-group-btn">
                            <button type="submit" class="btn btn-warning btn-flat">Send</button>
                          </span>
                    </div>
@if(count($errors))
    @foreach($errors->all() as $error)
    <script>
    alert("{{ $error }}");
    </script>
    @endforeach
@endif
                  </form>
                </div>
                <!-- /.box-footer-->
              </div>
              <!--/.direct-chat -->
            </div>
            <!-- /.col -->
</div>
	</div>
	
	
	
	


    @include('visitor.template.footer')



<script src="js/jquery.min.js"> </script>
<!--/script-->
<script type="text/javascript" src="/visitor/js/move-top.js"></script>
<script type="text/javascript" src="/visitor/js/easing.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
<script src="//cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/nicescroll/3.5.4/jquery.nicescroll.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
	
	$(".toggle").click(function(){
  $(".navcollaps").toggleClass("show");
});
	</script>
	<script>
var objDiv = document.getElementById("your_div");
objDiv.scrollTop = objDiv.scrollHeight;
	</script>
		<script>
	(function() {
  //scr:https://dribbble.com/shots/1818748-Appon-Chat-Widget
  var NYLM, claerResizeScroll, conf, getRandomInt, insertI, lol;

  conf = {
    cursorcolor: "#696c75",
    cursorwidth: "4px",
    cursorborder: "none"
  };

  lol = {
    cursorcolor: "#cdd2d6",
    cursorwidth: "4px",
    cursorborder: "none"
  };

  NYLM = ["Уходи дверь закрой", "У меня теперь другой", "Все для тебя", "Мне не нужен больше твой номер в книжке записной", "Владимирский централ, ветер сука", "Ты ушол, а я текла", "Ты пришол в красный день календаря", "бла бла", ")", "умри", "ой все.", "ой все.", "ой все.", "Ты говоришь ТОЧНЕЕ пишешьСя сам с собой"];

  getRandomInt = function(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
  };

  claerResizeScroll = function() {
    $("#texxt").val("");
    $(".messages").getNiceScroll(0).resize();
    return $(".messages").getNiceScroll(0).doScrollTop(999999, 999);
  };

  insertI = function() {
    var innerText, otvet;
    innerText = $.trim($("#texxt").val());
    if (innerText !== "") {
      $(".messages").append(`<li class="i"><div class="head"><span class="time">${new Date().getHours()}:${new Date().getMinutes()} AM, Today</span><span class="name"> Буль</span></div><div class="message">${innerText}</div></li>`);
      claerResizeScroll();
      return otvet = setInterval(function() {
        $(".messages").append(`<li class="friend-with-a-SVAGina"><div class="head"><span class="name">Юния  </span><span class="time">${new Date().getHours()}:${new Date().getMinutes()} AM, Today</span></div><div class="message">${NYLM[getRandomInt(0, NYLM.length - 1)]}</div></li>`);
        claerResizeScroll();
        return clearInterval(otvet);
      }, getRandomInt(2500, 500));
    }
  };

  $(document).ready(function() {
    $(".list-friends").niceScroll(conf);
    $(".messages").niceScroll(lol);
    // .doScrollTop 999999,1
    $("#texxt").keypress(function(e) {
      if (e.keyCode === 13) {
        insertI();
        return false;
      }
    });
    return $(".send").click(function() {
      return insertI();
    });
  });

}).call(this);
	
	</script>						


<!-- jQuery 3 -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="/bower_components/raphael/raphael.min.js"></script>
<script src="/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/bower_components/moment/min/moment.min.js"></script>
<script src="/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Slimscroll -->
<script src="/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
<script src="/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
<!-- page script -->
<script src="/bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable()
  })
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#country").on('change',function(){
      var id = $("#country").val();
      $.ajax({
      type: "GET",
      url: '/admin/country/city/' + id,
      data: {},
      success: function( msg ) {
        $("#cityDisplay").fadeIn(1000);
        $("#city").html(msg.message);

      },
      dataType: "json"
  });

    });

    $("#gender").on('change',function(){
       var gender = $("#gender").val();
       if(gender === 'female')
       {
        $("#marraige12").fadeOut(1000);
       }
       else
       {
        $("#marraige12").fadeIn(1000);
       }
    });

      $("#social_single").on('change',function(){
       var social_single = $("#social_single").val();
       if(social_single === 'single')
       {
        $("#numberChild").fadeOut(1000);
        $("#marraige12").fadeOut(1000);
       }
       else
       {
         $("#numberChild").fadeIn(1000);
        $("#marraige12").fadeIn(1000);
       }
    });




  });


</script>
// <script>
// setInterval(function () { autoloadpage(); }, 1000); // it will call the function autoload() after each 30 seconds. 
//         function autoloadpage() {
//             $.ajax({
//                 url: "{{ url()->current() }}",
//                 type: "GET",
//                 success: function(data) {
//                     $("div#wrapper").html(data);
//                     // here the wrapper is main div
//                 }
//             });
//         }
// </script>
</body>
</html>
</body>
</html>