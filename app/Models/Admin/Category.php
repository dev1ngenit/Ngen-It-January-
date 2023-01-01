<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['title','slug','image','status'];

    public function Catproducts(){
        return $this->hasMany('App\Models\Admin\Product','cat_id','id');
    }
    // public function sub_products(){
    //     return $this->hasMany('App\Models\Product','child_cat_id','id')->where('status','active');
    // }
    public static function getProductByCat($slug){
        // dd($slug);
        return Category::with('Catproducts')->where('slug',$slug)->first();
        // return Product::where('cat_id',$id)->where('child_cat_id',null)->paginate(10);
    }
}
