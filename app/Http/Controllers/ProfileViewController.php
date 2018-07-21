<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProfileView;
use App\Client;

class ProfileViewController extends Controller
{
	public function __construct()
    {
        $this->middleware('client');
    }

    public function addView($id)
    {
    	$user = Client::find($id);

    	$is_viewed = ProfileView::where('profile_id', $id)->where('client_id', \Auth::guard('client')->user()->id)->exists();

    	if ($is_viewed === true) 
    	{
    		$data = 'added already';
    	}else{
    		$profileViewModel= new ProfileView;

            $profileViewModel->client_id = \Auth::guard('client')->user()->id;

            $profileViewModel->profile_id = $id;

            $profileViewModel->save();

    		$data = 'Done!';
    	}

    	return response()->Json(['message' => $data]);

    }

    public function visits()
    {
        $profile_id = \Auth::guard('client')->user()->id;

        $number_of_visits = ProfileView::where('profile_id', $profile_id)->count();

        $all_viewers = ProfileView::where('profile_id', $profile_id)->get();

        $number_of_clients = Client::count();
        if($number_of_visits === 0)
        {
            return view('sorryView');
        }
        return view('visitor.stats', compact('number_of_visits', 'all_viewers', 'number_of_clients'));

    }
}
