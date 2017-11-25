<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

  protected $fillable = ['title','price','subtitle','description','brand','image'];


  public function categories()
  {
    return $this->belongsToMany('App\category','category_products')->withTimestamps();;
  }
}
