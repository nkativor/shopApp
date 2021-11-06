<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','price','descripton','image'];

    public function orders()
  {
    return $this->belongsToMany(Order::class,'order_items','product_id','order_id');

  }
}
