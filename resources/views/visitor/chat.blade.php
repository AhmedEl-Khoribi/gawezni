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
<link href="//cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
	@import url('https://fonts.googleapis.com/css?family=Raleway:300,400,600');
@charset "UTF-8";

body {
  background-color: #354351;
  color: #636b6f;
  font-family: 'Open Sans', sans-serif;
  font-weight: 100;
  font-size: 13px;
}

body h1, body h2, body em { color: #eee; font-size: 30px; text-align: center; margin: 20px 0 0 0; -webkit-font-smoothing: antialiased; text-shadow: 0px 1px #000; }

h3 { font-size: 100%; }

 body,  { height: 80%; margin: 0; overflow: hidden; padding: 0; position: absolute; width: 100%;  }
	#chat{
		height: 100%
	}
	#container {
		height: 60vh
	}

#app-wrapper {
  width: 100%;
  height: 100%;
  position: relative;
  z-index: 1;
}

#app {
  position: relative;
  border-radius: 2px;
  overflow: hidden;
  margin: 0 auto;
  -webkit-transform-origin: center center 0;
          transform-origin: center center 0;
  width: 80%;
  height: calc(100% - 60px);
  top: 30px;
  max-width: 1200px;
  box-shadow: 0 0px 40px 10px rgba(0, 0, 0, 0.15);
  -webkit-box-shadow: 0 0px 40px 10px rgba(0, 0, 0, 0.15);
  display: flex;
  display: -webkit-flex;
  transition: all 0.2s ease-in-out; -webkit-transition: all 0.2s ease-in-out;
  z-index: 2;
}

#app input:focus,
#app button:focus,
#app select:focus {
  outline: -webkit-focus-ring-color auto 0px;
}

#menu-wrapper {
  position: relative;
  width: 80px;
  height: 100%;
  background-color: #DDDDDD;
  background: -webkit-gradient(linear, left top, left bottom, from(#24313f), to(#314459));
  background: linear-gradient(to bottom, #24313f 0%, #314459 100%);       transition: all 0.2s ease-in-out; -webkit-transition: all 0.2s ease-in-out;
}

#content-wrapper {
  position: relative;
  width: 100%;
  height: 100%;
  display: flex;
  display: -webkit-flex;
}

#side {
  position: relative;
  width: 240px;
  min-width: 240px;
  height: 100%;
  background-color: #D1D1D1;
  
  box-shadow: 0 0px 40px 10px rgba(0, 0, 0, 0.05);
  -webkit-box-shadow: 0 0px 40px 10px rgba(0, 0, 0, 0.05);
  
  transition: all 0.2s ease-in-out; -webkit-transition: all 0.2s ease-in-out;
}

#main {
  position: relative;
  width: 80%;
  height: 100%;
  background-color: #F1F1F1;
  transition: all 0.2s ease-in-out; -webkit-transition: all 0.2s ease-in-out;
}

.pane {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  display: -webkit-flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}

#menu-wrapper.open { width: 180px; }

#menu-wrapper a { position: relative; display: flex; align-items: center; width: 100%; height: 100%; color: #FFF; text-decoration: none; padding: 15px; }
#menu-wrapper a i { position: relative; left: 14px; transition: all 0.2s ease-in-out, border 0s; -webkit-transition: all 0.2s ease-in-out, border 0s; }
#menu-wrapper.open a i { left: 8px; }


#menu-wrapper a:hover { background-color: #5F98FC; }
#menu-wrapper li:hover { opacity: 1; }
#menu-wrapper .toggle-menu { position: absolute;  width: 100%; height: 38px; bottom: 0px; }
#menu-wrapper .toggle-menu i { transform: rotate(180deg); transition: all 0.2s ease-in-out, border 0s; -webkit-transition: all 0.2s ease-in-out, border 0s; }
#menu-wrapper.open .toggle-menu i { transform: rotate(0deg); }

#menu-wrapper a span { position: relative; left: 14px; text-transform: uppercase; transition: all 0.2s ease-in-out 0.1s; -webkit-transition: all 0.2s ease-in-out 0.1s; font-size: 60%; opacity: 0; }
#menu-wrapper.open span { left: 24px; opacity: 1; }

#menu { margin: 0; -webkit-padding-start: 0px; }

#menu li { position: relative; width: 100%; height: 56px; padding: 0px; font-size: 160%; color: #FFF; opacity: 0.8; margin-bottom: 1px; }
#menu li:first-child { height: 68px; }
#menu li.active { opacity: 1; }
#menu li.active:before { position: absolute; content: ''; width: 100%; height: 100%; border-left: solid 3px #5F98FC; }
#menu li.logout { font-size: 120%; }
#menu li.logout a i { padding-left: 2px; }

#user-infos { width: 100%; padding: 14px; background-color: #D3D3D3; direction: rtl }

#user-infos .gravatar {
  width: 41px;
  height: 41px;
  border-radius: 50%;
  -webkit-border-radius: 50%;
  display: inline-block;
  background-size: cover;
  margin-right: 15px;
  float: left;
}

#user-infos .username {
  color: #24313F;
  font-size: 16px;
}

#user-infos .username .status {
  font-size: 11px;
  color: #27aae1;
}

#channel-list { position: relative; width: 100%; height: 72px; -webkit-padding-start: 0px; margin: 0; direction: rtl}
#channel-list li { background-color: #DDD; display: flex; padding: 10px; margin-bottom: 1px; cursor: hand; cursor: pointer; flex-wrap: wrap; }
#channel-list li.active { background-color: #eaeaea; }
#channel-list li .fa { padding: 4px; }
#channel-list li .username { color: #111; }
#channel-list li.active .username { font-weight: bold; }
#channel-list li > * { flex-basis: 1 1; }
#channel-list li .time { font-size: 82%; padding-right:30px; }

.channel { position: relative; width: 100%; height: 100%; display: flex; display: -webkit-flex; }
.channel .dialog { position: relative; width: 100%; height: 100%; background-color: #eaeaea; padding: 0; }
.channel .infos { position: absolute; width: 40%; right: -40%; height: 100%; }
.channel .infos .icon { left: -40px; top: 20px; }

.channel.opened .infos.pane { right: 0; background-color: #D1D1D1; }
.channel.opened .dialog.pane { width: 60%; }
.channel.opened .infos .icon { width: 20px; height: 20px; right: 8px; left: inherit; border: transparent; z-index: 1; }

.channel .dialog .dialog-head { position: relative; height: 68px; background-color: transparent; display: flex; display: -webkit-flex; justify-content: space-between; }
.channel .dialog .dialog-head .action-back, .channel .dialog .dialog-head .action-right { padding: 0 15px; cursor: hand; cursor: pointer; }
.channel .dialog .dialog-head > div { display: flex; display: -webkit-flex; flex-direction: column; justify-content: space-around; text-align: center; }

@media screen and (max-width: 1280px) {
  #app { width: 90%; height: 90%; flex-direction: column-reverse; }
  #menu-wrapper { flex-direction: row; width: 100%; height: 48px; }
  #menu-wrapper.open { width: 100%; }
  #menu-wrapper.open #menu { width: auto; }
  #menu { display: flex; display: -webkit-flex; }
  #menu li { width: auto; height: 45px !important; border-right: solid 0px #2E4053; }
  #menu li span { opacity: 1; left: 30px; padding-right: 50px; }
  #menu li.logout { position: absolute; right: 0px; border-left: solid 0px #2E4053; }
  #menu-wrapper .toggle-menu { display: none; }
  #menu li.active:before { border-left: 0 none; border-bottom: solid 3px #5F98FC; }
}

@media screen and (max-width: 1280px) {
  #app { width: 100%; height: 100%; top: 0px; border-radius: 0; }
}

@media screen and (max-width: 768px) {
  .infos.pane { width: 100%; right: -100%; }
  .channel.opened .dialog.pane { width: 100%; }
  #menu li.logout a i { left: 0px }
  #menu li.logout a span { display: none; }
}

#main .channel #action-back { display: none; }
@media screen and (max-width: 512px) {
  #menu-wrapper #menu { justify-content: space-around; }
  #menu-wrapper #menu li:first-child a i { left: 2px; }
  #menu-wrapper #menu li a i { left: 0px; }
  #menu-wrapper #menu li span { display: none; }
  #menu-wrapper #menu li.logout { width: 42px; }
  
  #content-wrapper #main { position: absolute; width: 100%; left: 0px; }
  #main .channel #action-back { display: block; }
  #side { left: -240px; z-index: 1; }
  #content-wrapper.opened #side { left: 0; }
  #content-wrapper.opened #main { filter: blur(2px); }
}


#messages { width: 100%; height: calc(100% - 132px); list-style-type: none; margin: 0; padding: 0; padding-bottom: 10px; display: flex; display: -webkit-flex; justify-content: flex-end; flex-direction: column; }



#send-message { padding: 0px; position: absolute; bottom: 0; width: 100%; background-color: #FFF; }
#send-message form { position: relative; width: 100%; display: flex; display: -webkit-flex; }
#send-message form input { border: 0; padding: 10px; width: 100%; margin-right: .5%; }
#send-message form button { border: none; padding: 10px; color: #FFF; background-color: transparent; cursor: hand; cursor: pointer; }
#send-message form button:focus, #send-message form button:active, #send-message form button:hover { background-color: transparent; } 
#send-message form button:hover svg path { opacity: 0.8; fill: #548dcb; }

li {
  padding: 5px 10px;
  display: flex;
  display: -webkit-flex;
}

li .message {
  background: #FFF;
  color: #333;
  font-size: 15px;
  margin-left: 10px;
  display: inline-block;
  max-width: calc(100% - 100px);
  white-space: normal;
}

li .message .timestamp {
  color: #BBB;
  font-size: 70%;
  padding-left: 20px;
  padding-top: 6px;
  display: inline-block;
}

li .picture {
  width: 51px;
  height: 51px;
  min-width: 51px; min-height: 51px;
  border-radius: 50%;
  -webkit-border-radius: 50%;
  display: inline-block;
  background-size: cover;
  float: left;
  margin-right: 0px;
}

li.from + li.from .picture, li.from + li.from .message:before {
  visibility: hidden;
}

li.to {
  flex-direction: row-reverse;
}

li.to .message {
  margin-left: 0px;
  background: #548dcb;
  color: #FFFFFF;
  margin-right: 10px;
}

li.to .message .timestamp {
  color: #EDEDED;
}

li.to .message:before {
  border-right-color: transparent;
  border-left-color: #548dcb;
  right: -12px;
  left: auto;
}

li.to .picture {
  margin-right: 0;
  margin-left: 8px;
  float: right;
}

li.to + li.to .picture, li.to + li.to .message:before {
  visibility: hidden;
}

li.predictive {
  justify-content: center;
}

li.predictive .message {
  border: 0 none;
  padding-left: 0px;
  -webkit-box-shadow: none;
  box-shadow: none;
  background-color: transparent;
  font-style: italic;
  font-weight: lighter;
}

li.predictive .whisper {
  width: 51px;
  height: 51px;
  padding: 15px 0px 15px 15px;
  display: inline-block;
  float: left;
  margin-right: 0px;
}

li.predictive .message .value span {
  font-weight: bold;
}

li.predictive .message:before {
  display: none;
}

.bubble {
  position: relative;
  border-radius: 5px;
  box-shadow: 0 0px 12px 4px rgba(150, 150, 150, 0.17);
  background-color: #FFFFFF;
  padding: 16px;
  position: relative;
}

.to .bubble {
  box-shadow: 0 0px 12px 4px rgba(150, 150, 150, 0.27);
}

.bubble:before {
  content: " ";
  position: absolute;
  left: -12px;
  top: 50%;
  transform: translateY(-50%);
  border: 6px transparent solid;
  border-right-color: #FFF;
}

#customer-infos { position: relative; width: 100%; padding: 14px; background-color: #eaeaea;  background: -webkit-gradient(linear, left top, left bottom, from(#24313f), to(#314459));
  background: linear-gradient(to bottom, #24313f 0%, #314459 100%);   }

#customer-infos .gravatar {
  width: 41px;
  height: 41px;
  border-radius: 50%;
  -webkit-border-radius: 50%;
  display: inline-block;
  background-size: cover;
  margin-right: 15px;
  float: left;
}

#customer-infos .username {
  color: #FFF;
  font-size: 16px;
}

#customer-infos .username .status {
  font-size: 11px;
  color: #27aae1;
}

#customer-infos .username ul { font-size: 76%; -webkit-padding-start: 46px;}

.badge { padding: 4px; }
.badge.badge-warning { font-weight: normal; }
	</style>
</head>
<body >
	<!--start-home-->


  @include('visitor.template.nav')


	<br>
	<br>
	
	
	
	
	
	
	<div id="container" class="container-fluid">
  <div id="chat">
    <div id="app-wrapper">
      <div id="app">
        <div id="content-wrapper">
          <div id="side" class="pane">
            <div id="user-infos">
              <div class="gravatar" style="background-image: url({{ asset('files/users/'. Auth::guard('client')->user()->image ) }});"></div>
              <div class="username">{{ Auth::guard('client')->user()->fname . ' ' . Auth::guard('client')->user()->lname }}
                <div class="status">متصل</div>
              </div>
            </div>

            <ul id="channel-list">
                @foreach($Clients as $client)
                    <a href="{{ url('/client/message/'. $client->id) }}">
                        <li class="active">
                            <i class="fa fa-comment" aria-hidden="true" style="color: #f067ae"></i>
                            <span class="username"> {{ \App\Client::find($client->sender_id)->fname . ' ' . \App\Client::find($client->sender_id)->lname }} </span> <br>
                            <div class="time">{{ Auth::guard('client')->user()->created_at->diffForHumans() }}</div>
                        </li>
                    </a>
                @endforeach
            </ul>
          </div>

          <div id="main" class="pane">
            <div class="channel closed">
              <div class="dialog pane">
                <div class="dialog-head">
                  <div class="action-back">
                    <div id="action-back">
                      <i class="fa fa-arrow-left"></i>
                    </div>
                  </div>
                  <div class="title"><span><h3></h3><div class="state" style="display: none;"><i></i></div></span></div>
                  <div class="action-right"></div>
                </div>
                <ul id="messages">
                    @foreach($ClientChats as $chat)
                        @if($chat->sender_id ==  Auth::guard('client')->user()->id)
                            <li  class="from message">
                                <div class="picture" style="background-image: url({{ asset('files/users/'. Auth::guard('client')->user()->image ) }});"></div>
                                <div class="message bubble"><span class="vaœlue">{{ $chat->body }}</span> <span class="timestamp">{{ $chat->created_at->diffForHumans() }}</span></div>
                            </li>
                        @else
                            <li class="message to">
                                <div class="picture" style="background-image: url({{ asset('files/users/'. \App\Client::find($client->sender_id)->image ) }});"></div>
                                <div class="message bubble"><span class="vaœlue">{{ $chat->body }}</span> <span class="timestamp">{{ $chat->created_at->diffForHumans() }}</span></div>
                            </li>
                        @endif
                    @endforeach

                        <?php
                            if(Auth::guard('client')->user()->id !== $ClientChats[0]->sender_id)
                            {
                                $recev = $ClientChats[0]->sender_id;
                            }
                            else
                            {
                                $recev = $ClientChats[0]->receiver_id;
                            }
                        ?>
                </ul>
                <div id="send-message">
                  <form action="{{ url('client/message') }}" method="POST" >
                      {{ csrf_field() }}
                      <input type="hidden" name="sender_id" value="{{ Auth::guard('client')->user()->id }}" >
                      <input type="hidden" name="receiver_id" value="{{ $recev }}" >
                      <input id="send" autocomplete="off" maxlength="510" name="body" type="text">
                      <button class="btn btn-success">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                              <path opacity=".4" d="M1.101 21.757L23.8 12.028 1.101 2.3l.011 7.912 13.623 1.816-13.623 1.817-.011 7.912z"></path>
                          </svg>
                      </button>
                  </form>
                </div>
              </div>
              <div class="infos pane">

                <div id="customer-infos">
                  <div class="gravatar" style="background-image: url('https://secure.gravatar.com/avatar/54a10b09b48e5cfaf1ac0bf92c7d32f2?size=400');"></div>
                  <div class="username">Jean-DréDré</div>
                  <div class="badge badge-warning">17 septembre 1991</div>
                </div>
                <ul>
                  <li>Vierge</li>
                  <li>Intéressé par les bolides</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




    @include('visitor.template.footer')



<script src="/visitor/js/jquery.min.js"> </script>
<!--/script-->
<script type="text/javascript" src="/visitor/js/move-top.js"></script>
<script type="text/javascript" src="/visitor/js/easing.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
<script src="//cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script>
	
	$(".toggle").click(function(){
  $(".navcollaps").toggleClass("show");
});
	</script>
	<script>
	$(document).ready( function () {
    $('#myTable').DataTable();
} );
	</script>
			
							
								
									<script>
	
	(function($) {
  $('.channel .infos .icon').click(function() {
    $(this).parents('.channel').toggleClass('closed opened');
  });
  
  $('#menu-wrapper .toggle-menu').click(function() {
    $('#menu-wrapper').toggleClass('open');
  });
  
  $('.action-back').click(function(e) {
    $('#content-wrapper').toggleClass('opened');
    e.stopImmediatePropagation();
  });
  
  $(document).on('click', '#content-wrapper.opened #main', function(e) {
    $('.action-back').click();
  });
  
  // CHAT
  $('#channel-list li').click(function() {
    $(this).addClass('active').siblings().removeClass('active');
  });
})(jQuery);
	</script>	
								


</body>
</html>