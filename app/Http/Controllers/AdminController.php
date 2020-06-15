<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Eksporti;
use App\Snolikage;
use Image;
use App\Blog;
use DB;

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


    
    public function company_sawarmo(){
        $root = request()->root();
        $info = Company::get_company_data();
        $company_sawarmo_piveli_ka = $info->company_sawarmo_piveli_ka;
        $company_sawarmo_piveli_en = $info->company_sawarmo_piveli_en;
        $company_sawarmo_piveli_ru = $info->company_sawarmo_piveli_ru;

        $company_sawarmo_meore_ka = $info->company_sawarmo_meore_ka;
        $company_sawarmo_meore_ru = $info->company_sawarmo_meore_ru;
        $company_sawarmo_meore_en = $info->company_sawarmo_meore_en;

        return view('snoadmin/warmoeba_editor')->with(compact('company_sawarmo_piveli_ka', 'company_sawarmo_piveli_en', 'company_sawarmo_piveli_ru', 'company_sawarmo_meore_ka', 'company_sawarmo_meore_ru', 'company_sawarmo_meore_en'));   

    }


    public function company_sawarmo_update(Request $request){
        $info = Company::where('company_id', '=', '1')->first();

        $info->company_sawarmo_piveli_ka=$request->company_sawarmo_piveli_ka;
        $info->company_sawarmo_piveli_en=$request->company_sawarmo_piveli_en; 
        $info->company_sawarmo_piveli_ru=$request->company_sawarmo_piveli_ru;

        $info->company_sawarmo_meore_ka=$request->company_sawarmo_meore_ka;
        $info->company_sawarmo_meore_ru=$request->company_sawarmo_meore_ru; 
        $info->company_sawarmo_meore_en=$request->company_sawarmo_meore_en;


        $info->save();
        return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');

    }



    public function eqsport_sveti(){
        $root = request()->root();
        $info = Eksporti::get_company_data();

        $eksporti_pirveli_ka =  $info->eksporti_pirveli_ka;
        $eksporti_pirveli_en =  $info->eksporti_pirveli_en;
        $eksporti_pirveli_ru =  $info->eksporti_pirveli_ru;

        $eksporti_meore_ka =  $info->eksporti_meore_ka;
        $eksporti_meore_en =  $info->eksporti_meore_en;
        $eksporti_meore_ru =  $info->eksporti_meore_ru;
        
        return view('snoadmin/eqsporti_editor')->with(compact('eksporti_pirveli_ka', 'eksporti_pirveli_en', 'eksporti_pirveli_ru', 'eksporti_meore_ka', 'eksporti_meore_en', 'eksporti_meore_ru'));   

    }

    public function eqsport_sveti_update(Request $request){
        $info = Eksporti::where('eksporti_id', '=', '1')->first();

        $info->eksporti_pirveli_ka=$request->eksporti_pirveli_ka;
        $info->eksporti_pirveli_en=$request->eksporti_pirveli_en; 
        $info->eksporti_pirveli_ru=$request->eksporti_pirveli_ru;

        $info->eksporti_meore_ka=$request->eksporti_meore_ka;
        $info->eksporti_meore_en=$request->eksporti_meore_en; 
        $info->eksporti_meore_ru=$request->eksporti_meore_ru;
        $info->save();
        return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');

    }


    public function add_blog()
    {

        return view('snoadmin/add_blog');
    }



    public function add_blog_insert(Request $request){

        $ldate = date('Y-m-d H:i:s');

        $this->validate($request, [
            'filesToUpload1' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
         ]);

         $blog = new Blog();
         $blog->blog_title_ka = $request->blog_title_ka;
         $blog->blog_title_en = $request->blog_title_en;
         $blog->blog_title_ru = $request->blog_title_ru;

         $blog->blog_text_ka = $request->blog_text_ka;
         $blog->blog_text_en = $request->blog_text_en;
         $blog->blog_text_ru = $request->blog_text_ru;
         
         $blog->blog_time = $ldate;

         $blog_main_pic= $request->file('filesToUpload1');
         $thumbnailImage = Image::make($blog_main_pic);
         $thumbnailPath = public_path().'/images/';
         $thumbnailImage->fit(1170,450);
         $thumbnailImage->save($thumbnailPath.time().$blog_main_pic->getClientOriginalName());
         $blog_detail_pic = time().$blog_main_pic->getClientOriginalName();

         $blog->blog_main_pic = $blog_detail_pic;
         $blog->blog_detail_pic = $blog_detail_pic;
         $blog->blog_readed = 0;
         

         $blog->save();

         return back()->with('success', 'Your images has been successfully Upload');
   
    }


    public function list_blog(){

        $Blog = Blog::getBlogData_all();
        return view('snoadmin/all_blog')->with(compact('Blog'));


    }

    public function drop_blog($id){

        DB::table('blog')->where('blog_id',$id)->delete();
        return back();
    
        
    }



    public function sno_likage(){
        $root = request()->root();
        $info = Snolikage::get_likage_data();




        $sno_likage_text_pirveli_ka =  $info->sno_likage_text_pirveli_ka;
        $sno_likage_text_pirveli_en =  $info->sno_likage_text_pirveli_en;
        $sno_likage_text_pirveli_ru =  $info->sno_likage_text_pirveli_ru;

        $sno_likage_text_meore_ka =  $info->sno_likage_text_meore_ka;
        $sno_likage_text_meore_en =  $info->sno_likage_text_meore_en;
        $sno_likage_text_meore_ru =  $info->sno_likage_text_meore_ru;

        $sno_likage_text_mesame_ka =  $info->sno_likage_text_mesame_ka;
        $sno_likage_text_mesame_ru =  $info->sno_likage_text_mesame_ru;
        $sno_likage_text_mesame_en =  $info->sno_likage_text_mesame_en;

        $sno_likage_image1 =  $info->sno_likage_image1;
        $sno_likage_image2 =  $info->sno_likage_image2;
        
        return view('snoadmin/likage_editor')->with(compact('sno_likage_image2','sno_likage_image1','sno_likage_text_pirveli_ka', 'sno_likage_text_pirveli_en', 'sno_likage_text_pirveli_ru', 'sno_likage_text_meore_ka', 'sno_likage_text_meore_en', 'sno_likage_text_meore_ru', 'sno_likage_text_mesame_ka', 'sno_likage_text_mesame_en', 'sno_likage_text_mesame_ru'));   


    }



    public function sno_likage_update(Request $request){
        $info = Snolikage::where('sno_likage_id', '=', '1')->first();

        $info->sno_likage_text_pirveli_ka=$request->sno_likage_text_pirveli_ka;
        $info->sno_likage_text_pirveli_en=$request->sno_likage_text_pirveli_en; 
        $info->sno_likage_text_pirveli_ru=$request->sno_likage_text_pirveli_ru;

        $info->sno_likage_text_meore_ka=$request->sno_likage_text_meore_ka;
        $info->sno_likage_text_meore_en=$request->sno_likage_text_meore_en; 
        $info->sno_likage_text_meore_ru=$request->sno_likage_text_meore_ru;

        $info->sno_likage_text_mesame_ka=$request->sno_likage_text_mesame_ka;
        $info->sno_likage_text_mesame_ru=$request->sno_likage_text_mesame_ru; 
        $info->sno_likage_text_mesame_en=$request->sno_likage_text_mesame_en;

        $info->save();
        return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');

    }





    public function sno_likage_update_image_one(Request $request){
        $randomi = time();

        $this->validate($request, [
            'filesToUpload1' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
         ]);

         $sno_likage_update_image_one= $request->file('filesToUpload1');
         $thumbnailImage = Image::make($sno_likage_update_image_one);
         $thumbnailPath = public_path().'/images/';
         $thumbnailImage->save($thumbnailPath.$randomi.$sno_likage_update_image_one->getClientOriginalName());

         $image_one = $randomi.$sno_likage_update_image_one->getClientOriginalName();
         $info = Snolikage::where('sno_likage_id', '=', '1')->first();
         $info->sno_likage_image1=$image_one;
         $info->save();
        return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');

    }


    public function sno_likage_update_image_two(Request $request){


        $this->validate($request, [
            'filesToUpload1' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
         ]);

         $randomi = time();

         $sno_likage_update_image_one= $request->file('filesToUpload1');
         $thumbnailImage = Image::make($sno_likage_update_image_one);
         $thumbnailPath = public_path().'/images/';
         $thumbnailImage->save($thumbnailPath.$randomi.$sno_likage_update_image_one->getClientOriginalName());
         $image_one = $randomi.$sno_likage_update_image_one->getClientOriginalName();

         $info = Snolikage::where('sno_likage_id', '=', '1')->first();
         $info->sno_likage_image2=$image_one;
         $info->save();
        return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');

    }
    



    


    



}
