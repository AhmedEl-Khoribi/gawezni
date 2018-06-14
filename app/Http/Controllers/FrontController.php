<?php

namespace App\Http\Controllers;

use App\Http\Requests\Female;
use App\Http\Requests\Male;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Country;
use App\City;
use App\Client;
use Illuminate\Support\Facades\Hash;

class FrontController extends Controller
{
    public function index ()
    {
        return view('visitor.index');
    }
    public function MaleRegisterForm ()
    {
        $countries = Country::get();
        return view('visitor.maleform',compact('countries'));
    }
    public function FemaleRegisterForm ()
    {
        $countries = Country::get();
        return view('visitor.female',compact('countries'));
    }
    public function MaleRegister (Male $request)
    {
        $data = $request->except(['image','password','password_confirmation']);
        $image = $request->file('image');
        $data['password'] = Hash::make($request->get('password'));
        if(file_exists($image))
        {
            $data['image'] = md5(date('d-M-Y-H-i-s') . $image->getClientOriginalName()). '.' . $image->getClientOriginalExtension();
            $image->move('files/users',$data['image']);
        }
        else
        {
            $data['image'] = "default.png";
        }
        $data['gender'] = 'male';
        Client::create($data);
        Session::flash('message', 'تم ارسال الطلب بنجاح , سوف يتم مراجعه الطلبك');
        return view('visitor.index');
    }
    public function FemaleRegister (Female $request)
    {
        $data = $request->except(['image','password','password_confirmation']);
        $image = $request->file('image');
        $data['password'] = Hash::make($request->get('password'));
        if(file_exists($image))
        {
            $data['image'] = md5(date('d-M-Y-H-i-s') . $image->getClientOriginalName()). '.' . $image->getClientOriginalExtension();
            $image->move('files/users',$data['image']);
        }
        else
        {
            $data['image'] = "default.png";
        }
        $data['gender'] = 'female';
        Client::create($data);
        Session::flash('message', 'تم ارسال الطلب بنجاح , سوف يتم مراجعه الطلبك');
        return view('visitor.index');
    }
    public function city ($id)
    {
        $cities = City::where('country_id',$id)->get();
        $cityCollection = "<option value=\"\" selected=\"selected\">اختر المدينه  ...</option>";
        foreach($cities as $city)
        {
            $cityCollection .= "<option value='" . $city->id . "'>". $city->name ."</option>";
        }
        return response()->json(['cities'=>$cityCollection]);
    }
}
