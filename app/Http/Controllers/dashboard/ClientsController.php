<?php
namespace App\Http\Controllers\dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
use App\Country;
use App\City;
use Illuminate\Support\Facade\Mail;
use App\Mail\ActiveAccount;


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
    public function forExcel()
    {
        $users = Client::all();
        
        return view('admin.forExcel',compact('users'));
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
        $countries = Country::all();
        return view('admin.editUserInfo', compact('user', 'countries'));
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
            'fname'=>'required',
            'lname'=>'required',
            'dob'=>'required',
            'image'=>'image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);

        if(file_exists($request->file('image')))
        {
           $img_name=time() . '.' . $request->image->getClientOriginalExtension();

           Client::where('id', $id)->update(['image'=>$img_name]);
                     
           $request->image->move('files/users', $img_name);

        }

        Client::where('id', $id)->update($request->except(['_token', '_method', '_wysihtml5_mode', 'image']));
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
        Client::find($id)->delete();
        session()->flash('deleted', 'User is Deleted Successfully...');
        return redirect('/admin/users');
    }
    public function approve($id)
    {

        $client = Client::find($id);

        $user = Client::where('id', $id)->update(['approved' => 'approved']);
        \Mail::to($client->email)->send(new ActiveAccount($client));


        session()->flash('message', 'User is approved');
        return back();
    }
    public function block($id)
    {
        $block = Client::where('id', $id)->update(['approved' => 'not_approved']);
        session()->flash('message', 'User is blocked');
        return back();
    }
    public function upgrage($id)
    {
        $block = Client::where('id', $id)->update(['member_ship' => 'premium']);
        session()->flash('message', 'User is upgraded to premium membership');
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
                'gender'=> 'female',
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
    public function city ($id)
    {
        $cities = City::where('country_id', $id)->get();
        $data = '';
        foreach($cities as $city)
        {
            $data .= '<option value="' . $city->id . '">' . $city->name .' </option>';
        }
        return response()->Json(['message' => $data]);
    }
}