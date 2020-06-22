<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Kobilikage extends Model
{

  protected $table = "kobi_likage";
  protected $primaryKey = 'kobi_likage_id';
  protected $guarded=[];
  public $timestamps = false;


  public static function get_likage_data(){
    $value=DB::table('kobi_likage')->where('kobi_likage_id', '1')->first();
    return $value;
  }





}
