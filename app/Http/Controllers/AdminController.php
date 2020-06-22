<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Eksporti;
use App\Snolikage;
use App\Snomineral;
use App\Snoxarisxi;

use App\Kobilikage;
use App\Kobimineral;
use App\Kobixarisxi;

use App\Contact;

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

    public function edit_blog($id)
    {
        $Blog = Blog::find($id);
        return view('snoadmin/edit_blog', compact('Blog'));
    }

    public function edit_blog_update(Request $request, $id)
    {
        $ldate = date('Y-m-d H:i:s');



         $blog = Blog::find($id);
         $blog->blog_title_ka = $request->blog_title_ka;
         $blog->blog_title_en = $request->blog_title_en;
         $blog->blog_title_ru = $request->blog_title_ru;

         $blog->blog_text_ka = $request->blog_text_ka;
         $blog->blog_text_en = $request->blog_text_en;
         $blog->blog_text_ru = $request->blog_text_ru;
         
         $blog->blog_time = $ldate;

         if(request()->has('filesToUpload1'))
         {
            $blog_main_pic= $request->file('filesToUpload1');
            $thumbnailImage = Image::make($blog_main_pic);
            $thumbnailPath = public_path().'/images/';
            $thumbnailImage->fit(1170,450);
            $thumbnailImage->save($thumbnailPath.time().$blog_main_pic->getClientOriginalName());
            $blog_detail_pic = time().$blog_main_pic->getClientOriginalName();
   
            $blog->blog_main_pic = $blog_detail_pic;
            $blog->blog_detail_pic = $blog_detail_pic;
            $blog->blog_readed = 0;
         }

         

         $blog->save();

         return back()->with('success', 'Your images has been successfully Upload');
    }

    public function drop_blog($id){

        DB::table('blog')->where('blog_id',$id)->delete();
        return back();
    
        
    }

    public function kobi_likage(){
        $root = request()->root();
        $info = Kobilikage::get_likage_data();


        $kobi_likage_text_pirveli_ka =  $info->kobi_likage_text_pirveli_ka;
        $kobi_likage_text_pirveli_en =  $info->kobi_likage_text_pirveli_en;
        $kobi_likage_text_pirveli_ru =  $info->kobi_likage_text_pirveli_ru;

        $kobi_likage_text_meore_ka =  $info->kobi_likage_text_meore_ka;
        $kobi_likage_text_meore_en =  $info->kobi_likage_text_meore_en;
        $kobi_likage_text_meore_ru =  $info->kobi_likage_text_meore_ru;

        $kobi_likage_text_mesame_ka =  $info->kobi_likage_text_mesame_ka;
        $kobi_likage_text_mesame_ru =  $info->kobi_likage_text_mesame_ru;
        $kobi_likage_text_mesame_en =  $info->kobi_likage_text_mesame_en;

        $kobi_likage_image1 =  $info->kobi_likage_image1;
        $kobi_likage_image2 =  $info->kobi_likage_image2;
        
        return view('snoadmin/kobi/likage_editor_kobi')->with(compact('kobi_likage_image2','kobi_likage_image1','kobi_likage_text_pirveli_ka', 'kobi_likage_text_pirveli_en', 'kobi_likage_text_pirveli_ru', 'kobi_likage_text_meore_ka', 'kobi_likage_text_meore_en', 'kobi_likage_text_meore_ru', 'kobi_likage_text_mesame_ka', 'kobi_likage_text_mesame_en', 'kobi_likage_text_mesame_ru'));   
    }

    public function kobi_likage_update(Request $request){
        $info = Kobilikage::where('kobi_likage_id', '=', '1')->first();

        $info->kobi_likage_text_pirveli_ka=$request->kobi_likage_text_pirveli_ka;
        $info->kobi_likage_text_pirveli_en=$request->kobi_likage_text_pirveli_en; 
        $info->kobi_likage_text_pirveli_ru=$request->kobi_likage_text_pirveli_ru;

        $info->kobi_likage_text_meore_ka=$request->kobi_likage_text_meore_ka;
        $info->kobi_likage_text_meore_en=$request->kobi_likage_text_meore_en; 
        $info->kobi_likage_text_meore_ru=$request->kobi_likage_text_meore_ru;

        $info->kobi_likage_text_mesame_ka=$request->kobi_likage_text_mesame_ka;
        $info->kobi_likage_text_mesame_ru=$request->kobi_likage_text_mesame_ru; 
        $info->kobi_likage_text_mesame_en=$request->kobi_likage_text_mesame_en;

        $info->save();
        return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');

    }

    public function kobi_likage_update_image_one(Request $request){
        $randomi = time();

        $this->validate($request, [
            'filesToUpload1' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
         ]);

         $kobi_likage_update_image_one= $request->file('filesToUpload1');
         $thumbnailImage = Image::make($kobi_likage_update_image_one);
         $thumbnailPath = public_path().'/images/';
         $thumbnailImage->save($thumbnailPath.$randomi.$kobi_likage_update_image_one->getClientOriginalName());

         $image_one = $randomi.$kobi_likage_update_image_one->getClientOriginalName();
         $info = Kobilikage::where('kobi_likage_id', '=', '1')->first();
         $info->kobi_likage_image1=$image_one;
         $info->save();
        return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');

    }


    public function kobi_likage_update_image_two(Request $request){


        $this->validate($request, [
            'filesToUpload1' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
         ]);

         $randomi = time();

         $kobi_likage_update_image_one= $request->file('filesToUpload1');
         $thumbnailImage = Image::make($kobi_likage_update_image_one);
         $thumbnailPath = public_path().'/images/';
         $thumbnailImage->save($thumbnailPath.$randomi.$kobi_likage_update_image_one->getClientOriginalName());
         $image_one = $randomi.$kobi_likage_update_image_one->getClientOriginalName();

         $info = Kobilikage::where('kobi_likage_id', '=', '1')->first();
         $info->kobi_likage_image2=$image_one;
         $info->save();
        return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');

    }

    public function kobi_mineral(){
        $root = request()->root();
        $info = Kobimineral::get_kobi_mineral();

        $kobi_mineral_pirveli_ka =  $info->kobi_mineral_pirveli_ka;
        $kobi_mineral_pirveli_en =  $info->kobi_mineral_pirveli_en;
        $kobi_mineral_pirveli_ru =  $info->kobi_mineral_pirveli_ru;

      
        $kobi_mineral_meore_ka =  $info->kobi_mineral_meore_ka;
        $kobi_mineral_meore_en =  $info->kobi_mineral_meore_en;
        $kobi_mineral_meore_ru =  $info->kobi_mineral_meore_ru;

        $kobi_mineral_mesame_ka =  $info->kobi_mineral_mesame_ka;
        $kobi_mineral_mesame_ru =  $info->kobi_mineral_mesame_ru;
        $kobi_mineral_mesame_en =  $info->kobi_mineral_mesame_en;

        $kobi_mineral_meotxe_ka =  $info->kobi_mineral_meotxe_ka;
        $kobi_mineral_meotxe_en =  $info->kobi_mineral_meotxe_en;
        $kobi_mineral_meotxe_ru =  $info->kobi_mineral_meotxe_ru;


        $kobi_mineral_mexute_ka =  $info->kobi_mineral_mexute_ka;
        $kobi_mineral_mexute_en =  $info->kobi_mineral_mexute_en;
        $kobi_mineral_mexute_ru =  $info->kobi_mineral_mexute_ru;

        $kobi_mineral_image1 =  $info->kobi_mineral_image1;
        $kobi_mineral_image2 =  $info->kobi_mineral_image2;
        $kobi_mineral_image3 =  $info->kobi_mineral_image3;
        
        return view('snoadmin/kobi/kobi_mineral_editor')->with(compact('kobi_mineral_image3', 'kobi_mineral_image2', 'kobi_mineral_image1', 'kobi_mineral_mexute_ru', 'kobi_mineral_mexute_en', 'kobi_mineral_mexute_ka', 'kobi_mineral_meotxe_ru', 'kobi_mineral_meotxe_en', 'kobi_mineral_meotxe_ka', 'kobi_mineral_mesame_en', 'kobi_mineral_mesame_ru', 'kobi_mineral_mesame_ka', 'kobi_mineral_meore_ru', 'kobi_mineral_meore_en', 'kobi_mineral_meore_ka', 'kobi_mineral_pirveli_ru', 'kobi_mineral_pirveli_en', 'kobi_mineral_pirveli_ka'));   
    }

    public function kobi_mineral_update(Request $request){
        $info = Kobimineral::where('kobi_mineral_id', '=', '1')->first();

        $info->kobi_mineral_pirveli_ka=$request->kobi_mineral_pirveli_ka;
        $info->kobi_mineral_pirveli_en=$request->kobi_mineral_pirveli_en;
        $info->kobi_mineral_pirveli_ru=$request->kobi_mineral_pirveli_ru;

        $info->kobi_mineral_meore_ka=$request->kobi_mineral_meore_ka;
        $info->kobi_mineral_meore_en=$request->kobi_mineral_meore_en;
        $info->kobi_mineral_meore_ru=$request->kobi_mineral_meore_ru;

        $info->kobi_mineral_mesame_ka=$request->kobi_mineral_mesame_ka;
        $info->kobi_mineral_mesame_ru=$request->kobi_mineral_mesame_ru;
        $info->kobi_mineral_mesame_en=$request->kobi_mineral_mesame_en;

        $info->kobi_mineral_meotxe_ka=$request->kobi_mineral_meotxe_ka;
        $info->kobi_mineral_meotxe_en=$request->kobi_mineral_meotxe_en;
        $info->kobi_mineral_meotxe_ru=$request->kobi_mineral_meotxe_ru;

        $info->kobi_mineral_mexute_ka=$request->kobi_mineral_mexute_ka;
        $info->kobi_mineral_mexute_en=$request->kobi_mineral_mexute_en;
        $info->kobi_mineral_mexute_ru=$request->kobi_mineral_mexute_ru;


        $info->save();
        return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');

    }


    public function kobi_mineral_update_image_one(Request $request){


        $this->validate($request, [
            'filesToUpload1' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
         ]);
        
         $randomi = time();
        
         $kobi_likage_update_image_one= $request->file('filesToUpload1');
         $thumbnailImage = Image::make($kobi_likage_update_image_one);
         $thumbnailPath = public_path().'/images/';
         $thumbnailImage->save($thumbnailPath.$randomi.$kobi_likage_update_image_one->getClientOriginalName());
         $image_one = $randomi.$kobi_likage_update_image_one->getClientOriginalName();
        
         $info = Kobimineral::where('kobi_mineral_id', '=', '1')->first();
         $info->kobi_mineral_image1=$image_one;
         $info->save();
         return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');
        
        }
        
        
        
        public function kobi_mineral_update_image_two(Request $request){
        
        
        $this->validate($request, [
            'filesToUpload1' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
         ]);
        
         $randomi = time();
        
         $kobi_likage_update_image_one= $request->file('filesToUpload1');
         $thumbnailImage = Image::make($kobi_likage_update_image_one);
         $thumbnailPath = public_path().'/images/';
         $thumbnailImage->save($thumbnailPath.$randomi.$kobi_likage_update_image_one->getClientOriginalName());
         $image_one = $randomi.$kobi_likage_update_image_one->getClientOriginalName();
        
         $info = Kobimineral::where('kobi_mineral_id', '=', '1')->first();
         $info->kobi_mineral_image2=$image_one;
         $info->save();
         return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');
        
        }
        
        
        public function kobi_mineral_update_image_three(Request $request){
        
        
        $this->validate($request, [
            'filesToUpload1' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
         ]);
        
         $randomi = time();
        
         $kobi_likage_update_image_one= $request->file('filesToUpload1');
         $thumbnailImage = Image::make($kobi_likage_update_image_one);
         $thumbnailPath = public_path().'/images/';
         $thumbnailImage->save($thumbnailPath.$randomi.$kobi_likage_update_image_one->getClientOriginalName());
         $image_one = $randomi.$kobi_likage_update_image_one->getClientOriginalName();
        
         $info = Kobimineral::where('kobi_mineral_id', '=', '1')->first();
         $info->kobi_mineral_image3=$image_one;
         $info->save();
         return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');
        
        }


        public function kobi_xarisxi(){
            $root = request()->root();
            $info = Kobixarisxi::get_kobi_xarisxi();
    
            $kobi_mineral_pirveli_ka =  $info->kobi_xarisxi_pirveli_ka;
            $kobi_mineral_pirveli_en =  $info->kobi_xarisxi_pirveli_en;
            $kobi_mineral_pirveli_ru =  $info->kobi_xarisxi_pirveli_ru;
    
          
            $kobi_mineral_meore_ka =  $info->kobi_xarisxi_meore_ka;
            $kobi_mineral_meore_en =  $info->kobi_xarisxi_meore_en;
            $kobi_mineral_meore_ru =  $info->kobi_xarisxi_meore_ru;
    
            $kobi_mineral_mesame_ka =  $info->kobi_xarisxi_mesame_ka;
            $kobi_mineral_mesame_ru =  $info->kobi_xarisxi_mesame_en;
            $kobi_mineral_mesame_en =  $info->kobi_xarisxi_mesame_ru;
    
            $kobi_mineral_meotxe_ka =  $info->kobi_xarisxi_meotxe_ka;
            $kobi_mineral_meotxe_en =  $info->kobi_xarisxi_meotxe_en;
            $kobi_mineral_meotxe_ru =  $info->kobi_xarisxi_meotxe_ru;
    
    
            $kobi_mineral_mexute_ka =  $info->kobi_xarisxi_mexute_ka;
            $kobi_mineral_mexute_en =  $info->kobi_xarisxi_mexute_en;
            $kobi_mineral_mexute_ru =  $info->kobi_xarisxi_mexute_ru;
    
            $kobi_mineral_image1 =  $info->kobi_xarisxi_image1;
            $kobi_mineral_image2 =  $info->kobi_xarisxi_image2;
            $kobi_mineral_image3 =  $info->kobi_xarisxi_image3;
    
            
            return view('snoadmin/kobi/kobi_xarisxi_editor')->with(compact('kobi_mineral_image3', 'kobi_mineral_image2', 'kobi_mineral_image1', 'kobi_mineral_mexute_ru', 'kobi_mineral_mexute_en', 'kobi_mineral_mexute_ka', 'kobi_mineral_meotxe_ru', 'kobi_mineral_meotxe_en', 'kobi_mineral_meotxe_ka', 'kobi_mineral_mesame_en', 'kobi_mineral_mesame_ru', 'kobi_mineral_mesame_ka', 'kobi_mineral_meore_ru', 'kobi_mineral_meore_en', 'kobi_mineral_meore_ka', 'kobi_mineral_pirveli_ru', 'kobi_mineral_pirveli_en', 'kobi_mineral_pirveli_ka'));   
    
    
        }
    
    
        public function kobi_xarisxi_update(Request $request){
            $info = Kobixarisxi::where('kobi_xarisxi_id', '=', '1')->first();
    
            $info->kobi_xarisxi_pirveli_ka=$request->kobi_mineral_pirveli_ka;
            $info->kobi_xarisxi_pirveli_en=$request->kobi_mineral_pirveli_en;
            $info->kobi_xarisxi_pirveli_ru=$request->kobi_mineral_pirveli_ru;
    
            $info->kobi_xarisxi_meore_ka=$request->kobi_mineral_meore_ka;
            $info->kobi_xarisxi_meore_en=$request->kobi_mineral_meore_en;
            $info->kobi_xarisxi_meore_ru=$request->kobi_mineral_meore_ru;
    
            $info->kobi_xarisxi_mesame_ka=$request->kobi_mineral_mesame_ka;
            $info->kobi_xarisxi_mesame_ru=$request->kobi_mineral_mesame_ru;
            $info->kobi_xarisxi_mesame_en=$request->kobi_mineral_mesame_en;
    
            $info->kobi_xarisxi_meotxe_ka=$request->kobi_mineral_meotxe_ka;
            $info->kobi_xarisxi_meotxe_en=$request->kobi_mineral_meotxe_en;
            $info->kobi_xarisxi_meotxe_ru=$request->kobi_mineral_meotxe_ru;
    
            $info->kobi_xarisxi_mexute_ka=$request->kobi_mineral_mexute_ka;
            $info->kobi_xarisxi_mexute_en=$request->kobi_mineral_mexute_en;
            $info->kobi_xarisxi_mexute_ru=$request->kobi_mineral_mexute_ru;
    
    
            $info->save();
            return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');
    
        }


        public function kobi_xarisxi_update_image_one(Request $request){


            $this->validate($request, [
                'filesToUpload1' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
             ]);
            
             $randomi = time();
            
             $kobi_likage_update_image_one= $request->file('filesToUpload1');
             $thumbnailImage = Image::make($kobi_likage_update_image_one);
             $thumbnailPath = public_path().'/images/';
             $thumbnailImage->save($thumbnailPath.$randomi.$kobi_likage_update_image_one->getClientOriginalName());
             $image_one = $randomi.$kobi_likage_update_image_one->getClientOriginalName();
            
             $info = Kobixarisxi::where('kobi_xarisxi_id', '=', '1')->first();
             $info->kobi_xarisxi_image1=$image_one;
             $info->save();
            return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');
            
            }
            
            
            
            public function kobi_xarisxi_update_image_two(Request $request){
            
            
            $this->validate($request, [
                'filesToUpload1' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
             ]);
            
             $randomi = time();
            
             $kobi_likage_update_image_one= $request->file('filesToUpload1');
             $thumbnailImage = Image::make($kobi_likage_update_image_one);
             $thumbnailPath = public_path().'/images/';
             $thumbnailImage->save($thumbnailPath.$randomi.$kobi_likage_update_image_one->getClientOriginalName());
             $image_one = $randomi.$kobi_likage_update_image_one->getClientOriginalName();
            
             $info = Kobixarisxi::where('kobi_xarisxi_id', '=', '1')->first();
             $info->kobi_xarisxi_image2=$image_one;
             $info->save();
            return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');
            
            }
            
            
            public function kobi_xarisxi_update_image_three(Request $request){
            
            
            $this->validate($request, [
                'filesToUpload1' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
             ]);
            
             $randomi = time();
            
             $kobi_likage_update_image_one= $request->file('filesToUpload1');
             $thumbnailImage = Image::make($kobi_likage_update_image_one);
             $thumbnailPath = public_path().'/images/';
             $thumbnailImage->save($thumbnailPath.$randomi.$kobi_likage_update_image_one->getClientOriginalName());
             $image_one = $randomi.$kobi_likage_update_image_one->getClientOriginalName();
            
             $info = Kobixarisxi::where('kobi_xarisxi_id', '=', '1')->first();
             $info->kobi_xarisxi_image3=$image_one;
             $info->save();
             return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');
            
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


    
    public function sno_mineral(){
        $root = request()->root();
        $info = Snomineral::get_sno_mineral();

        $sno_mineral_pirveli_ka =  $info->sno_mineral_pirveli_ka;
        $sno_mineral_pirveli_en =  $info->sno_mineral_pirveli_en;
        $sno_mineral_pirveli_ru =  $info->sno_mineral_pirveli_ru;

      
        $sno_mineral_meore_ka =  $info->sno_mineral_meore_ka;
        $sno_mineral_meore_en =  $info->sno_mineral_meore_en;
        $sno_mineral_meore_ru =  $info->sno_mineral_meore_ru;

        $sno_mineral_mesame_ka =  $info->sno_mineral_mesame_ka;
        $sno_mineral_mesame_ru =  $info->sno_mineral_mesame_ru;
        $sno_mineral_mesame_en =  $info->sno_mineral_mesame_en;

        $sno_mineral_meotxe_ka =  $info->sno_mineral_meotxe_ka;
        $sno_mineral_meotxe_en =  $info->sno_mineral_meotxe_en;
        $sno_mineral_meotxe_ru =  $info->sno_mineral_meotxe_ru;


        $sno_mineral_mexute_ka =  $info->sno_mineral_mexute_ka;
        $sno_mineral_mexute_en =  $info->sno_mineral_mexute_en;
        $sno_mineral_mexute_ru =  $info->sno_mineral_mexute_ru;

        $sno_mineral_image1 =  $info->sno_mineral_image1;
        $sno_mineral_image2 =  $info->sno_mineral_image2;
        $sno_mineral_image3 =  $info->sno_mineral_image3;

        
        return view('snoadmin/sno_mineral_editor')->with(compact('sno_mineral_image3', 'sno_mineral_image2', 'sno_mineral_image1', 'sno_mineral_mexute_ru', 'sno_mineral_mexute_en', 'sno_mineral_mexute_ka', 'sno_mineral_meotxe_ru', 'sno_mineral_meotxe_en', 'sno_mineral_meotxe_ka', 'sno_mineral_mesame_en', 'sno_mineral_mesame_ru', 'sno_mineral_mesame_ka', 'sno_mineral_meore_ru', 'sno_mineral_meore_en', 'sno_mineral_meore_ka', 'sno_mineral_pirveli_ru', 'sno_mineral_pirveli_en', 'sno_mineral_pirveli_ka'));   


    }
    


    
    public function sno_mineral_update(Request $request){
        $info = Snomineral::where('sno_mineral_id', '=', '1')->first();

        $info->sno_mineral_pirveli_ka=$request->sno_mineral_pirveli_ka;
        $info->sno_mineral_pirveli_en=$request->sno_mineral_pirveli_en;
        $info->sno_mineral_pirveli_ru=$request->sno_mineral_pirveli_ru;

        $info->sno_mineral_meore_ka=$request->sno_mineral_meore_ka;
        $info->sno_mineral_meore_en=$request->sno_mineral_meore_en;
        $info->sno_mineral_meore_ru=$request->sno_mineral_meore_ru;

        $info->sno_mineral_mesame_ka=$request->sno_mineral_mesame_ka;
        $info->sno_mineral_mesame_ru=$request->sno_mineral_mesame_ru;
        $info->sno_mineral_mesame_en=$request->sno_mineral_mesame_en;

        $info->sno_mineral_meotxe_ka=$request->sno_mineral_meotxe_ka;
        $info->sno_mineral_meotxe_en=$request->sno_mineral_meotxe_en;
        $info->sno_mineral_meotxe_ru=$request->sno_mineral_meotxe_ru;

        $info->sno_mineral_mexute_ka=$request->sno_mineral_mexute_ka;
        $info->sno_mineral_mexute_en=$request->sno_mineral_mexute_en;
        $info->sno_mineral_mexute_ru=$request->sno_mineral_mexute_ru;


        $info->save();
        return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');

    }



    public function sno_mineral_update_image_one(Request $request){


        $this->validate($request, [
            'filesToUpload1' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
         ]);

         $randomi = time();

         $sno_likage_update_image_one= $request->file('filesToUpload1');
         $thumbnailImage = Image::make($sno_likage_update_image_one);
         $thumbnailPath = public_path().'/images/';
         $thumbnailImage->save($thumbnailPath.$randomi.$sno_likage_update_image_one->getClientOriginalName());
         $image_one = $randomi.$sno_likage_update_image_one->getClientOriginalName();

         $info = Snomineral::where('sno_mineral_id', '=', '1')->first();
         $info->sno_mineral_image1=$image_one;
         $info->save();
        return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');

    }



    public function sno_mineral_update_image_two(Request $request){


        $this->validate($request, [
            'filesToUpload1' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
         ]);

         $randomi = time();

         $sno_likage_update_image_one= $request->file('filesToUpload1');
         $thumbnailImage = Image::make($sno_likage_update_image_one);
         $thumbnailPath = public_path().'/images/';
         $thumbnailImage->save($thumbnailPath.$randomi.$sno_likage_update_image_one->getClientOriginalName());
         $image_one = $randomi.$sno_likage_update_image_one->getClientOriginalName();

         $info = Snomineral::where('sno_mineral_id', '=', '1')->first();
         $info->sno_mineral_image2=$image_one;
         $info->save();
        return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');

    }
    

    public function sno_mineral_update_image_three(Request $request){


        $this->validate($request, [
            'filesToUpload1' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
         ]);

         $randomi = time();

         $sno_likage_update_image_one= $request->file('filesToUpload1');
         $thumbnailImage = Image::make($sno_likage_update_image_one);
         $thumbnailPath = public_path().'/images/';
         $thumbnailImage->save($thumbnailPath.$randomi.$sno_likage_update_image_one->getClientOriginalName());
         $image_one = $randomi.$sno_likage_update_image_one->getClientOriginalName();

         $info = Snomineral::where('sno_mineral_id', '=', '1')->first();
         $info->sno_mineral_image3=$image_one;
         $info->save();
        return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');

    }



    public function sno_xarisxi(){
        $root = request()->root();
        $info = Snoxarisxi::get_sno_xarisxi();

        $sno_mineral_pirveli_ka =  $info->sno_xarisxi_pirveli_ka;
        $sno_mineral_pirveli_en =  $info->sno_xarisxi_pirveli_en;
        $sno_mineral_pirveli_ru =  $info->sno_xarisxi_pirveli_ru;

      
        $sno_mineral_meore_ka =  $info->sno_xarisxi_meore_ka;
        $sno_mineral_meore_en =  $info->sno_xarisxi_meore_en;
        $sno_mineral_meore_ru =  $info->sno_xarisxi_meore_ru;

        $sno_mineral_mesame_ka =  $info->sno_xarisxi_mesame_ka;
        $sno_mineral_mesame_ru =  $info->sno_xarisxi_mesame_en;
        $sno_mineral_mesame_en =  $info->sno_xarisxi_mesame_ru;

        $sno_mineral_meotxe_ka =  $info->sno_xarisxi_meotxe_ka;
        $sno_mineral_meotxe_en =  $info->sno_xarisxi_meotxe_en;
        $sno_mineral_meotxe_ru =  $info->sno_xarisxi_meotxe_ru;


        $sno_mineral_mexute_ka =  $info->sno_xarisxi_mexute_ka;
        $sno_mineral_mexute_en =  $info->sno_xarisxi_mexute_en;
        $sno_mineral_mexute_ru =  $info->sno_xarisxi_mexute_ru;

        $sno_mineral_image1 =  $info->sno_xarisxi_image1;
        $sno_mineral_image2 =  $info->sno_xarisxi_image2;
        $sno_mineral_image3 =  $info->sno_xarisxi_image3;

        
        return view('snoadmin/sno_xarisxi_editor')->with(compact('sno_mineral_image3', 'sno_mineral_image2', 'sno_mineral_image1', 'sno_mineral_mexute_ru', 'sno_mineral_mexute_en', 'sno_mineral_mexute_ka', 'sno_mineral_meotxe_ru', 'sno_mineral_meotxe_en', 'sno_mineral_meotxe_ka', 'sno_mineral_mesame_en', 'sno_mineral_mesame_ru', 'sno_mineral_mesame_ka', 'sno_mineral_meore_ru', 'sno_mineral_meore_en', 'sno_mineral_meore_ka', 'sno_mineral_pirveli_ru', 'sno_mineral_pirveli_en', 'sno_mineral_pirveli_ka'));   


    }


    public function sno_xarisxi_update(Request $request){
        $info = Snoxarisxi::where('sno_xarisxi_id', '=', '1')->first();

        $info->sno_xarisxi_pirveli_ka=$request->sno_mineral_pirveli_ka;
        $info->sno_xarisxi_pirveli_en=$request->sno_mineral_pirveli_en;
        $info->sno_xarisxi_pirveli_ru=$request->sno_mineral_pirveli_ru;

        $info->sno_xarisxi_meore_ka=$request->sno_mineral_meore_ka;
        $info->sno_xarisxi_meore_en=$request->sno_mineral_meore_en;
        $info->sno_xarisxi_meore_ru=$request->sno_mineral_meore_ru;

        $info->sno_xarisxi_mesame_ka=$request->sno_mineral_mesame_ka;
        $info->sno_xarisxi_mesame_ru=$request->sno_mineral_mesame_ru;
        $info->sno_xarisxi_mesame_en=$request->sno_mineral_mesame_en;

        $info->sno_xarisxi_meotxe_ka=$request->sno_mineral_meotxe_ka;
        $info->sno_xarisxi_meotxe_en=$request->sno_mineral_meotxe_en;
        $info->sno_xarisxi_meotxe_ru=$request->sno_mineral_meotxe_ru;

        $info->sno_xarisxi_mexute_ka=$request->sno_mineral_mexute_ka;
        $info->sno_xarisxi_mexute_en=$request->sno_mineral_mexute_en;
        $info->sno_xarisxi_mexute_ru=$request->sno_mineral_mexute_ru;


        $info->save();
        return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');

    }


    public function sno_xarisxi_update_image_one(Request $request){


        $this->validate($request, [
            'filesToUpload1' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
         ]);

         $randomi = time();

         $sno_likage_update_image_one= $request->file('filesToUpload1');
         $thumbnailImage = Image::make($sno_likage_update_image_one);
         $thumbnailPath = public_path().'/images/';
         $thumbnailImage->save($thumbnailPath.$randomi.$sno_likage_update_image_one->getClientOriginalName());
         $image_one = $randomi.$sno_likage_update_image_one->getClientOriginalName();

         $info = Snoxarisxi::where('sno_xarisxi_id', '=', '1')->first();
         $info->sno_xarisxi_image1=$image_one;
         $info->save();
        return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');

    }



    public function sno_xarisxi_update_image_two(Request $request){


        $this->validate($request, [
            'filesToUpload1' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
         ]);

         $randomi = time();

         $sno_likage_update_image_one= $request->file('filesToUpload1');
         $thumbnailImage = Image::make($sno_likage_update_image_one);
         $thumbnailPath = public_path().'/images/';
         $thumbnailImage->save($thumbnailPath.$randomi.$sno_likage_update_image_one->getClientOriginalName());
         $image_one = $randomi.$sno_likage_update_image_one->getClientOriginalName();

         $info = Snoxarisxi::where('sno_xarisxi_id', '=', '1')->first();
         $info->sno_xarisxi_image2=$image_one;
         $info->save();
        return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');

    }
    

    public function sno_xarisxi_update_image_three(Request $request){


        $this->validate($request, [
            'filesToUpload1' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
         ]);

         $randomi = time();

         $sno_likage_update_image_one= $request->file('filesToUpload1');
         $thumbnailImage = Image::make($sno_likage_update_image_one);
         $thumbnailPath = public_path().'/images/';
         $thumbnailImage->save($thumbnailPath.$randomi.$sno_likage_update_image_one->getClientOriginalName());
         $image_one = $randomi.$sno_likage_update_image_one->getClientOriginalName();

         $info = Snoxarisxi::where('sno_xarisxi_id', '=', '1')->first();
         $info->sno_xarisxi_image3=$image_one;
         $info->save();
        return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');

    }
    

    public function contact()
    {
        $contact = Contact::find(1);
        return view('snoadmin/contact',compact('contact'));
    }

    public function contactUpdate(Request $request, $id)
    {
        $data = $this->validateRequest($request); //გადმოცემული პარამეტრების ვალიდაცია

        $Contact = Contact::find($id);
        $Contact->update($data);

        return redirect()->back();
    }    


    public function validateRequest(Request $request) // ჩემს მიერ შექმნილი ფუნქცია
    {
        return $request->validate([
            'contact_phone' => 'sometimes',
            'contact_email' => 'sometimes',
            'contact_address_ka' => 'sometimes',
            'contact_address_en' => 'sometimes',
            'contact_address_ru' => 'sometimes',
            'contact_twitter' => 'sometimes',
            'contact_facebook' => 'sometimes',
            'contact_youtube' => 'sometimes'
        ]);
    }


    public function company_header_image()
    {
        $root = request()->root();
        $info = Company::get_company_data();
        return view('snoadmin/company_header_image', compact('info'));
    }

    public function eqsport_header_image()
    {
        $root = request()->root();
        $info = Eksporti::get_company_data();
        return view('snoadmin/eqsport_header_image', compact('info'));
    }
    
    public function company_header_image_update(Request $request){


        $this->validate($request, [
            'filesToUpload1' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
         ]);

         $randomi = time();

         $sno_likage_update_image_one= $request->file('filesToUpload1');
         $thumbnailImage = Image::make($sno_likage_update_image_one);
         $thumbnailPath = public_path().'/images/';
         $thumbnailImage->save($thumbnailPath.$randomi.$sno_likage_update_image_one->getClientOriginalName());
         $image_one = $randomi.$sno_likage_update_image_one->getClientOriginalName();

         $info = Company::where('company_id', '=', '1')->first();
         $info->company_header_image=$image_one;
         $info->save();
        return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');

    }

    public function eqsport_header_image_update(Request $request){


        $this->validate($request, [
            'filesToUpload1' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
         ]);

         $randomi = time();

         $sno_likage_update_image_one= $request->file('filesToUpload1');
         $thumbnailImage = Image::make($sno_likage_update_image_one);
         $thumbnailPath = public_path().'/images/';
         $thumbnailImage->save($thumbnailPath.$randomi.$sno_likage_update_image_one->getClientOriginalName());
         $image_one = $randomi.$sno_likage_update_image_one->getClientOriginalName();

         $info = Eksporti::where('eksporti_id', '=', '1')->first();
         $info->eksporti_header_image=$image_one;
         $info->save();
         return redirect()->back()->with('Success', 'წარმატებით დარედაქტირდა');

    }


}
