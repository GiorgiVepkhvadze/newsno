<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Snomineral extends Model
{

  protected $table = "sno_mineral";
  protected $primaryKey = 'sno_mineral_id';
  protected $guarded=[];
  public $timestamps = false;


  public static function get_sno_mineral(){
    $value=DB::table('sno_mineral')->where('sno_mineral_id', '1')->first();
    return $value;
  }





}
