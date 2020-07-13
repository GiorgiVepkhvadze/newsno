<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Eksporti;
use App\Snolikage;
use App\Snomineral;
use App\Snoxarisxi;
use App\Sno_product_area;
use App\Sno_products;
use App\Kobi_product_area;
use App\Kobi_products;

use App\Kobilikage;
use App\Blog;

class ClientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $BlogData = Blog::orderBy('blog_id','DESC')->limit('5')->get();
        $lang = app()->getLocale();
        $blog_text = "blog_text_".$lang;
        $blog_title = "blog_title_".$lang;


        return view('main', compact('BlogData', 'lang', 'blog_text', 'blog_title'));
    }

    public function about()
    {
        $Company = "1";
        return view('about', compact('Company'));
    }

    public function export()
    {
        $Eksporti = "1";
        return view('export', compact('Eksporti'));
    }

    public function sno_likage()
    {
        $Snolikage = "1";
        return view('sno_likage', compact('Snolikage'));
    }

    public function sno_quality()
    {
        $Snoxarisxi = "1";
        return view('sno_quality', compact('Snoxarisxi'));
    }


    public function sno_mineral()
    {
        $Snomineral = "1";
        return view('sno_mineral', compact('Snomineral'));
    }


    public function sno_limoni()
    {
        return view('sno_limoni');
    }

    public function kobi_likage()
    {
        $Kobilikage = "1";
        return view('kobi_likage', compact('Kobilikage'));
    }

    public function contact()
    {
        return view('contact');
    }


    public function order()
    {



        return view('order');
    }
    


    public function sno_product()
    {


      $product_list = Sno_products::get_sno_products();
      $header_area = Sno_product_area::get_sno_product_area();
      return view('sno_product', compact('header_area', 'product_list'));

    }
    


    public function kobi_product()
    {

        $product_list = Kobi_products::get_kobi_products();
        $kobi_product_area = Kobi_product_area::get_kobi_product_area();
        return view('kobi_product', compact('kobi_product_area', 'product_list'));

    }
    
    
    public function kobi_mineral()
    {

        $Snomineral = "1";
        return view('kobi_mineral', compact('Snomineral'));

       
    }





    public function admin_login_page()
    {

        return view('cpadmin/login');
    }



    


    
    
    

    
}
