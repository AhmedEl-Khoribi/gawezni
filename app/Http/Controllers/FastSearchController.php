<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\City;

class FastSearchController extends Controller
{
    public function search(Request $request)
    {
    	$this->validate(request(),[
         'gender'=> 'in:male,female' 
        ]);

    	$is_gender = (isset($request->gender)) ? $request->gender : null;
    	$is_with_images = (isset($request->with_images)) ? 'yes' : "no";
    	$is_online = (isset($request->is_online)) ? 'yes' : "no";
    	$country_id = (isset($request->country)) ? $request->country : null;
    	if(isset($country_id)){
    	$city_id = City::where('country_id', $country_id)->get();
    	$array_of_clients = $city_id[0]->clients;
    	}
    	$date_of_birth = (isset($request->age)) ? $request->age : null;
   		$with_images = '';
   		
    	if($is_with_images == 'yes')
    	{
    		//Variable passed to view
    		$with_images = 'yes';
    		//to

	    	if(!is_null($is_gender) && $is_online == 'yes' && !is_null($country_id) && !is_null($date_of_birth))
	    	{
	    		$results = Client::where('gender', 'female')->Where('online', 'online')->Where('dob', 'LIKE', '%'.$date_of_birth.'%')->get();
	    		
	    		return view('visitor.searchResults', compact('with_images', 'results', 'array_of_clients'));
	    	}elseif(!is_null($is_gender) && $is_online == 'yes' && !is_null($country_id) && !is_null($date_of_birth)) 
	    	{
	    		$results = Client::where('gender', 'male')->Where('online', 'online')->Where('dob', 'LIKE', '%'.$date_of_birth.'%')->get();
	    		
	    		return view('visitor.searchResults', compact('with_images', 'results', 'array_of_clients'));
	    	}elseif($is_gender== 'male')
	    	{
	    		$results = Client::where('gender', 'male')->get();
	    		
	    		return view('visitor.searchResults', compact('with_images', 'results'));
	    	}elseif($is_gender== 'female')
	    	{
	    		$results = Client::where('gender', 'female')->get();
	    		
	    		return view('visitor.searchResults', compact('with_images', 'results'));
	    	}else{
	    		 $results = Client::orderByRaw('RAND()')->take(15)->get();
	    		 return view('visitor.searchResults', compact('with_images', 'results'));
	    	}
	    }else{
	    	$with_images == 'no';

	    	if(!is_null($is_gender) && $is_online == 'yes' && !is_null($country_id) && !is_null($date_of_birth))
	    	{
	    		$results = Client::where('gender', 'female')->Where('online', 'online')->Where('dob', 'LIKE', '%'.$date_of_birth.'%')->get();
	    		
	    		return view('visitor.searchResults', compact('with_images', 'results', 'array_of_clients'));
	    	}elseif(!is_null($is_gender) && $is_online == 'yes' && !is_null($country_id) && !is_null($date_of_birth)) 
	    	{
	    		$results = Client::where('gender', 'male')->Where('online', 'online')->Where('dob', 'LIKE', '%'.$date_of_birth.'%')->get();
	    		
	    		return view('visitor.searchResults', compact('with_images', 'results', 'array_of_clients'));
	    	}elseif($is_gender== 'male')
	    	{
	    		$results = Client::where('gender', 'male')->get();
	    		
	    		return view('visitor.searchResults', compact('with_images', 'results'));
	    	}elseif($is_gender== 'female')
	    	{
	    		$results = Client::where('gender', 'female')->get();
	    		
	    		return view('visitor.searchResults', compact('with_images', 'results'));
	    	}else{
	    		 $results = Client::orderByRaw('RAND()')->take(15)->get();
	    		 return view('visitor.searchResults', compact('with_images', 'results'));
	    	}
	    }

        session()->flash('message', 'لم يعثر على نتائج بعد');

		return view('visitor.searchResults');
    }
}
