<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

  protected $table = "blog";
  protected $primaryKey = 'blog_id';
  protected $guarded=[];
  public $timestamps = false;


    //
      public static function getBlogData(){
        $value=DB::table('blog')->orderBy('blog_id', 'asc')->get();
        return $value;
      }

      public static function getBlogData_all(){
        $value=DB::table('blog')->orderBy('blog_id', 'asc')->get();
        return $value;
      }


      public static function getBlogDetails($id){
        $value=DB::table('blog')->where('blog_id', $id)->get();
        return $value;
      }




}
