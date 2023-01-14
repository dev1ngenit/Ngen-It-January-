<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Brand;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Category;
use App\Models\Admin\SubCategory;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Admin\SubSubCategory;

class ShopController extends Controller
{

 
    //Custom Product Filtering

    public function CustomProduct()
    {

        if (!empty($_GET['customCategory'])) {
            $slug = $_GET['customCategory'];
            if (Category::getProductByCat($slug)) {
                $cat =Category::where('slug', $slug)->first();
                $categories = SubCategory::where('cat_id',$cat->id)->orderBy('title','ASC')->get();
                $subcategories = SubSubCategory::where('cat_id',$cat->id)->orderBy('title','ASC')->get();
            }

        }
        if (!empty($_GET['customBrand'])) {{
            $slug = $_GET['customBrand'];
                $cat =Brand::where('slug', $slug)->first();
                $categories = DB::table('categories')
                            ->join('products', 'categories.id', '=', 'products.cat_id')
                            ->join('brands','products.brand_id', '=','brands.id' )
                            ->where('brands.id', '=', $cat->id)
                            ->select('categories.id','categories.slug','categories.title','categories.image')
                            ->get();
                            //dd($categories);
                $subcategories = DB::table('sub_categories')
                                ->join('products', 'sub_categories.id', '=', 'products.sub_cat_id')
                                ->join('brands','products.brand_id', '=','brands.id' )
                                ->where('brands.id', '=', $cat->id)
                                ->select('sub_categories.id','sub_categories.slug','sub_categories.title','sub_categories.image')
                                ->get();
            }
        }


        $products = Product::query();

        if (!empty($_GET['customCategory'])) {
            $slug = $_GET['customCategory'];
            if (Category::getProductByCat($slug)) {
                $products =  DB::table('products')
                            ->join('categories', 'products.cat_id', '=', 'categories.id')
                            ->select( '*')
                            ->where('categories.slug', '=', $slug);
                }
        }

        if (!empty($_GET['customBrand'])) {
            $slug = $_GET['customBrand'];
            if (Brand::getProductByBrand($slug)) {
                //dd($slug);
                $products = DB::table('products')
                            ->join('brands', 'products.brand_id', '=', 'brands.id')

                            ->where('brands.slug', '=', $slug)
                            ->select('products.id','products.slug','products.name','products.thumbnail','products.price','products.discount','products.stock','products.mf_code','products.sku_code','products.short_desc')
                            ;
                            //dd($products);
            }

        }

        if (!empty($_GET['keyword'])) {
            // $slugs = explode(',',$_GET['brand']);
            $keyword = $_GET['keyword'];
            //$brandIds = Brand::select('id')->whereIn('slug',$slugs)->pluck('id')->toArray();
            $products = Product::where('name','LIKE','%'.$keyword.'%');
        }

        if (!empty($_GET['category'])) {
            $slugs = explode(',',$_GET['category']);
            $catIds = SubCategory::select('id')->whereIn('slug',$slugs)->pluck('id')->toArray();
           $products = $products->whereIn('sub_cat_id',$catIds);
        }
        if (!empty($_GET['subcategory'])) {
            $slugs = explode(',',$_GET['subcategory']);
            $catIds = SubCategory::select('id')->whereIn('slug',$slugs)->pluck('id')->toArray();
           $products = $products->whereIn('sub_cat_id',$catIds);
        }
        if (!empty($_GET['brand'])) {
            $slugs = explode(',',$_GET['brand']);
            $brandIds = Brand::select('id')->whereIn('slug',$slugs)->pluck('id')->toArray();
           $products = $products->whereIn('brand_id',$brandIds);
        }



         if(!empty($_GET['sortBy'])){
            if($_GET['sortBy']=='titleASC'){
                $products = $products->orderBy('name','ASC');
            }
            if($_GET['sortBy']=='priceASC'){
                $products = $products->orderBy('price','ASC');
            }
            if($_GET['sortBy']=='titleDESC'){
                $products = $products->orderBy('name','DESC');
            }
            if($_GET['sortBy']=='priceDESC'){
                $products = $products->orderBy('price','DESC');
            }
        }


        // Price Range

        //dd($_GET['price']);
        if(!empty($_GET['price'])){
            $price = explode('-',$_GET['price']);
            $products = $products->whereBetween('price',$price);
         }

        if(!empty($_GET['show'])){
            $products=$products->paginate($_GET['show']);
        }
        else{
            $products=$products->paginate(10);
        }



        $brands = Brand::orderBy('title','ASC')->get();
        $newProduct = Product::orderBy('id','DESC')->limit(3)->get();



        return view('frontend.pages.product.allproduct',compact('products','categories','subcategories','newProduct','brands','cat'));

    }



    public function CustomProductFilter(Request $request , $slug){

        $data = $request->all();

        /// Filter For Category


        $customURL="";
        if(!empty($slug)){
            if (Category::getProductByCat($slug)) {
            $customURL .='&customCategory='.$slug;
            }else{
            $customURL .='&customBrand='.$slug;
            }
        }


        $showURL="";
            if(!empty($data['show'])){
                $showURL .='&show='.$data['show'];
            }

            $sortByURL='';
            if(!empty($data['sortBy'])){
                $sortByURL .='&sortBy='.$data['sortBy'];
            }

        $catUrl = "";
        if (!empty($data['category'])) {
            foreach($data['category'] as $category){
                if (empty($catUrl)) {
                    $catUrl .= '&category='.$category;
                }else{
                    $catUrl .= ','.$category;
                }
            }
        }
        $subcatUrl = "";
        if (!empty($data['subcategory'])) {
            foreach($data['subcategory'] as $subcategory){
                if (empty($subcatUrl)) {
                    $subcatUrl .= '&subcategory='.$subcategory;
                }else{
                    $subcatUrl .= ','.$subcategory;
                }
            }
        }


        /// Filter For Brand

        $brandUrl = "";
        if (!empty($data['brand'])) {
            foreach($data['brand'] as $brand){
                if (empty($brandUrl)) {
                    $brandUrl .= '&brand='.$brand;
                }else{
                    $brandUrl .= ','.$brand;
                }
            }
        }

        //keyword
        $keywordURL='';
            if(!empty($data['keyword'])){
                $keywordURL .='&keyword='.$data['keyword'];
            }

        /// Filter For Price Range

        $priceRangeUrl = "";
        if (!empty($data['price_range'])) {
           $priceRangeUrl .= '&price='.$data['price_range'];
        }


        return redirect()->route('custom.shop',$customURL.$showURL.$sortByURL.$catUrl.$brandUrl.$priceRangeUrl.$keywordURL);

    }// End Method













    public function Shop(){


        $products = Product::query();

        if (!empty($_GET['keyword'])) {
            // $slugs = explode(',',$_GET['brand']);
            $keyword = $_GET['keyword'];
            //$brandIds = Brand::select('id')->whereIn('slug',$slugs)->pluck('id')->toArray();
            $products = Product::where('name','LIKE','%'.$keyword.'%');
        }

        if (!empty($_GET['category'])) {
            $slugs = explode(',',$_GET['category']);
            $catIds = Category::select('id')->whereIn('slug',$slugs)->pluck('id')->toArray();
           $products = Product::whereIn('cat_id',$catIds);
        }
        if (!empty($_GET['brand'])) {
            $slugs = explode(',',$_GET['brand']);
            $brandIds = Brand::select('id')->whereIn('slug',$slugs)->pluck('id')->toArray();
           $products = Product::whereIn('brand_id',$brandIds);
        }



         if(!empty($_GET['sortBy'])){
            if($_GET['sortBy']=='titleASC'){
                $products = $products->orderBy('name','ASC');
            }
            if($_GET['sortBy']=='priceASC'){
                $products = $products->orderBy('price','ASC');
            }
            if($_GET['sortBy']=='titleDESC'){
                $products = $products->orderBy('name','DESC');
            }
            if($_GET['sortBy']=='priceDESC'){
                $products = $products->orderBy('price','DESC');
            }
        }


        // Price Range

        //dd($_GET['price']);
        if(!empty($_GET['price'])){
            $price = explode('-',$_GET['price']);
            $products = $products->whereBetween('price',$price);
         }

        if(!empty($_GET['show'])){
            $products=$products->paginate($_GET['show']);
        }
        else{
            $products=$products->paginate(10);
        }

      $categories = Category::orderBy('title','ASC')->get();
      $brands = Brand::orderBy('title','ASC')->get();
      $newProduct = Product::orderBy('id','DESC')->limit(3)->get();

      return view('frontend.pages.product.shop_page',compact('products','categories','newProduct','brands'));

    } // End Method


    public function ShopFilter(Request $request){

        $data = $request->all();

        /// Filter For Category

        $showURL="";
            if(!empty($data['show'])){
                $showURL .='&show='.$data['show'];
            }

            $sortByURL='';
            if(!empty($data['sortBy'])){
                $sortByURL .='&sortBy='.$data['sortBy'];
            }

        $catUrl = "";
        if (!empty($data['category'])) {
            foreach($data['category'] as $category){
                if (empty($catUrl)) {
                    $catUrl .= '&category='.$category;
                }else{
                    $catUrl .= ','.$category;
                }
            }
        }


        /// Filter For Brand

        $brandUrl = "";
        if (!empty($data['brand'])) {
            foreach($data['brand'] as $brand){
                if (empty($brandUrl)) {
                    $brandUrl .= '&brand='.$brand;
                }else{
                    $brandUrl .= ','.$brand;
                }
            }
        }

        //keyword
        $keywordURL='';
            if(!empty($data['keyword'])){
                $keywordURL .='&keyword='.$data['keyword'];
            }

        /// Filter For Price Range

        $priceRangeUrl = "";
        if (!empty($data['price_range'])) {
           $priceRangeUrl .= '&price='.$data['price_range'];
        }



        return redirect()->route('shop',$showURL.$sortByURL.$catUrl.$brandUrl.$priceRangeUrl.$keywordURL);

    }// End Method





































    // public function ConditionalProduct($id){
    //     if ($id == 'refurbished') {
    //         $data['categories'] = Category::orderBy('title','ASC')->get();
    //         $data['brands'] = Brand::orderBy('title','ASC')->get();
    //         $data['newProduct'] = Product::orderBy('id','DESC')->limit(3)->get();
    //         $data['products'] = Product::where('refurbished', 1)->paginate(10);
    //         return view('frontend.pages.product.shop_page',$data);
    //     } else {
    //         $data['categories'] = Category::orderBy('title','ASC')->get();
    //         $data['brands'] = Brand::orderBy('title','ASC')->get();
    //         $data['newProduct'] = Product::orderBy('id','DESC')->limit(3)->get();
    //         $data['products'] = Product::where('deal'!= NULL)->paginate(10);
    //         return view('frontend.pages.product.shop_page',$data);
    //     }


    // }




}
