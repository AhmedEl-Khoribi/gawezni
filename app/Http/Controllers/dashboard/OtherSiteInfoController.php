<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class OtherSiteInfoController extends Controller
{
	//About Us
    public function showAboutUs()
    {
    	$about_us =  DB::table('about_us')->get();

    	return view('admin.aboutUsShow', compact('about_us'));
    }

    public function editAboutUs($id)
    {
    	$about =  DB::table('about_us')->find($id);

    	return view('admin.editAboutUs', compact('about'));
    }

    public function updateAboutUs(Request $request, $id)
    {
        $this->validate(request(),[
            'title'=>'required',
            'desc'=>'required',
        ]);

        DB::table('about_us')->where('id', $id)->update($request->except(['_token', '_method']));

        session()->flash('message', 'Site About Us Is Updated');

        return redirect('/admin/about-us');
    }

    //Contact Us

    public function showContactUs()
    {
    	$contact_us =  DB::table('contact_us')->get();

    	return view('admin.contactUsShow', compact('contact_us'));
    }

    public function editContactUs($id)
    {
    	$contact =  DB::table('contact_us')->find($id);

    	return view('admin.editContactUs', compact('contact'));
    }

    public function updateContactUs(Request $request, $id)
    {
        $this->validate(request(),[
            'address'=>'required',
            'phone1'=>'required',
            'phone2'=>'required',

        ]);

        DB::table('contact_us')->where('id', $id)->update($request->except(['_token', '_method']));

        session()->flash('message', 'Site Contact Us Is Updated');

        return redirect('/admin/contact_us');
    }

    //Contact Us
    
    public function showFAQ()
    {
    	$faqs =  DB::table('faqs')->get();

    	return view('admin.fagsUsShow', compact('faqs'));
    }

    public function editFAQ($id)
    {
    	$faq =  DB::table('faqs')->find($id);

    	return view('admin.editFAQS', compact('faq'));
    }

    public function updateFAQ(Request $request, $id)
    {
        $this->validate(request(),[
            'question'=>'required',
            'answer'=>'required',
        ]);

        DB::table('faqs')->where('id', $id)->update($request->except(['_token', '_method']));

        session()->flash('message', 'Site FAQS Is Updated');

        return redirect('/admin/faqs');
    }

    public function createFAQ()
    {
    	return view('admin.createFAQ');
    }

    public function storeFAQ(Request $request)
    {
    	$this->validate(request(),[
            'question'=>'required',
            'answer'=>'required',
        ]);

    	DB::table('faqs')->insert([ 'question'=>request('question'),
						'answer'=>request('answer')     
                      ]);

    	session()->flash('message', 'Site FAQS Is Created');

        return redirect('/admin/faqs');

    }

    public function destroyFaq($id)
    {
        DB::table('faqs')->where('id', $id)->delete();
        session()->flash('deleted', 'Site FAQ is Deleted Successfully...');
        return redirect('/admin/faqs');
    }
}
