<?php
namespace App\Helpers;
use Auth;
use Carbon\Carbon;
use App\Content;
use DB;
use App\Contact;

class AppHelper
{
      
    

      public function get_content_text($id, $columname)
      {

        $lang = app()->getLocale();
        $get_text = Content::get_content($id);
        $get_text_row = $get_text->$columname;
        return $get_text_row;

      }



      public function get_content_img($id, $columname)
      {

        $get_text = Content::get_content($id);
        $get_text_row = $get_text->$columname;
        return $get_text_row;

      }


      public function get_contact_info($columname){

        $get_text = Contact::get_contact();
        $get_text_row = $get_text->$columname;
        return $get_text_row;
      }





     public static function instance()
     {
         return new AppHelper();
     }
}