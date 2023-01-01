<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    // public function getProductByDeals(){
    //     return $this->hasMany('App\Models\Admin\Product','deals'!= NULL);
    // }
    // public static function getProductByRefurbished(){
    //     // dd($slug);
    //     return $this->hasMany('App\Models\Admin\Product','deals'!= NULL);
    // }
}
