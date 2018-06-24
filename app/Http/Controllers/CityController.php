<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $city = 1 ;
        $cityCountry = Country::get();
        return view('admin.add',compact(['city','cityCountry']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'name' => 'required|string',
            'country_id'=> 'required|integer'
        ]);
        City::create($request->all());
        return redirect()->back()->with('message','Successfull Adding The Country');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countryCity = City::find($id);
        $cntry = Country::get();
        return view('admin.edit',compact(['countryCity','cntry']));
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
        $this->validate($request , [
            'name' => 'required|string',
            'country_id'=> 'required|integer'
        ]);
        City::find($id)->update($request->all());
        return redirect()->back()->with('message','Successfull Editting The City');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        City::find($id)->delete();
        return redirect()->back()->with('message','success delete this city');
    }

    public function FAQ()
    {
        $faqs = DB::table('faqs')->get();

        return view('visitor.faqs', compact('faqs'));
    }

    public function advice()
    {
        $advices = \App\SiteInfo::pluck('website_used');

        return view('visitor.advice', compact('advices'));
    }
}
