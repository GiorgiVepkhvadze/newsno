<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Snolikage extends Model
{

  protected $table = "sno_likage";
  protected $primaryKey = 'sno_likage_id';
  protected $guarded=[];
  public $timestamps = false;


  public static function get_likage_data(){
    $value=DB::table('sno_likage')->where('sno_likage_id', '1')->first();
    return $value;
  }





}
