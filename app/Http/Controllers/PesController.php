<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
use Image;
use File;
use App\Content;
use App\Contact;
use App\Blog;
use App\Sno_products;
use App\Kobi_products;

class PesController extends Controller
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
    public function index()
    {

        return view('cpadmin/home');
    }



    public function content($id)
    {

        $contenti = Content::get_content($id);
        return view('cpadmin/content_edit')->with(compact('contenti')); 
        
    }


    public function content_edit_update(Request $request){

        $data = $request->validate([
            'header_geo' => 'sometimes',
            'header_eng' => 'sometimes',
            'header_rus' => 'sometimes',
            'text_geo' => 'sometimes',
            'text_eng' => 'sometimes',
            'text_rus' => 'sometimes',
            'image1' => 'sometimes',
            'image2' => 'sometimes',
            'image3' => 'sometimes',
            'youtube_poster' => 'sometimes',
            'youtube_url' => 'sometimes',
            'sveti_erti_geo' => 'sometimes',
            'sveti_erti_eng' => 'sometimes',
            'sveti_erti_rus' => 'sometimes',
            'sveti_ori_geo' => 'sometimes',
            'sveti_ori_eng' => 'sometimes',
            'sveti_ori_rus' => 'sometimes',

        ]);

        $Content = Content::find($request->content_id);
        $Content->fill($data);
        $Content->save();
        return redirect()->back();
        
    

   }






   public function content_edit_update_image(Request $request){

    $data = $request->validate([
        'header_geo' => 'sometimes',
        'header_eng' => 'sometimes',
        'header_rus' => 'sometimes',
        'text_geo' => 'sometimes',
        'text_eng' => 'sometimes',
        'text_rus' => 'sometimes',
        'image1' => 'sometimes',
        'image2' => 'sometimes',
        'image3' => 'sometimes',
        'youtube_poster' => 'sometimes',
        'youtube_url' => 'sometimes',
        'sveti_erti_geo' => 'sometimes',
        'sveti_erti_eng' => 'sometimes',
        'sveti_erti_rus' => 'sometimes',
        'sveti_ori_geo' => 'sometimes',
        'sveti_ori_eng' => 'sometimes',
        'sveti_ori_rus' => 'sometimes',
        'image1' => 'sometimes',
        'image2' => 'sometimes',
        'image3' => 'sometimes',
        'youtube_poster' => 'sometimes',
        'youtube_url' => 'sometimes',
    ]);


         $folder_time = date('Y-m-d');
         $path = "image_base";
         File::makeDirectory($path, 0777, true, true);

        ################ 360X175 px
        $originalImage_360X175 = $request->file('filesToUpload1');
        $thumbnailImage_360X175 = Image::make($originalImage_360X175);
        $originalImage_path_360X175 = public_path().'/'.$path.'/';
        $thumbnailImage_360X175->save($originalImage_path_360X175.time().'_360X175_'.$originalImage_360X175->getClientOriginalName()); 
        $image_360X175 =$path.'/'.time().'_360X175_'.$originalImage_360X175->getClientOriginalName(); 

        $image_position = $request->image_position;
        $text = Content::where('content_id', $request->content_id)->first();
        $text->$image_position = $image_360X175;
        $text->save();
        return redirect()->back();
        



    }



    
    public function contact()
    {

        $contact = Contact::get_contact();
        return view('cpadmin/contact')->with(compact('contact'));
        
    }




 public function contact_update(Request $request){


         $contact = Contact::where('contact_id', '1')->first();
         $contact->contact_phone = $request->contact_phone;
         $contact->contact_phone2 = $request->contact_phone2;
         $contact->contact_fax = $request->contact_fax;
         $contact->contact_email = $request->contact_email;
         $contact->contact_address_ka = $request->contact_address_ka;
         $contact->contact_address_en = $request->contact_address_en;
         $contact->contact_address_ru = $request->contact_address_ru;
         $contact->sno_facebook = $request->sno_facebook;
         $contact->sno_insta = $request->sno_insta;
         $contact->sno_youtube = $request->sno_youtube;
         $contact->kobi_facebook = $request->kobi_facebook;
         $contact->kobi_insta = $request->kobi_insta;
         $contact->kobi_youtube = $request->kobi_youtube;
         $contact->save();
         return redirect()->back();


    }





    public function add_blog()
    {

        return view('cpadmin/add_blog');
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




        ################ 172X83 px
        $originalImage_172X83 = $request->file('filesToUpload1');
        $thumbnailImage_172X83 = Image::make($originalImage_172X83);
        $originalImage_path_172X83 = public_path().'/images/';
        $thumbnailImage_172X83->fit(370, 383);
        $thumbnailImage_172X83->save($originalImage_path_172X83.time().'_172X83_'.$originalImage_172X83->getClientOriginalName()); 
        $image_172X83 =time().'_172X83_'.$originalImage_172X83->getClientOriginalName(); 



         $blog->blog_main_pic = $image_172X83;
         $blog->blog_detail_pic = $blog_detail_pic;
         $blog->blog_readed = 0;
         

         $blog->save();

         return back()->with('success', 'Your images has been successfully Upload');
   
    }


    public function list_blog(){

        $Blog = Blog::getBlogData_all();
        return view('cpadmin/all_blog')->with(compact('Blog'));
    }








    public function edit_blog($id)
    {
        $Blog = Blog::find($id);
        return view('cpadmin/edit_blog', compact('Blog'));
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



    public function add_product($id)
    {
        $pid = $id;
        return view('cpadmin/add_product', compact('pid'));
    }



    public function add_product_insert(Request $request){


        $this->validate($request, [
            'filesToUpload1' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
         ]);


         $pid = $request->pid;
         $product_title_ka = $request->product_title_ka;
         $product_title_en = $request->product_title_en;
         $product_title_ru = $request->product_title_ru;
         
         

         if($pid=="1"){



            $blog_main_pic= $request->file('filesToUpload1');
            $thumbnailImage = Image::make($blog_main_pic);
            $thumbnailPath = public_path().'/images/';
            $thumbnailImage->save($thumbnailPath.time().$blog_main_pic->getClientOriginalName());
            $blog_detail_pic = time().$blog_main_pic->getClientOriginalName();


            $product = new Sno_products();
            $product->sno_products_desc_ka=$product_title_ka;
            $product->sno_products_desc_en=$product_title_en;
            $product->sno_products_desc_ru=$product_title_ru;
            $product->sno_products_image=$blog_detail_pic;
            $product->save();
            return redirect()->back();



         }
        

         if($pid=="2"){



            $blog_main_pic= $request->file('filesToUpload1');
            $thumbnailImage = Image::make($blog_main_pic);
            $thumbnailPath = public_path().'/images/';
            $thumbnailImage->save($thumbnailPath.time().$blog_main_pic->getClientOriginalName());
            $blog_detail_pic = time().$blog_main_pic->getClientOriginalName();


            $product = new Kobi_products();
            $product->kobi_products_desc_ka=$product_title_ka;
            $product->kobi_products_desc_en=$product_title_en;
            $product->kobi_products_desc_ru=$product_title_ru;
            $product->kobi_products_image=$blog_detail_pic;
            $product->save();
            return redirect()->back();



         }



    }



    

    
   




    




    /*

  



    ################################## POSTIN AREA

    
    public function post_drop($id)
    {

        $suratebi = Image_post::get_image_with_id($id);
        
        $image_360X175 = $suratebi->image_base_360X175;
        $image_172X83 = $suratebi->image_base_172X83;
        $image_360X245 = $suratebi->image_base_360X245;
        $image_230X155 = $suratebi->image_base_230X155;
        $image_750X500 = $suratebi->image_base_750X500;
        $image_1150X400 = $suratebi->image_base_1150X400;
        File::delete($image_360X175, $image_172X83, $image_360X245, $image_230X155, $image_750X500, $image_1150X400);
        DB::table('post_base')->where('post_base_c_id',$id)->delete();
        return redirect()->back();
        
    }

    public function add_post($id)
    {

        $list = Post::get_post_with_category($id);
        $category_id = $id;
        return view('cpadmin/add_post')->with(compact('category_id'));   

        
    }




    public function add_post_insert(Request $request){

        $this->validate($request, [
            'filesToUpload1' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
         ]);



         $category_id = $request->category_id;
         $post_title = $request->post_title;
         $post_text = $request->post_text;
         $filesToUpload1 = $request->filesToUpload1;
         $post_leng = $request->post_leng;

         $folder_time = date('Y-m-d');
         $path = "category/".$category_id."/".$folder_time;
         File::makeDirectory($path, 0777, true, true);
         $post = new Post();
         $post->post_base_c_id=$category_id;
         $post->post_base_title=$post_title;
         $post->post_base_text=$post_text;
         $post->post_base_readed=0;
         $post->post_base_time = date('Y-m-d H:i:s');
         $post->post_base_banner=0;
         $post->post_base_lang_id=$post_leng;
         $post->save();
         $last_id  = $post->post_base_id;


         


         
        ################ 360X175 px
        $originalImage_360X175 = $request->file('filesToUpload1');
        $thumbnailImage_360X175 = Image::make($originalImage_360X175);
        $originalImage_path_360X175 = public_path().'/'.$path.'/';
        $thumbnailImage_360X175->fit(360,175);
        $thumbnailImage_360X175->save($originalImage_path_360X175.time().'_360X175_'.$originalImage_360X175->getClientOriginalName()); 
        $image_360X175 =$path.'/'.time().'_360X175_'.$originalImage_360X175->getClientOriginalName(); 




        ################ 172X83 px
        $originalImage_172X83 = $request->file('filesToUpload1');
        $thumbnailImage_172X83 = Image::make($originalImage_172X83);
        $originalImage_path_172X83 = public_path().'/'.$path.'/';
        $thumbnailImage_172X83->fit(172, 83);
        $thumbnailImage_172X83->save($originalImage_path_172X83.time().'_172X83_'.$originalImage_172X83->getClientOriginalName()); 
        $image_172X83 =$path.'/'.time().'_172X83_'.$originalImage_172X83->getClientOriginalName(); 




        ################ 360X245 px
        $originalImage_360X245 = $request->file('filesToUpload1');
        $thumbnailImage_360X245 = Image::make($originalImage_360X245);
        $originalImage_path_360X245 = public_path().'/'.$path.'/';
        $thumbnailImage_360X245->fit(360, 245);
        $thumbnailImage_360X245->save($originalImage_path_360X245.time().'_360X245_'.$originalImage_360X245->getClientOriginalName()); 
        $image_360X245 =$path.'/'.time().'_360X245_'.$originalImage_360X245->getClientOriginalName(); 




         ################ 230X155 px
         $originalImage_230X155 = $request->file('filesToUpload1');
         $thumbnailImage_230X155 = Image::make($originalImage_230X155);
         $originalImage_path_230X155 = public_path().'/'.$path.'/';
         $thumbnailImage_230X155->fit(230, 155);
         $thumbnailImage_230X155->save($originalImage_path_230X155.time().'_230X155_'.$originalImage_230X155->getClientOriginalName()); 
         $image_230X155 =$path.'/'.time().'_230X155_'.$originalImage_230X155->getClientOriginalName(); 



 
        ################ 750X500 px
        $originalImage_750X500 = $request->file('filesToUpload1');
        $thumbnailImage_750X500 = Image::make($originalImage_750X500);
        $originalImage_path_750X500 = public_path().'/'.$path.'/';
        $thumbnailImage_750X500->fit(750, 500);
        $thumbnailImage_750X500->save($originalImage_path_750X500.time().'_750X500_'.$originalImage_750X500->getClientOriginalName()); 
        $image_750X500 =$path.'/'.time().'_750X500_'.$originalImage_750X500->getClientOriginalName(); 



        ################ 1150X400 px
        $originalImage_1150X400 = $request->file('filesToUpload1');
        $thumbnailImage_1150X400 = Image::make($originalImage_1150X400);
        $originalImage_path_1150X400 = public_path().'/'.$path.'/';
        $thumbnailImage_1150X400->fit(1150, 400);
        $thumbnailImage_1150X400->save($originalImage_path_1150X400.time().'_1150X400_'.$originalImage_1150X400->getClientOriginalName()); 
        $image_1150X400 =$path.'/'.time().'_1150X400_'.$originalImage_1150X400->getClientOriginalName();
       
           

         $image = new Image_post();
         $image->image_base_post_id=$last_id;
         $image->image_base_360X175=$image_360X175;
         $image->image_base_172X83=$image_172X83;
         $image->image_base_360X245=$image_360X245;
         $image->image_base_230X155=$image_230X155;
         $image->image_base_750X500=$image_750X500;
         $image->image_base_1150X400=$image_1150X400;
         $image->save();

         return redirect()->back();
          


    }

    








    public function get_about()
    {

        $text = Text_area::get_about_text();
        return view('cpadmin/about')->with(compact('text'));
        
    }


    public function get_about_update(Request $request){
        $text = Text_area::where('text_area_id', '1')->first();
        $text->text_area_geo = $request->about_text_geo;
        $text->text_area_eng = $request->about_text_eng;
        $text->save();
        return redirect()->back();

   }


    public function get_advert()
    {

        $text = Text_area::get_advert_text();
        return view('cpadmin/advert')->with(compact('text'));
        
    }



    public function get_advert_update(Request $request){
        $text = Text_area::where('text_area_id', '2')->first();
        $text->text_area_geo = $request->advert_text_geo;
        $text->text_area_eng = $request->advert_text_eng;
        $text->save();
        return redirect()->back();

   }







   

    
    
    public function post_edit($id)
    {

        $cpost = Post::get_post_with_id($id);
        return view('cpadmin/post_edit')->with(compact('cpost'));
    

    }


    public function post_edit_update(Request $request){


        $category_id = $request->category_id;
        $post_title = $request->post_title;
        $post_text = $request->post_text;
        $post_leng = $request->post_leng;
        $post_id = $request->post_leng;

        $post = Post::where('post_base_id', $post_id)->first();
        $post->post_base_c_id=$category_id;
        $post->post_base_title=$post_title;
        $post->post_base_text=$post_text;
        $post->post_base_lang_id=$post_leng;
        $post->save();
        return redirect()->back();

    }

    
    public function post_edit_update_image(Request $request){

      
        $this->validate($request, [
            'filesToUpload1' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
         ]);

         $post_id = $request->post_id;
         $filesToUpload1 = $request->filesToUpload1;
         $category_id = $request->category_id;


        
         $folder_time = date('Y-m-d');
         $path = "category/".$category_id."/".$folder_time;
         File::makeDirectory($path, 0777, true, true);
    
         
        ################ 360X175 px
        $originalImage_360X175 = $request->file('filesToUpload1');
        $thumbnailImage_360X175 = Image::make($originalImage_360X175);
        $originalImage_path_360X175 = public_path().'/'.$path.'/';
        $thumbnailImage_360X175->fit(360,175);
        $thumbnailImage_360X175->save($originalImage_path_360X175.time().'_360X175_'.$originalImage_360X175->getClientOriginalName()); 
        $image_360X175 =$path.'/'.time().'_360X175_'.$originalImage_360X175->getClientOriginalName(); 




        ################ 172X83 px
        $originalImage_172X83 = $request->file('filesToUpload1');
        $thumbnailImage_172X83 = Image::make($originalImage_172X83);
        $originalImage_path_172X83 = public_path().'/'.$path.'/';
        $thumbnailImage_172X83->fit(172, 83);
        $thumbnailImage_172X83->save($originalImage_path_172X83.time().'_172X83_'.$originalImage_172X83->getClientOriginalName()); 
        $image_172X83 =$path.'/'.time().'_172X83_'.$originalImage_172X83->getClientOriginalName(); 




        ################ 360X245 px
        $originalImage_360X245 = $request->file('filesToUpload1');
        $thumbnailImage_360X245 = Image::make($originalImage_360X245);
        $originalImage_path_360X245 = public_path().'/'.$path.'/';
        $thumbnailImage_360X245->fit(360, 245);
        $thumbnailImage_360X245->save($originalImage_path_360X245.time().'_360X245_'.$originalImage_360X245->getClientOriginalName()); 
        $image_360X245 =$path.'/'.time().'_360X245_'.$originalImage_360X245->getClientOriginalName(); 




         ################ 230X155 px
         $originalImage_230X155 = $request->file('filesToUpload1');
         $thumbnailImage_230X155 = Image::make($originalImage_230X155);
         $originalImage_path_230X155 = public_path().'/'.$path.'/';
         $thumbnailImage_230X155->fit(230, 155);
         $thumbnailImage_230X155->save($originalImage_path_230X155.time().'_230X155_'.$originalImage_230X155->getClientOriginalName()); 
         $image_230X155 =$path.'/'.time().'_230X155_'.$originalImage_230X155->getClientOriginalName(); 



 
        ################ 750X500 px
        $originalImage_750X500 = $request->file('filesToUpload1');
        $thumbnailImage_750X500 = Image::make($originalImage_750X500);
        $originalImage_path_750X500 = public_path().'/'.$path.'/';
        $thumbnailImage_750X500->fit(750, 500);
        $thumbnailImage_750X500->save($originalImage_path_750X500.time().'_750X500_'.$originalImage_750X500->getClientOriginalName()); 
        $image_750X500 =$path.'/'.time().'_750X500_'.$originalImage_750X500->getClientOriginalName(); 



        ################ 1150X400 px
        $originalImage_1150X400 = $request->file('filesToUpload1');
        $thumbnailImage_1150X400 = Image::make($originalImage_1150X400);
        $originalImage_path_1150X400 = public_path().'/'.$path.'/';
        $thumbnailImage_1150X400->fit(1150, 400);
        $thumbnailImage_1150X400->save($originalImage_path_1150X400.time().'_1150X400_'.$originalImage_1150X400->getClientOriginalName()); 
        $image_1150X400 =$path.'/'.time().'_1150X400_'.$originalImage_1150X400->getClientOriginalName();
       
        $image = Image_post::where('image_base_post_id', $post_id)->first();
        $image->image_base_360X175=$image_360X175;
        $image->image_base_172X83=$image_172X83;
        $image->image_base_360X245=$image_360X245;
        $image->image_base_230X155=$image_230X155;
        $image->image_base_750X500=$image_750X500;
        $image->image_base_1150X400=$image_1150X400;
        $image->save();
        return redirect()->back();
            
    
    }
        


    public function banner_view($id)
    {

        $banner = Category_banner::get_banner_with_cat($id);
        return view('cpadmin/banner_view_category')->with(compact('banner'));

    }



    public function banner_view_update(Request $request){

        $this->validate($request, [
            'photo' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
         ]);

        $category_banner_id = $request->category_banner_id;
        $category_banner_identifikator_url = $request->category_banner_identifikator_url;
        $category_banner_identifikator_photo = $request->category_banner_identifikator_photo;
        $photo = $request->photo;
        $url = $request->url;

        $folder_time = date('Y-m-d');
        $path = "banner/".$category_banner_id."/".$folder_time;
        File::makeDirectory($path, 0777, true, true);

        ################ დამუშავება
        $originalImage_1150X400 = $request->file('photo');
        $thumbnailImage_1150X400 = Image::make($originalImage_1150X400);
        $originalImage_path_1150X400 = public_path().'/'.$path.'/';
        $thumbnailImage_1150X400->save($originalImage_path_1150X400.time().'_banner_'.$originalImage_1150X400->getClientOriginalName()); 
        $image_1150X400 =$path.'/'.time().'_banner_'.$originalImage_1150X400->getClientOriginalName();

        $banner = Category_banner::where('category_banner_id', $category_banner_id)->first();
        $banner->$category_banner_identifikator_url=$url;
        $banner->$category_banner_identifikator_photo=$image_1150X400;
        $banner->save();
        return redirect()->back();

    }

    



    public function new_show()
    {
        $test = "1";
        return view('cpadmin/new_show')->with(compact('test'));
    }

    public function new_show_insert(Request $request){
        $this->validate($request, [
            'filesToUpload1' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
         ]);
         $show_title = $request->show_title;
         $filesToUpload1 = $request->filesToUpload1;
         $folder_time = date('Y-m-d');
         $path = "tvshow/".$folder_time;
         File::makeDirectory($path, 0777, true, true);
         ################ დამუშავება
         $originalImage_1150X400 = $request->file('filesToUpload1');
         $thumbnailImage_1150X400 = Image::make($originalImage_1150X400);
         $originalImage_path_1150X400 = public_path().'/'.$path.'/';
         $thumbnailImage_1150X400->fit(300, 250);
         $thumbnailImage_1150X400->save($originalImage_path_1150X400.time().'_tvshow_'.$originalImage_1150X400->getClientOriginalName()); 
         $image_1150X400 =$path.'/'.time().'_tvshow_'.$originalImage_1150X400->getClientOriginalName();
         $show = new Pixel_gadacema();
         $show->pixel_gadacema_name=$show_title;
         $show->pixel_gadacema_poster=$image_1150X400;
         $show->save();
         return redirect()->back();
         
    }

    


    public function all_show()
    {

        $list_show = Pixel_gadacema::get_pixel_gadacema_list();
        return view('cpadmin/all_show')->with(compact('list_show'));

    }


    public function show_edit($id)
    {

        $gadacema = Pixel_gadacema::get_pixel_gadacema_with_id($id);
        return view('cpadmin/show_edit')->with(compact('gadacema'));
        

    }

    public function show_edit_update_text(Request $request){
        $pixel_gadacema_id = $request->pixel_gadacema_id;
        $pixel_gadacema_name = $request->pixel_gadacema_name;
        $pixel = Pixel_gadacema::where('pixel_gadacema_id', $pixel_gadacema_id)->first();
        $pixel->pixel_gadacema_name=$pixel_gadacema_name;
        $pixel->save();
        return redirect()->back();

    }

    public function show_edit_update_image(Request $request){


        $this->validate($request, [
            'filesToUpload1' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
         ]);

        $filesToUpload1 = $request->filesToUpload1;
        $pixel_gadacema_id = $request->pixel_gadacema_id;
        $folder_time = date('Y-m-d');
        $path = "tvshow/".$folder_time;
        File::makeDirectory($path, 0777, true, true);
        ################ დამუშავება
        $originalImage_1150X400 = $request->file('filesToUpload1');
        $thumbnailImage_1150X400 = Image::make($originalImage_1150X400);
        $originalImage_path_1150X400 = public_path().'/'.$path.'/';
        $thumbnailImage_1150X400->fit(300, 250);
        $thumbnailImage_1150X400->save($originalImage_path_1150X400.time().'_tvshow_'.$originalImage_1150X400->getClientOriginalName()); 
        $image_1150X400 =$path.'/'.time().'_tvshow_'.$originalImage_1150X400->getClientOriginalName();
        $pixel = Pixel_gadacema::where('pixel_gadacema_id', $pixel_gadacema_id)->first();
        $pixel->pixel_gadacema_poster=$image_1150X400;
        $pixel->save();
        return redirect()->back();
        
       
        
    }


    public function show_drop($id)
    {

        DB::table('Pixel_gadacema')->where('pixel_gadacema_id',$id)->delete();
        return redirect()->back();
        
    }



    public function upload_show()
    {

        $list = Pixel_gadacema::get_pixel_gadacema_list();
        return view('cpadmin/upload_show')->with(compact('list'));

    }



    ######################################################### gasaketebelia
    public function upload_show_insert(Request $request){


        $request->validate([
            'youtubeurl' => 'required',
            
        ]);


        $youtube_rul =  $this->getYouTubeVideoId($request->youtubeurl);

        $active_user_id = Auth::user()->id;

        $new_post = new User_Post();
        $new_post->user_id=$active_user_id;
        $new_post->ftext = $request->ftext;
        $new_post->xurl=$youtube_rul;
        $new_post->ip=request()->ip();
        $new_post->typeid="6";
        $new_post->save();
        return redirect()->back();
        
        //video_title
        //video_category
        //video_url
        return redirect()->back();
    }
   
    
    


    public static function getYouTubeVideoId($url)
    {
        if(!empty($url))
        {
            $video_id = false;
            $url = parse_url($url);
            if (strcasecmp($url['host'], 'youtu.be') === 0)
            {
                #### (dontcare)://youtu.be/<video id>
                $video_id = substr($url['path'], 1);
            }
            elseif (strcasecmp($url['host'], 'www.youtube.com') === 0)
            {
                if (isset($url['query']))
                {
                    parse_str($url['query'], $url['query']);
                    if (isset($url['query']['v']))
                    {
                        #### (dontcare)://www.youtube.com/(dontcare)?v=<video id>
                        $video_id = $url['query']['v'];
                    }
                }
                if ($video_id == false)
                {
                    $url['path'] = explode('/', substr($url['path'], 1));
                    if (in_array($url['path'][0], array('e', 'embed', 'v')))
                    {
                        #### (dontcare)://www.youtube.com/(whitelist)/<video id>
                        $video_id = $url['path'][1];
                    }
                }
            }
        }
        else
        {
            $video_id = '';
        }

        return $video_id;
    }



    
    public function slide_list()
    {

        $list = Post::get_post_banner_id();
        return view('cpadmin/all_slide')->with(compact('list'));

    }




    public function up_position($id)
    {

        $pos = Banner_manager::where('banner_manager_post_id', $id)->first();
        $sort = $pos->banner_manager_sort_id;
        $new_sort = $sort-1;
        $pos->banner_manager_sort_id=$new_sort;
        $pos->save();
        return redirect()->back();

    }


    public function down_position($id)
    {

        $pos = Banner_manager::where('banner_manager_post_id', $id)->first();
        $sort = $pos->banner_manager_sort_id;
        $new_sort = $sort+1;
        $pos->banner_manager_sort_id=$new_sort;
        $pos->save();
        return redirect()->back();
        

    }



    public function active_slider($id)
    {

        $pos = Post::where('post_base_id', $id)->first();
        $pos->post_base_banner=1;
        $pos->save();

        $Banner_manager = new Banner_manager();
        $Banner_manager->banner_manager_post_id=$id;
        $Banner_manager->banner_manager_sort_id=0;
        $Banner_manager->save(); 
        return redirect()->back();

    }
    

    
    
    public function disable_slider($id)
    {
        $pos = Post::where('post_base_id', $id)->first();
        $pos->post_base_banner=0;
        $pos->save();
        DB::table('banner_manager')->where('banner_manager_post_id',$id)->delete();
        return redirect()->back();

    }
    


    */



}
