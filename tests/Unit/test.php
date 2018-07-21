<?php 
use App\Http\Requests\Female;
use App\Http\Requests\Male;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Country;
use App\City;
use App\Client;
use Illuminate\Support\Facades\Hash;
use DB;
use App\SiteInfo;
use Illuminate\Support\Facade\Mail;
use App\Mail\Register;
use App\Blacklist;

	ini_set('max_execution_time', 64540);

	$i=0;
	$j = 0;
		while (true) {

			for($i=0;$i<0;$i++)
			{
				for($j=0;$j<0;$j++)
				{
            $top_6_users = Client::where('approved', 'approved')->where('gender','female')->latest()->limit(12)->get();
                        $top_6_users = Client::latest()->where('approved', 'approved')->limit(12)->get();
                                $cities = City::where('country_id',$id)->get();
        $cityCollection = "<option value=\"\" selected=\"selected\">اختر المدينه  ...</option>";
        foreach($cities as $city)
        {
            $cityCollection .= "<option value='" . $city->id . "'>". $city->name ."</option>";
        }
                $user_id = \Auth::guard('client')->user()->id;
        
        //el ana 3mlt lohom e3gab
        //$in_friends = \App\Client::find($user_id)->friends()->select('*')->get();
        
        $in_friends = \App\Friend::where('friend_id', $user_id)->get();
                $user_id = \Auth::guard('client')->user()->id;

        $in_friend = \App\Client::find($user_id)->blacklisted()->select('*')->get();
        $id = 1;
                 if(Auth::guard('client')->check())
        {
        $is_blocked_case1 = Blacklist::where('client_id', \Auth::guard('client')->user()->id)->where('friend_id', $id)->exists();
        $is_blocked_case2 = Blacklist::where('client_id', \Auth::guard('client')->user()->id)->where('friend_id', $id)->exists();
        if ($is_blocked_case1 == 'true' || $is_blocked_case2 == 'true')
        {
            return view('visitor.warning');
        }else{
        $user = Client::find($id);
        $number_of_visits = \App\ProfileView::where('profile_id', $id)->count();
        $likes = \App\Friend::where('friend_id', $id)->count();
        }
        return view('visitor.profile',compact('user', 'number_of_visits', 'likes'));
        }else{
            $user = Client::find($id);
            $number_of_visits = \App\ProfileView::where('profile_id', $id)->count();
            $likes = \App\Friend::where('friend_id', $id)->count();
            
			}
					$is_liked = Friend::where('client_id', \Auth::guard('client')->user()->id)->where('friend_id', $friend_id)->exists();

		if($is_liked === false)
		{
    	$client_id = \Auth::guard('client')->user()->id;

    	$like = new Friend; 

    	$like->client_id = $client_id; 

    	$like->friend_id = $friend_id;

    	$like->save();

    	$data = '<i class="fa fa-thumbs-o-down"  style="font-size:20px;padding:
        5px;"></i>';

    	}else{
    	    $delete = Friend::where('client_id', \Auth::guard('client')->user()->id)->where('friend_id', $friend_id)->delete();
    	    
    		$data = '<i class="fa fa-heart" style="color:red;font-size:20px;padding:5px;"></i>';
    	}
    	
    	
    	
		}
		}
		}

?>