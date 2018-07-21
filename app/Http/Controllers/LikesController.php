<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Friend;
use App\Blacklist;

class LikesController extends Controller
{
	public function __construct()
    {
        $this->middleware('client');
    }

    public function addLike($friend_id)
    {
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

    	return response()->Json(['message' => $data]);

    }

    public function addBlock($friend_id)
    {
		$is_blocked = Blacklist::where('client_id', \Auth::guard('client')->user()->id)->where('friend_id', $friend_id)->exists();

		if($is_blocked === false)
		{
    	$client_id = \Auth::guard('client')->user()->id;

    	$like = new Blacklist; 

    	$like->client_id = $client_id; 

    	$like->friend_id = $friend_id;

    	$like->save();

    	session()->flash('message', 'تم حظر العضو بنجاح');

    	return redirect('/blocked');

    	}else{
    		session()->flash('message', 'wla a7na hanhazar?');

    		return redirect('/client/home');
    	}
    }

    public function cancelBlock($id)
    {
    	$is_blocked = Blacklist::where('id', $id)->exists();
		if($is_blocked === false)
		{
		
		session()->flash('message', 'wla a7na hanhazar?');
    	
    	return redirect('/blocked');

    	}else{
    		Blacklist::where('id', $id)->delete();

    		session()->flash('message', 'تم فك حظر العضو');

    		return redirect('/blocked');
    	}
    }
}
