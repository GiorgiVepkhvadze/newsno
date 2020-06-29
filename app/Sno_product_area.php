<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Sno_product_area extends Model
{

  protected $table = "sno_product_area";
  protected $primaryKey = 'sno_product_area_id';
  protected $guarded=[];
  public $timestamps = false;


  public static function get_sno_product_area(){
    $value=DB::table('sno_product_area')->where('sno_product_area_id', '1')->first();
    return $value;
  }





}
