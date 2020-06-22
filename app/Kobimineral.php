<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Kobimineral extends Model
{

  protected $table = "kobi_mineral";
  protected $primaryKey = 'kobi_mineral_id';
  protected $guarded=[];
  public $timestamps = false;


  public static function get_kobi_mineral(){
    $value=DB::table('kobi_mineral')->where('kobi_mineral_id', '1')->first();
    return $value;
  }





}
