<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Kobixarisxi extends Model
{

  protected $table = "kobi_xarisxi";
  protected $primaryKey = 'kobi_xarisxi_id';
  protected $guarded=[];
  public $timestamps = false;


  public static function get_kobi_xarisxi(){
    $value=DB::table('kobi_xarisxi')->where('kobi_xarisxi_id', '1')->first();
    return $value;
  }





}
