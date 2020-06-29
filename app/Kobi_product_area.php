<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Kobi_product_area extends Model
{

  protected $table = "kobi_product_area";
  protected $primaryKey = 'kobi_product_area_id';
  protected $guarded=[];
  public $timestamps = false;


  public static function get_kobi_product_area(){
    $value=DB::table('kobi_product_area')->where('kobi_product_area_id', '1')->first();
    return $value;
  }





}
