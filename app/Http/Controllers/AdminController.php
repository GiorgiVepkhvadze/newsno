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




    public function company_sveti(){
        $root = request()->root();
        $info = Company::get_company_data();
        $company_sveti_pirveli_ka = $info->company_sveti_pirveli_ka;
        $company_sveti_pirveli_en = $info->company_sveti_pirveli_en;
        $company_sveti_pirveli_ru = $info->company_sveti_pirveli_ru;
        $company_sveti_meore_ka = $info->company_sveti_meore_ka;
        $company_sveti_meore_en = $info->company_sveti_meore_en;
        $company_sveti_meore_ru = $info->company_sveti_meore_ru;
        $router_url = $root."/snoadmin/company_sveti";
        return view('snoadmin/sveti_editor')->with(compact('company_sveti_pirveli_ka', 'company_sveti_pirveli_en', 'company_sveti_pirveli_ru', 'company_sveti_meore_ka', 'company_sveti_meore_en', 'company_sveti_meore_ru', 'router_url'));   

    }


    public function company_sveti_update(Request $request){
        $company_sveti = Company::where('company_id', '=', '1')->first();
        $company_sveti->company_sveti_pirveli_ka=$request->company_sveti_pirveli_ka;
        $company_sveti->company_sveti_pirveli_en=$request->company_sveti_pirveli_en; 
        $company_sveti->company_sveti_pirveli_ru=$request->company_sveti_pirveli_ru;
        $company_sveti->company_sveti_meore_ka=$request->company_sveti_meore_ka;
        $company_sveti->company_sveti_meore_en=$request->company_sveti_meore_en;
        $company_sveti->company_sveti_meore_ru=$request->company_sveti_meore_ru;
        $company_sveti->save();
        return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');

    }





    public function company_mizani(){
        $root = request()->root();
        $info = Company::get_company_data();
        $geo_text = $info->company_mizani_ka;
        $eng_text = $info->company_mizani_en;
        $rus_text = $info->company_mizani_ru;
        $router_url = $root."/snoadmin/company_mizani";

        return view('snoadmin/text_editor')->with(compact('geo_text', 'eng_text', 'rus_text', 'router_url'));   

    }
    


    public function company_mizani_update(Request $request){
        $company_header = Company::where('company_id', '=', '1')->first();
        $company_header->company_mizani_ka=$request->geo_text;
        $company_header->company_mizani_en=$request->eng_text; 
        $company_header->company_mizani_ru=$request->rus_text;
        $company_header->save();
        return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');

    }




}
