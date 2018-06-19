<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SiteInfo;

class SiteInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infos = SiteInfo::all();

        return view('admin.showInfos', compact('infos'));
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = SiteInfo::find($id);

        return view('admin.editSiteInfo', compact('info'));
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
            'logo'=>'image|mimes:jpg,jpeg,png,gif|max:2048',
            'fivicon'=>'image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        if(file_exists($request->file('logo')))
        {
           $img_name=time() . '.' . $request->logo->getClientOriginalExtension();

           SiteInfo::where('id', $id)->update(['logo'=>$img_name]);
                     
           $request->logo->move(public_path('site_info'), $img_name);

        }

        if(file_exists($request->file('fivicon')))
        {
           $img_name2=time() . '.' . $request->fivicon->getClientOriginalExtension();

           SiteInfo::where('id', $id)->update(['fivicon'=>$img_name2]);
                     
           $request->fivicon->move(public_path('site_info'), $img_name2);

        }


        SiteInfo::where('id', $id)->update($request->except(['_token', '_method', 'logo', 'fivicon']));

        session()->flash('message', 'Site Information Is Updated');

        return redirect('/admin/site_info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SiteInfo::find($id)->delete();
        session()->flash('deleted', 'Site Info is Deleted Successfully...');
        return redirect('/admin/site_info');
    }
}
