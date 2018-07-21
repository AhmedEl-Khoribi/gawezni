<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
use App\AdminToClientMessages;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Blacklist;

class MessageToClientsController extends Controller
{
    public function __construct()
    {
        $this->middleware('client');
    }

    public function index($id)
    {
    	$user = Client::find($id);

    	return view('admin.toClientMessage', compact('user'));
    }

    public function sendMessage(Request $request)
    {
    	$this->validate(request(),[
            'message_to_client' => 'required'
        ]);

        $receiver_id = $request->client_id;

        $body = $request->message_to_client;

        $sender_id = \Auth::guard('admin')->user()->id;
        
        $done = new AdminToClientMessages;

        $done->receiver_id = $receiver_id;

        $done->sender_id = $sender_id;

        $done->body = $body;

        $done->is_admin = 'yes';

        $done->save();

        $username = Client::where('id', $receiver_id)->value('username');

        session()->flash('message', 'Message Sent to ' . $username);

        return redirect('/admin/users');
    }

    public function seeAll()
    {
        $all_messages = AdminToClientMessages::where('is_admin', 'no')->get();
        return view('admin.mailbox', compact('all_messages'));
    }

    public function showForm()
    {
        return view('visitor.contact_us');
    }

    public function postContact(Request $request)
    {
        $this->validate(request(),[
            'message_to_admin' => 'required'
        ]);

        $body = $request->message_to_admin;

        $sender_id = \Auth::guard('client')->user()->id;
        
        $done = new AdminToClientMessages;

        $done->receiver_id = 1;

        $done->sender_id = $sender_id;

        $done->body = $body;

        $done->is_admin = 'no';

        $done->save();

        session()->flash('message', 'تم ارسال الرسالة الى الادارة');

        return redirect('/client/home');
    }
}
