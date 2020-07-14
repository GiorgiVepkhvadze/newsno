<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Boci extends Model
{

  protected $table = "boci";
  protected $primaryKey = 'boci_id';
  protected $guarded=[];
  public $timestamps = false;


}
