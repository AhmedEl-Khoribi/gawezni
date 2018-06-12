<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
use App\Country;
use App\City;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $not_approved = Client::where('approved', 'not_approved')->orderBy('created_at', 'desc')->get();

        $approved = Client::where('approved', 'approved')->orderBy('created_at', 'desc')->get();

        return view('admin.users', compact('not_approved', 'approved'));
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
        $user = Client::find($id);

        return view('admin.userDetail', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Client::find($id);

        return view('admin.editUserInfo', compact('user'));
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
            'career_field'=>'required',
            'job'=>'required',
            'salary'=>'required',
            'fname'=>'required',
            'lname'=>'required',
            'dob'=>'required',
            'children_number'=>'required',
            'main_description'=>'required',
            'other_person_description'=>'required',
            'weight'=>'required|numeric',
            'height'=>'required|numeric',
            'health_details'=>'required',
        ]);

        Client::where('id', $id)->update($request->except(['_token', '_method', '_wysihtml5_mode']));

        session()->flash('message', 'User Information Updated');

        return redirect('/admin/details/'.$id);
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

    public function approve($id)
    {
        $user = Client::where('id', $id)->update(['approved' => 'approved']);

        session()->flash('message', 'User is approved');

        return back();

    }

    public function block($id)
    {
        $block = Client::where('id', $id)->update(['approved' => 'not_approved']);

        session()->flash('message', 'User is blocked');

        return back();

    }

    public function fakers()
    {
        $faker = \Faker\Factory::create();
        $data = [];
        for ($i=0; $i < 9; $i++) { 
            $data[] = [
                'username' => $faker->userName,
                'email' => $faker->safeEmail,
                'password' => bcrypt('123456'),
                'fname' => $faker->firstName,
                'lname' => $faker->lastName,
                'phone' => $faker->phoneNumber,
                'city_id' => 1,
                'gender'=> 'male',
                'career_field' => $faker->jobTitle,
                'job'=> $faker->company,
                'salary'=> $faker->randomDigitNotNull,
                'dob'=> $faker->date($format = 'Y-m-d', $max = '1999-12-30'),
                'children_number'=> $faker->numberBetween($min = 1, $max = 6),
                'main_description'=> $faker->text($maxNbChars = 200),
                'other_person_description'=> $faker->text($maxNbChars = 200),
                'weight'=> $faker->numberBetween($min = 55, $max = 110),
                'height'=> $faker->numberBetween($min = 145, $max = 200),
                'health_details'=>$faker->text($maxNbChars = 30),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
        }
        // Insert the testing user to users table.
        Client::insert($data);

        session()->flash('message', 'Users are generated Success');

        return redirect('/admin/users');
    }

    public function country()
    {
        $faker = \Faker\Factory::create();
        $data = [];
        for ($i=0; $i < 25; $i++) { 
            $data[] = [
                'name' => $faker->country,
                'currency' => $faker->currencyCode, 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
        }
        // Insert the testing user to users table.
        Country::insert($data);

        $faker = \Faker\Factory::create();
        $data2 = [];
        for ($i=0; $i < 25; $i++) { 
            $data2[] = [
                'name' => $faker->city,
                'country_id' => $faker->numberBetween($min = 2, $max = 26), 
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
        }
        // Insert the testing user to users table.
        City::insert($data2);

        session()->flash('message', 'Countries are generated Success');

        return redirect('/admin/users');
    }
}
