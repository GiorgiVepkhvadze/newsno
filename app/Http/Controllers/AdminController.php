<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('snoadmin/home');
    }


    public function company_header(){
        $root = request()->root();
        $info = Company::get_company_data();
        $geo_text = $info->company_header_ka;
        $eng_text = $info->company_header_en;
        $rus_text = $info->company_header_ru;
        $router_url = $root."/snoadmin/company_header";

        return view('snoadmin/text_editor')->with(compact('geo_text', 'eng_text', 'rus_text', 'router_url'));   

    }


    public function company_header_update(Request $request){
        $company_header = Company::where('company_id', '=', '1')->first();
        $company_header->company_header_ka=$request->geo_text;
        $company_header->company_header_en=$request->eng_text; 
        $company_header->company_header_ru=$request->rus_text;
        $company_header->save();
        return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');

    }






}
