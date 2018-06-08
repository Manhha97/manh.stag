<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price','quantity'];
    public static function getALL(){
    	return Product::paginate(env('PAGES'));

    }
}
