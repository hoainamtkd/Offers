<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'product';
    protected $fillable = ['name','product_id'];
    public $timestamps  = false;
    public function images()
    {
    	 return $this->hasMany('App\Images');
    }
}
