<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Eksporti extends Model
{

  protected $table = "eksporti";
  protected $primaryKey = 'eksporti_id';
  protected $guarded=[];
  public $timestamps = false;

      public static function get_company_data(){
        $value=DB::table('eksporti')->where('eksporti_id', '1')->first();
        return $value;
      }


}
