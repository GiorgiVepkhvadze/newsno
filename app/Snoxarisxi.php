<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Snoxarisxi extends Model
{

  protected $table = "sno_xarisxi";
  protected $primaryKey = 'sno_xarisxi_id';
  protected $guarded=[];
  public $timestamps = false;


  public static function get_sno_xarisxi(){
    $value=DB::table('sno_xarisxi')->where('sno_xarisxi_id', '1')->first();
    return $value;
  }





}
