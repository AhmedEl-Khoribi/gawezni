<?php

namespace App\Http\Controllers\ClientAuth;

use App\Client;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Hesto\MultiAuth\Traits\LogsoutGuard;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers, LogsoutGuard {
        LogsoutGuard::logout insteadof AuthenticatesUsers;
    }

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    public $redirectTo = '/client/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('client.guest', ['except' => 'logout']);
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('client.auth.login');
    }
    public function logout ()
    {
        Client::where('id',Auth::guard('client')->user()->id)->update(['online'=> 'offline']);
        Auth::guard('client')->logout();
        return redirect('/');
    }
    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('client');
    }

    public function field()
    {
        if (filter_var(request()->username,FILTER_VALIDATE_EMAIL))
        {
            $this->validate(request(),[
                'password' => 'required|min:6'
            ]);
            return 'email';
        }
        else if(is_numeric(request()->username))
        {
            $this->validate(request(),[
                'username' => 'required',
                'password' => 'required|min:6'
            ]);
            return 'phone';
        }
        else
        {
            $this->validate(request(),[
                'username' => 'required|string',
                'password' => 'required|min:6'
            ]);
            return 'username';
        }
    }
    public function login()
    {
        if(Auth::guard('client')->attempt([$this->field() => request()->username,'password'=> request()->password]))
        {
            if(Auth::guard('client')->user()->approved == 'approved')
            {
                Client::where('id',Auth::guard('client')->user()->id)->update(['online'=> 'online']);
                return redirect()->intended('/client/home');
            }
            Session::flash('error', 'حسابك لم يفعل بعد . انتظر حتي يت التفعيل');
            return redirect()->back();
        }
        else
        {
            Session::flash('error', 'أسم المستخدم او رقم التليفون او اسم المستخدم و الرقم السري لا يطابق اي مستخدم');
            return redirect()->back();
        }
    }
}
