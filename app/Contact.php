<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

  protected $table = "contact";
  protected $primaryKey = 'contact_id';
  protected $guarded=[];
  public $timestamps = false;


  public static function get_contact(){
    $value=DB::table('contact')->where('contact_id', '1')->first();
    return $value;
  }




}
