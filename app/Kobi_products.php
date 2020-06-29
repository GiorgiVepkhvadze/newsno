<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Kobi_products extends Model
{

  protected $table = "kobi_products";
  protected $primaryKey = 'kobi_products_id';
  protected $guarded=[];
  public $timestamps = false;


  public static function get_kobi_products(){
    $value=DB::table('kobi_products')->orderBy('kobi_products_id', 'desc')->get();
    return $value;
  }





}
