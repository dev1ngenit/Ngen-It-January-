<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Brandproducts(){
        return $this->hasMany('App\Models\Admin\Product','brand_id','id');
    }
    public static function getProductByBrand($slug){
        // dd($slug);
        return Brand::with('Brandproducts')->where('slug',$slug)->first();
    }
}
 