<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{

  protected $table = "content";
  protected $primaryKey = 'content_id';
  protected $guarded=[];
  public $timestamps = false;

  

  public static function get_content($id){
    $value=DB::table('content')->where('content_id', $id)->first();
    return $value;
  }





}
