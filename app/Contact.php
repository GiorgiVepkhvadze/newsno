<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

  protected $table = "contact";
  protected $primaryKey = 'contact_id';
  protected $guarded=[];
  public $timestamps = false;



}
