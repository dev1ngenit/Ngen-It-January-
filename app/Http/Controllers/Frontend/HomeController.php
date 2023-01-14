<?php

namespace App\Http\Controllers\Frontend;

use Share;
use App\Models\User;
use App\Models\Admin\Blog;
use App\Models\Admin\Brand;
use App\Models\Admin\Client;
use App\Models\Admin\Policy;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Setting;
use App\Models\Admin\Success;
use App\Models\Admin\Category;
use App\Models\Admin\Homepage;
use App\Models\Admin\Industry;
use App\Models\Admin\LearnMore;
use App\Models\Admin\TechGlossy;
use App\Models\Admin\ClientStory;
use App\Models\Admin\SubCategory;
use App\Models\Admin\IndustryPage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Admin\SubSubCategory;
use App\Models\Admin\SubSubSubCategory;
use App\Http\Controllers\Admin\ClientController;
use App\Models\Admin\Feature;
use App\Models\Admin\Row;

class HomeController extends Controller
{

    //Client Authentication

    public function login()
    {
        return view('frontend.auth.login');
    }
    public function register()
    {
        return view('frontend.auth.register');
    }



    //Homepage

    public function index()
    {
        $data['home'] = Homepage::first();

        $data['top_brands'] = Brand::where('category','Top')->latest()->get();
        if ($data['top_brands']) {
            $data['products'] = DB::table('products')
                        ->join('brands', 'products.brand_id', '=', 'brands.id')
                        ->where('brands.category', '=', 'Top')
                        ->select('products.id','products.slug','products.name','products.thumbnail','products.price','products.discount','products.stock','products.mf_code','products.sku_code','products.short_desc')
                        ->get();
        }else{
            $data['products'] = Product::inRandomOrder()->get();
        }

        if ($data['home']) {
        $data['feature1'] = Feature::where('id', $data['home']->story1_id)->first();
        $data['feature2'] = Feature::where('id',$data['home']->story2_id)->first();
        $data['feature3'] = Feature::where('id',$data['home']->story3_id)->first();
        $data['feature4'] = Feature::where('id',$data['home']->story4_id)->first();
        $data['feature5'] = Feature::where('id',$data['home']->story5_id)->first();
        $data['success1'] = Success::where('id',$data['home']->success1_id)->first();
        $data['success2'] = Success::where('id',$data['home']->success2_id)->first();
        $data['success3'] = Success::where('id',$data['home']->success3_id)->first();
        $data['story1'] = ClientStory::where('id',$data['home']->solution1_id)->first();
        $data['story2'] = ClientStory::where('id',$data['home']->solution2_id)->first();
        $data['story3'] = ClientStory::where('id',$data['home']->solution3_id)->first();
        $data['story4'] = ClientStory::where('id',$data['home']->solution4_id)->first();
        $data['techglossy'] = TechGlossy::where('id',$data['home']->techglossy_id)->first();
        }

        $data['setting'] = Setting::latest()->first();
        return view('frontend.pages.home.index',$data);
    }

    //Learn More

    public function LearnMore()
    {
        $data['learnmore'] = LearnMore::first();
        if ($data['learnmore']) {
                //     $data['feature1'] = Client::where('id', $data['home']->story1_id)->first();


                // $data['feature2'] = Client::where('id',$data['home']->story2_id)->first();
                // $data['feature3'] = Client::where('id',$data['home']->story3_id)->first();
                // $data['feature4'] = Client::where('id',$data['home']->story4_id)->first();
                // $data['feature5'] = Client::where('id',$data['home']->story5_id)->first();
                // $data['success1'] = Success::where('id',$data['home']->success1_id)->first();
                // $data['success2'] = Success::where('id',$data['home']->success2_id)->first();
                // $data['success3'] = Success::where('id',$data['home']->success3_id)->first();
                $data['story1'] = ClientStory::where('id',$data['learnmore']->success_story_one_id)->first();
                $data['story2'] = ClientStory::where('id',$data['learnmore']->success_story_two_id)->first();
                $data['story3'] = ClientStory::where('id',$data['learnmore']->success_story_three_id)->first();
                //$data['story4'] = ClientStory::where('id',$data['home']->solution4_id)->first();
                //$data['techglossy'] = TechGlossy::where('id',$data['learnmore']->techglossy_id)->first();
                } else {

                }
        $data['industrys'] = Industry::latest()->get();
        $data['setting'] = Setting::latest()->first();
        return view('frontend.pages.learnmore.view',$data);
    }

    //Feature Details
    public function FeatureDetails($id){
        $data['feature'] = Feature::where('id',$id)->first();
        $data['row_one'] = Row::where('id',$data['feature']->row_one_id)->first();
        $data['row_two'] = Row::where('id',$data['feature']->row_two_id)->first();
        $data['features'] = Feature::where('id' , '!=' , $id )->get();
        return view('frontend.pages.feature.feature_details',$data);
    }




    //Contact, Support, Location, RFQ

    public function location()
    {
        return view('frontend.contact.location');
    }

    public function contact()
    {
        $data['setting'] = Setting::latest()->first();

        return view('frontend.pages.contact.contact',$data);
    }

    public function Support()
    {
        $data['setting'] = Setting::latest()->first();
        return view('frontend.pages.contact.support',$data);
    }

    public function RFQCommon()
    {
        $data['setting'] = Setting::latest()->first();
        return view('frontend.pages.common.rfq_common',$data);
    }



 








    //Client Story All Controller
    public function AllStory()
    {
        $data['tag'] = DB::table('client_stories')->pluck('tags');

        $data['tag_items'] = json_decode($data['tag'], true);
        $data['featured_storys'] = ClientStory::inRandomOrder()->limit(4)->get();
        $data['client_storys'] = ClientStory::latest()->paginate(11);

        return view('frontend.pages.story.all_story',$data);
    }

    public function StoryDetails($id)
    {
        // $data['shareComponent'] = Share::page(
        //     'https://www.positronx.io/create-autocomplete-search-in-laravel-with-typeahead-js/',
        //     'Your share text comes here',
        // )
        // ->facebook()
        // ->twitter()
        // ->linkedin()
        // ->telegram()
        // ->whatsapp()
        // ->reddit();
        //$data['industry'] = Industry::where('id',$id)->first();
        $data['blog'] = ClientStory::where('id',$id)->first();
        //$data['industry_page'] = IndustryPage::where('industry_id', $data['industry']->id)->get();
        $data['storys'] = ClientStory::inRandomOrder()->limit(4)->get();
        $data['setting'] = Setting::latest()->first();
        return view('frontend.pages.story.story_details', $data);
    }




    //Blogs All Controller

    public function AllBlog()
    {
        $data['tag'] = DB::table('blogs')->pluck('tags');

        $data['tag_items'] = json_decode($data['tag'], true);
        $data['featured_storys'] = Blog::inRandomOrder()->limit(4)->get();
        $data['client_storys'] = Blog::latest()->paginate(11);

        return view('frontend.pages.blogs.blogs_all',$data);
    }

    public function BlogDetails($id)
    {
        //$data['industry'] = Industry::where('id',$id)->first();
        $data['blog'] = Blog::where('id',$id)->first();
        //$data['industry_page'] = IndustryPage::where('industry_id', $data['industry']->id)->get();
        $data['storys'] = Blog::inRandomOrder()->limit(4)->get();
        $data['setting'] = Setting::latest()->first();
        return view('frontend.pages.blogs.blog_details', $data);
    }



    //Tech Glossy All Controller

    public function AllTechGlossy()
    {
        $data['tag'] = DB::table('tech_glossies')->pluck('tags');

        $data['tag_items'] = json_decode($data['tag'], true);
        $data['featured_storys'] = TechGlossy::inRandomOrder()->limit(4)->get();
        $data['client_storys'] = TechGlossy::latest()->paginate(11);

        return view('frontend.pages.tech.techglossy_all',$data);
    }

    public function TechGlossyDetails($id)
    {
        //$data['industry'] = Industry::where('id',$id)->first();
        $data['techglossy'] = TechGlossy::where('id',$id)->first();
        //$data['industry_page'] = IndustryPage::where('industry_id', $data['industry']->id)->get();
        $data['storys'] = TechGlossy::inRandomOrder()->limit(7)->get();
        $data['setting'] = Setting::latest()->first();
        return view('frontend.pages.tech.techglossy_details', $data);
    }


    //Shop All Controller

    public function shop_html()
    {
        $data['products'] = Product::latest()->get();
        $data['categories'] = Category::latest()->get();
        $data['brands'] = Brand::latest()->get();
        $data['techglossy'] = TechGlossy::inRandomOrder()->first();
        return view('frontend.pages.product.shop_html', $data);
    }


    //Tech Deals
    public function TechDeal(){
        $data['products'] = Product::whereNotNull('deal')->paginate(10);
        $data['brands'] = DB::table('brands')
                        ->join('products', 'brands.id', '=', 'products.brand_id')
                        ->whereNotNull('products.deal')
                        ->select('brands.id','brands.slug','brands.title','brands.image')
                        ->distinct()->get();
        $data['categories'] = DB::table('categories')
                                ->join('products', 'categories.id', '=', 'products.cat_id')
                                ->whereNotNull('products.deal')
                                ->select('categories.id','categories.slug','categories.title','categories.image')
                                ->distinct()->get();
                                //dd($data['categories']);
        $data['refurbished_products'] = Product::where('refurbished' , '1')->get();
        //dd($data['refurbished_products']);
        return view('frontend.pages.tech.deal',$data);
    }

    public function Refurbished(){
        $data['products'] = Product::where('refurbished' , '1')->paginate(10);
        $data['brands'] = DB::table('brands')
                        ->join('products', 'brands.id', '=', 'products.brand_id')
                        ->where('products.refurbished', '=', '1')
                        ->select('brands.id','brands.slug','brands.title','brands.image')
                        ->distinct()->get();
        $data['categories'] = DB::table('categories')
                                ->join('products', 'categories.id', '=', 'products.cat_id')
                                ->where('products.refurbished', '=', '1')
                                ->select('categories.id','categories.slug','categories.title','categories.image')
                                ->distinct()->get();
                                //dd($data['categories']);
        $data['techdeal_products'] = Product::whereNotNull('deal')->get();
        //dd($data['refurbished_products']);
        return view('frontend.pages.tech.refurbished',$data);
    }




    //Product Details

    public function ProductDetails($id)
    {
        //dd($id);

            $data['sproduct'] = Product::where('slug',$id)->first();
            //dd($data['sproduct']);


        if (!empty($data['sproduct']->cat_id)) {
            $data['products'] = Product::where('cat_id', $data['sproduct']->cat_id)->get();
        } else {
            $data['products'] = Product::inRandomOrder()->limit(8)->get();
        }


        return view('frontend.pages.product.product_details', $data);
    }





    //Category All PAge

    public function CategoryCommon($category)
    {
        if ((Category::where('slug',$category)->count()) > 0) {
            $data['category'] = Category::where('slug',$category)->first();
            $data['sub_cats'] = SubCategory::where('cat_id',$data['category']->id)->get();
            $data['sub_sub_cats'] = SubSubCategory::where('cat_id',$data['category']->id)->get();
            //$data['sub_sub_sub_cats'] = SubSubSubCategory::where('cat_id',$data['category']->id)->get();

            $data['products'] = Product::where('cat_id', $data['category']->id)->paginate(10);
            $data['brands'] = DB::table('brands')
                            ->join('products', 'brands.id', '=', 'products.brand_id')
                            ->join('categories','products.cat_id', '=','categories.id' )
                            ->where('categories.id', '=', $data['category']->id)
                            ->select('brands.id','brands.title','brands.image')
                            ->get();
        } elseif((SubCategory::where('slug',$category)->count()) > 0) {
            $data['category'] = SubCategory::where('slug',$category)->first();
            $data['sub_cats'] = SubSubCategory::where('cat_id',$data['category']->id)->get();
            $data['sub_sub_cats'] = SubSubSubCategory::where('cat_id',$data['category']->id)->get();
            //$data['sub_sub_sub_cats'] = SubSubSubCategory::where('cat_id',$data['category']->id)->get();

            $data['products'] = Product::where('sub_cat_id', $data['category']->id)->paginate(10);
            $data['brands'] = DB::table('brands')
                            ->join('products', 'brands.id', '=', 'products.brand_id')
                            ->join('sub_categories','products.sub_cat_id', '=','sub_categories.id' )
                            ->where('sub_categories.id', '=', $data['category']->id)
                            ->select('brands.id','brands.title','brands.image')
                            ->get();
        }



        return view('frontend.pages.category.category', $data);
    }


    public function AllCategory()
    {
        $data['categorys'] = Category::latest()->get();
        $data['sub_cats'] = SubCategory::latest()->get();
        $data['sub_sub_cats'] = SubSubCategory::latest()->get();
        $data['sub_sub_sub_cats'] = SubSubSubCategory::latest()->get();
        $data['top_brands'] = Brand::where('category','Top')->latest()->get();
        if ($data['top_brands']) {
            $data['products'] = DB::table('products')
                        ->join('brands', 'products.brand_id', '=', 'brands.id')
                        ->where('brands.category', '=', 'Top')
                        ->get();
        }else{
            $data['products'] = Product::inRandomOrder()->get();
        }
        return view('frontend.pages.category.category_all',$data);
    }



   ///Brand All Page


    public function BrandCommon($brand)
    {
        //dd($brand);
        $data['brand'] = Brand::where('slug' , $brand)->first();
        $data['top_brands'] = Brand::where('category' , 'top')->get();
        $data['featured_brands'] = Brand::where('category' , 'featured')->get();
        $data['others'] = Brand::where('category' , 'others')->get();
        //dd($data['brand']);
        // $data['sub_cats'] = SubCategory::where('cat_id',$data['category']->id)->get();
        // $data['sub_sub_cats'] = SubSubCategory::where('cat_id',$data['category']->id)->get();
        // $data['sub_sub_sub_cats'] = SubSubSubCategory::where('cat_id',$data['category']->id)->get();

        $data['products'] = Product::where('brand_id', $data['brand']->id)->get();
        $data['categories'] = DB::table('categories')
                        ->join('products', 'categories.id', '=', 'products.cat_id')
                        ->join('brands','products.brand_id', '=','brands.id' )
                        ->where('brands.id', '=', $brand)
                        ->select('categories.id','categories.title','categories.image')
                        ->get();

        return view('frontend.pages.brand.brand_common', $data);
    }

    public function AllBrand()
    {
        $data['top_brands'] = Brand::where('category','Top')->latest()->get();
        $data['featured_brands'] = Brand::where('category','Featured')->orderBy('id','DESC')->get();
        $data['others'] = Brand::all();
        $data['featured_techglossys'] = TechGlossy::inRandomOrder()->first();
        return view('frontend.pages.brand.brand',$data);
    }





    //Industry All Page

    public function AllIndustry()
    {
        $data['industrys'] = Industry::latest()->get();
        $data['features'] = Client::all();
        $data['techglossy'] = Blog::inRandomOrder()->first();
        $data['top_brands'] = Brand::where('category','Top')->latest()->get();
        $data['featured_brands'] = Brand::where('category','Featured')->orderBy('id','DESC')->get();
        $data['others'] = Brand::all();
        $data['featured_techglossy'] = TechGlossy::inRandomOrder()->first();
        return view('frontend.pages.industry.all_industry',$data);
    }

    public function IndustryDetails($id)
    {
        $data['industry'] = Industry::where('id',$id)->first();
        $data['techglossy'] = TechGlossy::inRandomOrder()->first();
        $data['industry_page'] = IndustryPage::where('industry_id', $data['industry']->id)->get();
        $data['storys'] = Blog::inRandomOrder()->limit(6)->get();
        $data['setting'] = Setting::latest()->first();
        return view('frontend.pages.industry.industry_details', $data);
    }


    //Software All Page

    public function AllSoftare()
    {
        $data['top_brands'] = Brand::where('category','Top')->latest()->get();
        $data['featured_brands'] = Brand::where('category','Featured')->orderBy('id','DESC')->get();
        $data['others'] = Brand::all();
        $data['featured_techglossys'] = TechGlossy::inRandomOrder()->first();
        $data['setting'] = Setting::latest()->first();

        return view('frontend.pages.brand.brand',$data);
    }

    public function SoftwareCommon()
    {
        $data['products'] = Product::where('product_type','software')->latest()->get();
        $data['hardware'] = Product::where('product_type','hardware')->latest()->get();
        $data['categories'] = DB::table('categories')
                            ->join('products', 'categories.id', '=', 'products.cat_id')
                            ->where('products.product_type', '=', 'software')
                            ->select('categories.id','categories.slug','categories.title','categories.image')
                            ->distinct()->get();

        $data['brands']     = DB::table('brands')
                            ->join('products', 'brands.id', '=', 'products.brand_id')
                            ->where('products.product_type', '=', 'software')
                            ->select('brands.id','brands.slug','brands.title','brands.image')
                            ->distinct()->get();
        // $data['industries']  = DB::table('industries')
        //                     ->join('products', 'industires.id', '=', 'products.brand_id')
        //                     ->where('products.product_type', '=', 'software')
        //                     ->select('brands.id','brands.slug','brands.title','brands.image')
        //                     ->distinct()->get();

        $data['featured_brands'] = Brand::where('category','Featured')->orderBy('id','DESC')->get();
        $data['others'] = Brand::all();
        $data['story1'] = TechGlossy::inRandomOrder()->first();
        $data['story2'] = Blog::inRandomOrder()->first();
        $data['story3'] = ClientStory::inRandomOrder()->first();
        $data['techglossy'] = TechGlossy::inRandomOrder()->first();
        $data['features'] = Client::inRandomOrder()->limit(2)->get();
        $data['setting'] = Setting::latest()->first();
        $data['industrys'] = Industry::latest()->get();
        return view('frontend.pages.software.allsoftware',$data);
    }

    //Hardware All Pge

    public function HardwareCommon()
    {
        $data['products'] = Product::where('product_type','hardware')->latest()->get();
        $data['hardware'] = Product::where('product_type','hardware')->latest()->get();
        $data['categories'] = DB::table('categories')
                            ->join('products', 'categories.id', '=', 'products.cat_id')
                            ->where('products.product_type', '=', 'hardware')
                            ->select('categories.id','categories.slug','categories.title','categories.image')
                            ->distinct()->get();

        $data['brands']     = DB::table('brands')
                            ->join('products', 'brands.id', '=', 'products.brand_id')
                            ->where('products.product_type', '=', 'hardware')
                            ->select('brands.id','brands.slug','brands.title','brands.image')
                            ->distinct()->get();
        // $data['industries']  = DB::table('industries')
        //                     ->join('products', 'industires.id', '=', 'products.brand_id')
        //                     ->where('products.product_type', '=', 'software')
        //                     ->select('brands.id','brands.slug','brands.title','brands.image')
        //                     ->distinct()->get();

        $data['featured_brands'] = Brand::where('category','Featured')->orderBy('id','DESC')->get();
        $data['others'] = Brand::all();
        $data['story1'] = TechGlossy::inRandomOrder()->first();
        $data['story2'] = Blog::inRandomOrder()->first();
        $data['story3'] = ClientStory::inRandomOrder()->first();
        $data['techglossy'] = TechGlossy::inRandomOrder()->first();
        $data['features'] = Client::inRandomOrder()->limit(2)->get();
        $data['setting'] = Setting::latest()->first();
        $data['industrys'] = Industry::latest()->get();
        return view('frontend.pages.hardware.allhardware',$data);
    }










    //Search All Controller

    public function search(Request $request)
    {
        if ($request->keyword != '') {
            $sproducts = Product::where('title', 'LIKE', '%' . $request->keyword . '%')->get();
        }
        return response()->json([
            'sproducts' => $sproducts
        ]);
    }


     // Product Seach
	public function ProductSearch(Request $request){

		$request->validate(["search" => "required"]);

		$item = $request->search;
        //dd($request->search);
		// echo "$item";
        //$categories = Category::orderBy('title','ASC')->get();
        if (Product::where('name', $item)->first()) {
            $data['sproduct'] = Product::where('name', $item)->first();
            $data['products'] = Product::where('cat_id', $data['sproduct']->cat_id)->get();
            return view('frontend.pages.product.product_details', $data);
        } else {
            $data['categories'] = Category::orderBy('title','ASC')->get();
            $data['brands'] = Brand::orderBy('title','ASC')->get();
            $data['newProduct'] = Product::orderBy('id','DESC')->limit(3)->get();
            $data['products'] = Product::where('name','LIKE','%'.$item.'%')->paginate(10);
		return view('frontend.pages.product.shop_page',$data);
        }



	} // end method


	///// Advance Search Options

	public function SearchProduct(Request $request){


        $query = $request->get('term','');
            //dd($query);
            $products = Product::where('name','LIKE','%'.$query.'%')->get();
            $data = array();
            foreach ($products as $product) {
                $data[] = array('value' =>$product->name , 'id' =>$product->id);
            }
            if (count($data)) {
                return $data;
            }
            else {
               return ['value'=>"No Result Found", 'id'=>''];
            }


	} // end method



    //Terms & Policy
    public function TermsPolicy()
    {
        $data['terms'] = Policy::where('condition','terms')->get();
        $data['policy'] = Policy::where('condition','policy')->get();
        return view('frontend.pages.policy.terms_policy',$data);
    }




























//Common Products

    public function ProductCommon($id)
    {


        $data['products'] = Product::where('product_type', $id)->get();
        // $data['brands'] = DB::table('brands')
        //                 ->join('products', 'brands.id', '=', 'products.brand_id')
        //                 ->join('categories','products.cat_id', '=','categories.id' )
        //                 ->where('categories.id', '=', $category)
        //                 ->select('brands.id','brands.title','brands.image')
        //                 ->get();

        return view('frontend.pages.product.product_common', $data);
    }

    public function rfqCreate(Request $request)
    {

        $data['sales_mans'] = User::where('role', 'sales')->select('users.id', 'users.name')->get();
        return view('frontend.pages.rfq.rfq', $data);
    }



}
