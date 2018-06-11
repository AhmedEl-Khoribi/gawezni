@extends('admin.master')
@section('content')

<style type="text/css">
	body{
  background-image: url('http://urbanfragment.files.wordpress.com/2012/10/mount-fuji-highest-mountain-in-japan-osx-lion-wallpaper.jpg');
	background-size:100% 100%;
	font-family:"Open Sans", sans-serif;
}
a.nostyle{
	color:inherit;
	text-decoration:none;
	padding:0;
	margin:0;
}
div.portfoliocard{
	position:relative;
	height:900px;
	width:auto;
	background:rgba(255,255,255,1);
	border:1px solid rgba(0,0,0,0.7);
	box-shadow:0px -1px 3px rgba(0,0,0,0.1),
				0px 2px 6px rgba(0,0,0,0.5);
	border-radius:6px;
	margin:0% auto;
	overflow:hidden;
	z-index:100;
}
div.portfoliocard div.coverphoto{
	width:100%;
	height:120px;
	background:url('http://farm8.staticflickr.com/7149/6484148411_baf8d2e934_z.jpg');
	background-position:center center;
	border-top-right-radius:5px;
	border-top-left-radius:5px;
	border-bottom:1px solid rgba(0,0,0,0.1);
	box-shadow:inset 0px 3px 20px rgba(255,255,255,0.3),
				1px 0px 2px rgba(255,255,255,0.7);
	z-index:99;
}
div.portfoliocard div.left_col, div.portfoliocard div.right_col{
	float:left;
	height:340px;
}
div.portfoliocard div.left_col{
	width:40%;
	padding-top:110px;
	box-sizing:border-box;
}
div.portfoliocard div.right_col{
	width:60%;
	background:rgba(245,245,245,1);
	border-left:1px solid rgba(230,230,230,1);
	box-shadow:inset 0px 1px 1px rgba(255,255,255,0.7);
	margin-left:-1px;
	border-bottom-right-radius:5px;
}
div.portfoliocard div.profile_picture{
	width:110px;
	height:110px;
	background:rgba(255,255,255,1);
	position:absolute;
	top:65px;
	left:40px;
	border-radius:100%;
	background-image: url('http://cache.spreadshirt.net/Public/Common/images/profile-pic-placeholder_130x130.png');
	background-size:100% 100%;
	padding:7px;
	border:4px solid rgba(255,255,255,1)
}
div.portfoliocard div.right_col h2.name{
	font-size:30px;
	font-weight:300;
	color: rgba(30,30,30,1);
	padding:0;
	margin:20px 10px 0px 30px;
}
div.portfoliocard div.right_col h3.location{
	font-size:15px;
	font-weight:300;
	color:rgba(170,170,170,1);
	padding:0;
	margin:-5px 10px 10px 30px;
}
div.portfoliocard ul.contact_information{
	margin-top:20px;
	padding-left:30px;
	list-style-type:none;
}
div.portfoliocard ul.contact_information li{
	height:25px;
	width:180px;
	line-height:25px;
	font-weight:300;
	font-size:15px;
	color:rgba(140,140,140,1);
	text-shadow:1px 1px 1px rgba(255,255,255,0.8);
	padding:5px 0px;
	background-repeat:no-repeat;
	background-size:18px 18px;
	border-bottom:1px solid rgba(0,0,0,0.1);
	box-shadow:0px 1px 1px rgba(255,255,255,0.6);
	cursor:default;
}
div.portfoliocard ul.contact_information li:before{
	content:"";
	width:25px;
	height:25px;
	display:block;
	float:left;
	background-position:center;
	background-size:18px 18px;
	background-repeat:no-repeat;
	margin-right:5px;
	opacity:0.7;
}
div.portfoliocard ul.contact_information li:hover:before{
	opacity:1;
}
div.portfoliocard ul.contact_information li.work:before{
	background-image: url('http://schulzmarcel.de/x/icons/case_24.png');
}
div.portfoliocard ul.contact_information li.website:before{
	background-image: url('http://schulzmarcel.de/x/icons/globe_24.png');
}
div.portfoliocard ul.contact_information li.mail:before{
	background-image: url('http://schulzmarcel.de/x/icons/paper_plane_24.png');
}
div.portfoliocard ul.contact_information li.phone:before{
	background-image: url('http://schulzmarcel.de/x/icons/phone_24.png');
}
div.portfoliocard ul.contact_information li.resume:before{
	background-image: url('http://schulzmarcel.de/x/icons/inbox_24.png');
}
div.portfoliocard div.followers, div.portfoliocard div.following{
	margin:15px 0px 0px 35px;
	font-weight:300;
	font-size:16px;
	color:rgba(30,30,30,1);
}
div.portfoliocard div.follow_count{
	font-weight:400;
	font-size:25px;
	color:rgba(140,140,140,1);
}

</style>
<div class="portfoliocard">
		<div class="coverphoto"></div>
		<div class="profile_picture"></div>
		<a href="/admin/edit_user/{{ $user->id }}"><button class="btn btn-success" style="float: right; margin-right: 15px" >Edit</button></a>
		<div class="left_col">
			<div class="row">
			<div class="col-sm-6">
			<div class="following">
				<div class="follow_count"><i class="fa fa-envelope"></i> Email</div>
				{{ $user->email }}
			</div>
			<div class="following">
				<div class="follow_count"><i class="fa fa-phone"></i> Phone</div>
				{{ $user->phone }}
			</div>
			<div class="followers">
				<div class="follow_count"><i class="fa fa-venus-mars"></i> Gender</div>
				{{ $user->gender }}
			</div>
			<div class="following">
				<div class="follow_count"><i class="fa fa-user"></i> Username</div>
				{{ $user->username }}
			</div>
			<div class="following">
				<div class="follow_count"><i class="fa fa-calendar-check-o"></i> Date Of Birth</div>
				{{ $user->dob }}
			</div>
			
			</div>
			<div class="col-sm-6">
			<div class="followers">
				<div class="follow_count"><i class="fa fa-group"></i> Social Status</div>
				{{ $user->social_status }}
			</div>
			<div class="followers">
				<div class="follow_count"><i class="fa fa-female"></i> No. of Wives</div>
				{{ $user->marraige_status }}
			</div>
			<div class="followers">
				<div class="follow_count"><i class="fa fa-angle-right"></i> No. Of Children</div>
				{{ $user->children_number }}
			</div>
			</div>
			<div class="col-sm-6">
			<div class="followers">
				<div class="follow_count"><i class="fa fa-angle-right"></i> Weight</div>
				{{ $user->weight }}
			</div>
			<div class="followers">
				<div class="follow_count"><i class="fa fa-angle-right"></i> Height</div>
				{{ $user->height }}
			</div>
			<div class="followers">
				<div class="follow_count"><i class="fa fa-user"></i> Skin Color</div>
				{{ $user->skin_color }}
			</div>
			</div>
			<div class="col-sm-6">
				<div class="followers">
					<div class="follow_count"><i class="fa fa-university"></i> Education</div>
					{{ $user->education }}
				</div>
				<div class="followers">
					<div class="follow_count"><i class="fa fa-smile-o"></i> Physical Fitness</div>
					{{ $user->physique }}
				</div>
				<div class="followers">
					<div class="follow_count"><i class="fa fa-heartbeat"></i> Health Details</div>
					{{ $user->health_details }}
				</div>
			</div>
			</div>
		</div>
		<div>
			<h2 class="name">{{ $user->fname }} {{ $user->lname }} ({{ $user->approved }})</h2>
			<h3 class="location">{{ $user->city->name }}, {{ $user->city->country->name }}</h3>
		</div>
		<div class="row">
			<div class="col-sm-3">
				<div class="followers">
					<div class="follow_count"><i class="fa fa-bar-chart"></i> Career Field</div>
					{{ $user->career_field }}
				</div>
				<div class="followers">
					<div class="follow_count"><i class="fa fa-briefcase"></i> Job</div>
					{{ $user->job }}
				</div>
				<div class="followers">
					<div class="follow_count"><i class="fa fa-money"></i> Financial Status</div>
					{{ $user->financial_status }}
				</div>
				<div class="followers">
					<div class="follow_count"><i class="fa fa-eur"></i> Salary</div>
					{{ $user->salary }}
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
				  <div class="card-body">
				    <h5 class="card-title">Desciption</h5>
				    <p class="card-text"><?= $user->main_description ?></p>
				  </div>
				</div>
				<hr>
				<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
				  <div class="card-body">
				    <h5 class="card-title">Other Person Describtion</h5>
				    <p class="card-text"><?= $user->other_person_description ?></p>
				  </div>
				</div>
			</div>
		</div>
</div>

@endsection