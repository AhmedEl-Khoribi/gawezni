<?php

namespace App\Http\Controllers;

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

class FrontController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('client.guest')->except(['likes', 'blocked']);
    // }

     public function index ()
    {
        if(Auth::guard('client')->check())
        {
            $gender = \Auth::guard('client')->user()->gender;
        }else{
            $gender = '';
        }

        if($gender === 'male')
        {
            $top_6_users = Client::where('approved', 'approved')->where('gender','female')->latest()->limit(12)->get();
        }
        elseif($gender === 'female')
        {
            $top_6_users = Client::where('approved', 'approved')->where('gender','male')->latest()->limit(12)->get();
        }
        else
        {
            $top_6_users = Client::latest()->where('approved', 'approved')->limit(12)->get();
        }

        $setting = SiteInfo::find(1);
        $countries = Country::all();
        return view('visitor.index', compact(['top_6_users', 'countries','setting']));
    }
    public function register ()
    {
        return view('visitor.register');
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

        $gender = $data['gender'];

        if($gender === 'male')
        {
            $top_6_users = Client::where('approved', 'approved')->where('gender','female')->latest()->limit(12)->get();
        }
        else if($gender === 'female')
        {
            $top_6_users = Client::where('approved', 'approved')->where('gender','male')->latest()->limit(12)->get();
        }
        else
        {
            $top_6_users = Client::latest()->where('approved', 'approved')->limit(12)->get();
        }
        $countries = Country::all();
        $setting = SiteInfo::find(1);

         $user = Client::where('email', $data['email'])->first();
         \Mail::to($user)->send(new Register($user));



        Session::flash('message', 'تم ارسال الطلب بنجاح , سوف يتم مراجعه الطلبك');
        return view('visitor.index',compact(['top_6_users','countries', 'setting']));
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


        $gender = $data['gender'];

        if($gender === 'male')
        {
            $top_6_users = Client::where('approved', 'approved')->where('gender','female')->latest()->limit(12)->get();
        }
        else if($gender === 'female')
        {
            $top_6_users = Client::where('approved', 'approved')->where('gender','male')->latest()->limit(12)->get();
        }
        else
        {
            $top_6_users = Client::latest()->where('approved', 'approved')->limit(12)->get();
        }
        Client::create($data);
        $countries = Country::all();
        $setting = SiteInfo::find(1);
        $user = Client::where('email', $data['email'])->first();
         \Mail::to($data['email'])->send(new Register($user));


        Session::flash('message', 'تم ارسال الطلب بنجاح , سوف يتم مراجعه الطلبك');
        return view('visitor.index',compact(['top_6_users','countries','setting']));
    }
    public function city($id)
    {
        $cities = City::where('country_id',$id)->get();
        $cityCollection = "<option value=\"\" selected=\"selected\">اختر المدينه  ...</option>";
        foreach($cities as $city)
        {
            $cityCollection .= "<option value='" . $city->id . "'>". $city->name ."</option>";
        }
        return response()->json(['cities'=>$cityCollection]);
    }
    public function email ($email)
    {
        if(filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $client = Client::where('email',$email)->count();
            if($client == 0){
                $message = 'هذا البريد الالكتروني متاح';
                return response()->json(['success'=> $message]);
            }
            else
            {
                $error = 'هذا البريد غير متاح اعد المحاوله باستخدام بريد اخر';
                return response()->json(['error' => $error]);

            }
        }
        else
        {
            $error = 'هذا الشكل غير صحيح ولا يمثل بريد الكتروني';
            return response()->json(['error' => $error]);
        }
    }
    public function phone ($phone)
    {
        $phone = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);

        if(preg_match("/^(01)[0-9]{9}$/", $phone)) {
            $client = Client::where('phone', $phone)->count();
            if ($client == 0) {
                $message = 'هذا الرقم متاح';
                return response()->json(['success' => $message]);
            } else {
                $error = 'هذا الرقم غير متاح اعد المحاول برقم اخر';
                return response()->json(['error' => $error]);

            }
        }
        else
        {
            $error = 'رقم الهاتف لابد ان يكون 11 رقم ويبدأ ب 01';
            return response()->json(['error' => $error]);
        }
    }
    public function username ($username)
    {
        $client = Client::where('username',$username)->count();
        if($client == 0){
            $message = 'هذا الاسم متاح';
            return response()->json(['success'=> $message]);
        }
        else
        {
            $error = 'هذا الاسم غير متاح حاول باستخدام اسم اخر';
            return response()->json(['error' => $error]);

        }
    }
    public function salary ($salary)
    {
        if(filter_var($salary,FILTER_VALIDATE_INT))
        {
            if($salary < 50000 && $salary > 200 ){
                $message = 'هذا الراتب سليم';
                return response()->json(['success'=> $message]);
            }
            else
            {
                $error = 'الراتب يجب ان لا يقل عن 200 ولا يزيد عن 50000';
                return response()->json(['error' => $error]);
            }
        }
        else
        {
            $error = 'الراتب لابد ان يكون رقم صحيح ولا يقبل حروف';
            return response()->json(['error' => $error]);
        }
    }
    public function weight ($weight)
    {
        if(filter_var($weight,FILTER_VALIDATE_INT))
        {
            if($weight < 150 && $weight > 30){
                $message = 'هذا الوزن متاح';
                return response()->json(['success'=> $message]);
            }
            else
            {
                $error = 'الوزن لا يقل عن 30 ولا يزيد عن 150';
                return response()->json(['error' => $error]);

            }
        }
        else
        {
            $error = 'الوزن لابد ان يكون رقم صحيح ولا يقبل حروف';
            return response()->json(['error' => $error]);
        }
    }
    public function height ($height)
    {
        if(filter_var($height,FILTER_VALIDATE_INT)) {
            if ($height < 200 && $height > 50) {
                $message = 'هذا الطول سليم';
                return response()->json(['success' => $message]);
            } else {
                $error = 'الطول يجب ان لا يقل عن 50 ولا يزيد عن 200';
                return response()->json(['error' => $error]);
            }
        }
        else
        {
            $error = 'الطول لابد ان يكون رقم صحيح ولا يقبل حروف';
            return response()->json(['error' => $error]);
        }
    }

    public function pricesValues()
    {

        $message_count = \App\AdminToClientMessages::where('is_admin', 'no')->where('is_read', 'unseen')->count();     
            header('Content-Tpe: text/event-stream');
            header('Cache-Control: no-cache');

            $time = date('r');
            echo "data: {$message_count}\n\n";
            flush();
    }


    public function likes()
    {
        $user_id = \Auth::guard('client')->user()->id;
        
        //el ana 3mlt lohom e3gab
        //$in_friends = \App\Client::find($user_id)->friends()->select('*')->get();
        
        $in_friends = \App\Friend::where('friend_id', $user_id)->get();
        if($in_friends->count() === 0)
        {
            return view("soryyLike");
        }
        
        return view('visitor.likes', compact('in_friends'));
    }

    public function blocked()
    {
        $user_id = \Auth::guard('client')->user()->id;

        $in_friend = \App\Client::find($user_id)->blacklisted()->select('*')->get();

        return view('visitor.blocked', compact('in_friend'));
    }
    public function profile ($id)
    {
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
            
            return view('visitor.profile',compact('user', 'number_of_visits', 'likes'));
        }
    }
}
