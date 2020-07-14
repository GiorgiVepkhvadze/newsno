<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{

    protected $table = "order_product";
    protected $primaryKey = 'order_product_id';
    protected $guarded=[];
    public $timestamps = false;


}
