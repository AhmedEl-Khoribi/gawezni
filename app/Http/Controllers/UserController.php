<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Country;

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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        $this->validate(request(),[
            'username'=>'required|unique:clients,username,'.$id,
            'email'=>'required|email|unique:clients,email,'.$id,
            'phone'=>'required',
            'job'=>'required',
            'fname'=>'required',
            'lname'=>'required',
            'dob'=>'required',
            'weight'=>'required|numeric',
            'height'=>'required|numeric',
        ]);
        Client::where('id', $id)->update($request->except(['_token', '_method', 'submit']));
        session()->flash('message', 'User Information Updated');
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
