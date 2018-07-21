<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\City;
use DB;

class FastSearchController extends Controller
{
    public function search(Request $request)
    {
        $errorss = array();
        
    	if(!isset($request->gender)) 
    	{
    	   $errorss[] = 'PLEASE CHOOSE GENDER';
    	}
    	
    	if(!isset($request->city_id)) 
    	{
    	    $errorss[] = 'PLEASE Choose City';
    	}
    	
    	if(!isset($request->age)) 
    	{
    	    $errorss[] = 'PLEASE Choose Age';
    	}
    	
    	$is_with_images = (isset($request->with_images)) ? 'yes' : "no";
    	$is_online = (isset($request->is_online)) ? 'yes' : "no";
    	
   		$with_images = '';
   		
   		if(empty($errorss))
   		{
        	if($is_with_images == 'yes')
        	{
        		//Variable passed to view
        		$with_images = 'yes';
        		
        		if($is_online == 'yes')
        		{
        		    $results = Client::where('gender', $request->gender)->where('online', 'online')->where('city_id', $request->city_id)->where('dob', 'like', ''. $request->age . '%')->where('approved', 'approved')->get();

    	    		return view('visitor.searchResults', compact('with_images', 'results'));

        		}else{
        		    $results = Client::where('gender', $request->gender)->where('online', 'offline')->where('city_id', $request->city_id)->where('dob', 'like', ''. $request->age . '%')->where('approved', 'approved')->get();

    	    		return view('visitor.searchResults', compact('with_images', 'results'));
        		}
    	    }else{
    	    	$with_images == 'no';
                if($is_online == 'yes')
        		{
        		    $results = Client::where('gender', $request->gender)->where('online', 'online')->where('city_id', $request->city_id)->where('dob', 'like', ''. $request->age . '%')->where('approved', 'approved')->get();

    	    		return view('visitor.searchResults', compact('with_images', 'results'));

        		}else{
        		    $results = Client::where('gender', $request->gender)->where('online', 'offline')->where('city_id', $request->city_id)->where('dob', 'like', ''. $request->age . '%')->where('approved', 'approved')->get();

    	    		return view('visitor.searchResults', compact('with_images', 'results'));
        		}
    	    	
    	    }
   		}else{
   		    if(\Auth::guard('client')->check())
            {
                $gender = \Auth::guard('client')->user()->gender;
            }else{
                $gender = '';
            }
    
            if($gender === 'male')
            {
                $top_6_users = Client::where('approved', 'approved')->where('gender','female')->latest()->limit(12)->get();
            }
            else if($gender === 'female')
            {
                $top_6_users = Client::where('gender','male')->latest()->limit(12)->where('approved', 'approved')->get();
            }
            else
            {
                $top_6_users = Client::latest()->where('approved', 'approved')->limit(12)->get();
            }
            $setting = \App\SiteInfo::find(1);
            $countries = \App\Country::all();
            return view('visitor.index', compact(['top_6_users', 'countries','setting', 'errorss']));
   		}

        session()->flash('message', 'لم يعثر على نتائج بعد');

		return view('visitor.searchResults');
    }
    
    public function advanced_search()
    {
        $countries = \App\Country::all();

        return view('visitor.advanced_search', compact('countries'));
    }
    
    public function advanced_search_results(Request $request)
    {
        if($request->fname === null && $request->career_field === null && empty($request->except('fname', 'career_field')))
        {
            session()->flash('message', 'لم يعثر على نتائج بعد');

	    	return view('visitor.searchResults');
        }
        $is_with_images = (isset($request->with_images)) ? 'yes' : "no";
        $is_online = (isset($request->is_online)) ? 'yes' : "no";
    	$with_images = '';
        $result =  Client::where('approved', 'approved');

    	if($is_with_images == 'yes')
    	{
    	    $with_images = 'yes';
    	    
    	    if(isset($request->gender))
    	    {
    	        $result = $result->where('gender', $request->gender);
    	    }
    	    
    	    if($is_online == 'yes')
    	    {
    	        $result = $result->where('online', 'online');
    	    }
    	    
    	    if(isset($request->city_id))
    	    {
    	        $result = $result->where('city_id', $request->city_id);
    	    }
    	    
    	    if(isset($request->age))
    	    {
    	        $result = $result->where('dob', 'like', ''. $request->age . '%');
    	    }
    	    
    	    if(isset($request->social_status))
    	    {
    	        $result = $result->where('social_status', $request->social_status);
    	    }
    	    
    	    if(isset($request->fname) && $request->fname != null)
    	    {
    	        $result = $result->where('fname', $request->fname);
    	    }
    	    
    	    if(isset($request->children_number))
    	    {
    	        $result = $result->where('children_number', $request->children_number);
    	    }
    	    
    	    if(isset($request->education))
    	    {
    	        $result = $result->where('education', $request->education);
    	    }
    	    
    	    if(isset($request->career_field) && $request->career_field != null)
    	    {
    	        $result = $result->where('career_field', $request->career_field);
    	    }
    	    
    	    if(isset($request->skin_color))
    	    {
    	        $result = $result->where('skin_color', $request->skin_color);
    	    }
    	    
    	    if(isset($request->height))
    	    {
    	        $result = $result->where('height', '<=',  $request->height);
    	    }
    	    
    	    if(isset($request->physique))
    	    {
    	        $result = $result->where('physique', $request->physique);
    	    }
    	    
    	    $results = $result->get();

    	    return view('visitor.searchResults', compact('with_images', 'results'));
    	
        }else{
        	$with_images = 'no';
        	
        	 if(isset($request->gender))
    	    {
    	        $result = $result->where('gender', $request->gender);
    	    }
    	    
    	    if($is_online == 'yes')
    	    {
    	        $result = $result->where('online', 'online');
    	    }
    	    
    	    if(isset($request->city_id))
    	    {
    	        $result = $result->where('city_id', $request->city_id);
    	    }
    	    
    	    if(isset($request->age))
    	    {
    	        $result = $result->where('dob', 'like', ''. $request->age . '%');
    	    }
    	    
    	    if(isset($request->social_status))
    	    {
    	        $result = $result->where('social_status', $request->social_status);
    	    }
    	    
    	    if(isset($request->fname) && $request->fname != null)
    	    {
    	        $result = $result->where('fname', $request->fname);
    	    }
    	    
    	    if(isset($request->children_number))
    	    {
    	        $result = $result->where('children_number', $request->children_number);
    	    }
    	    
    	    if(isset($request->education))
    	    {
    	        $result = $result->where('education', $request->education);
    	    }
    	    
    	    if(isset($request->career_field) && $request->career_field != null)
    	    {
    	        $result = $result->where('career_field', $request->career_field);
    	    }
    	    
    	    if(isset($request->skin_color))
    	    {
    	        $result = $result->where('skin_color', $request->skin_color);
    	    }
    	    
    	    if(isset($request->height))
    	    {
    	        $result = $result->where('height', '<=',  $request->height);
    	    }
    	    
    	    if(isset($request->physique))
    	    {
    	        $result = $result->where('physique', $request->physique);
    	    }
    	    
    	    $results = $result->get();
    	    
        	return view('visitor.searchResults', compact('with_images', 'results'));
        }
    }
}
