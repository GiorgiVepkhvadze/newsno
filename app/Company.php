<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

  protected $table = "company";
  protected $primaryKey = 'company_id';
  protected $guarded=[];
  public $timestamps = false;

      public static function get_company_data(){
        $value=DB::table('company')->where('company_id', '1')->first();
        return $value;
      }


}
