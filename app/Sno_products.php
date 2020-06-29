<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Sno_products extends Model
{

  protected $table = "sno_products";
  protected $primaryKey = 'sno_products_id';
  protected $guarded=[];
  public $timestamps = false;


  public static function get_sno_products(){
    $value=DB::table('sno_products')->orderBy('sno_products_id', 'desc')->get();
    return $value;
  }





}
