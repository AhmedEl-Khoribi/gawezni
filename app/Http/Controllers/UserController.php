<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Country;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('client');
    }

    public function index()
    {
       $user_id = Auth::guard('client')->user()->id;

       $user = Client::where('id', $user_id)->first();

       return view('visitor.profile', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCoversations()
    {
        $all_conversations = DB::table('conversations')->where('client_1', \Auth::guard('client')->user()->id)->orWhere('client_2', \Auth::guard('client')->user()->id)->get();

        return view('visitor.message', compact('all_conversations'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendMessage(Request $request)
    {
        $this->validate(request(),[
            'body'=>'required',
            'conversation_id'=>'required',
            'receiver_id'=>'required',
        ]);
        
        $body = $request->body;
        $conversation_id = $request->conversation_id;
        $receiver_id = $request->receiver_id;
        $is_conv = DB::table('conversations')->where('id', $conversation_id)->exists();
        
        if($is_conv == 'true')
        {
            $message = new Mail;
            $message->conversation_id = $conversation_id;
            $message->sender_id =  \Auth::guard('client')->user()->id;
            $message->receiver_id = $receiver_id;
            $message->body = $body;
            $message->save();
            
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewMessages($id)
    {
        $is_conv_case1 = DB::table('conversations')->where('client_1', \Auth::guard('client')->user()->id)->where('client_2', $id)->exists();
        $is_conv_case2 = DB::table('conversations')->where('client_2', \Auth::guard('client')->user()->id)->where('client_1', $id)->exists();
        
        if ($is_conv_case1 == 'true')
        {
            $conversation_id = DB::table('conversations')->where('client_1', \Auth::guard('client')->user()->id)->where('client_2', $id)->value('id');
            
            $all_conversations = DB::table('conversations')->where('client_1', \Auth::guard('client')->user()->id)->orWhere('client_2', \Auth::guard('client')->user()->id)->get();
            
            $previous_messages = Mail::where('conversation_id', $conversation_id)->get();

            return view('visitor.chat', compact('previous_messages', 'conversation_id', 'id','all_conversations'));

        }
        
        if($is_conv_case2 == 'true')
        {
            $conversation_id = DB::table('conversations')->where('client_2', \Auth::guard('client')->user()->id)->where('client_1', $id)->value('id');
            
            $all_conversations = DB::table('conversations')->where('client_1', \Auth::guard('client')->user()->id)->orWhere('client_2', \Auth::guard('client')->user()->id)->get();
            
            $previous_messages = Mail::where('conversation_id', $conversation_id)->get();

            return view('visitor.chat', compact('previous_messages', 'conversation_id', 'id','all_conversations'));
            
        }
        
        $conv =  DB::table('conversations')
            ->insert(['client_1' => \Auth::guard('client')->user()->id , 'client_2' => $id, 'created_at'=>now()]);
        $conversation_id = DB::table('conversations')->where('client_1', \Auth::guard('client')->user()->id)->where('client_2', $id)->value('id');
        
        $all_conversations = DB::table('conversations')->where('client_1', \Auth::guard('client')->user()->id)->orWhere('client_2', \Auth::guard('client')->user()->id)->get();
         
        return view('visitor.chat', compact('conversation_id', 'id', 'all_conversations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user_id = \Auth::guard('client')->user()->id;

        $usser = Client::where('id', $user_id)->first();

        $countries = Country::all();

        return view('visitor.edit', compact('usser', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->except(['image', '_token','_method','submit']);
        $image = $request->file('image');
        $this->validate(request(),[
            'username'=>'required|unique:clients,username,'.$id,
            'email'=>'required|email|unique:clients,email,'.$id,
            'phone'=>'required',
            'job'=>'required',
            'fname'=>'required',
            'lname'=>'required',
            'weight'=>'required|numeric',
            'height'=>'required|numeric',
            
        ]);
        if(file_exists($image))
        {
            $data['image'] = md5(date('d-M-Y-H-i-s') . $image->getClientOriginalName()). '.' . $image->getClientOriginalExtension();
            $image->move('files/users',$data['image']);
        }
        
        Client::where('id', $id)->update($data);
        session()->flash('message', 'تم تعديل بيانات العميل');
        return redirect('/client/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
