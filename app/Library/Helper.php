<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Gloudemans\Shoppingcart\Facades\Cart;


/**
 * this imageUpload function is globally upload any images
 *
 */
class Helper
{
    /**
     * generates the image path if the image path does not exist.
     */
    public static function imageDirectory()
    {
        if (!File::isDirectory(storage_path("app/public/requestImg/"))) {
            File::makeDirectory(storage_path("app/public/requestImg/", 0777, true, true));
        }
        if (!File::isDirectory(storage_path("app/public/thumb/"))) {
            File::makeDirectory(storage_path("app/public/thumb/", 0777, true, true));
        }

    }

    /**
     * upload multiple images.
     *
     * 'required|image|mimes:png,jpg,jpeg|max:5000',
     * dimensions:min_width=250,min_height=500
     * dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000
     */
    public static function multipleImageUpload($mainFile, $imgPath, $reqWidth = false, $reqHeight = false)
    {
        $fileExtention    = $mainFile->getClientOriginalExtension();
        $fileOriginalName = $mainFile->getClientOriginalName();
        $file_size        = $mainFile->getSize();
        $path             = $imgPath;
        $currentTime      = Str::random(16) . time();
        $fileName         = $currentTime . '.' . $fileExtention;

        $mainFile->storeAs('public/', $fileName);
        $img = Image::make($mainFile)->resize($reqWidth, $reqHeight)->save($path . '/requestImg/' . $fileName);
        $img->resize(146, 204)->save($path . '/thumb/' . $fileName);

        $output['status']             = 1;
        $output['file_name']          = $fileName;
        $output['file_original_name'] = $fileOriginalName;
        $output['file_extention']     = $fileExtention;
        $output['file_size']          = $file_size;

        return $output;
    }

    /**
     * upload single image
     */
    public static function singleImageUpload($mainFile, $imgPath, $reqWidth = false, $reqHeight = false)
    {
        $fileExtention    = $mainFile->getClientOriginalExtension();
        $fileOriginalName = $mainFile->getClientOriginalName();
        $file_size        = $mainFile->getSize();
        $path             = $imgPath;
        $currentTime      = Str::random(16) . time();
        $fileName         = $currentTime . '.' . $fileExtention;

        $mainFile->storeAs('public/', $fileName);
        $img = Image::make($mainFile)->resize($reqWidth, $reqHeight)->save($path . '/requestImg/' . $fileName);
        $img->resize(146, 204)->save($path . '/thumb/' . $fileName);

        $output['status']             = 1;
        $output['file_name']          = $fileName;
        $output['file_original_name'] = $fileOriginalName;
        $output['file_extention']     = $fileExtention;
        $output['file_size']          = $file_size;

        return $output;
    }




     // file uploads methods

     public static function singleFileUpload($mainFile)
     {
         $fileExtention    = $mainFile->getClientOriginalExtension();
         $fileOriginalName = $mainFile->getClientOriginalName();
         $file_size        = $mainFile->getSize();
         $currentTime      = Str::random(17);
         $fileName         = $currentTime . '.' . $fileExtention;

         $mainFile->storeAs('public/files', $fileName);

         $output['status']             = 1;
         $output['file_name']          = $fileName;
         $output['file_original_name'] = $fileOriginalName;
         $output['file_extention']     = $fileExtention;
         $output['file_size']          = $file_size;

         return $output;
     }


    // file uploads methods

    public static function fileUpload()
    {
        //
    }

    // Cart Count
    public static function cartCount($user_id=''){

        if(Auth::check()){
            if($user_id=="") $user_id=auth()->user()->id;
            return Cart::where('user_id',$user_id)->where('order_id',null)->sum('quantity');
        }
        else{
            return 0;
        }
    }
    // relationship cart with product
    // public function product(){
    //     return $this->hasOne('App\Models\Admin\Product','id','product_id');
    // }

    public static function getAllProductFromCart($user_id=''){
        if(Auth::check()){
            if($user_id=="") $user_id=auth()->user()->id;
            return Cart::with('product')->where('user_id',$user_id)->where('order_id',null)->get();
        }
        else{
            return 0;
        }
    }
    // Total amount cart
    public static function totalCartPrice($user_id=''){
        if(Auth::check()){
            if($user_id=="") $user_id=auth()->user()->id;
            return Cart::where('user_id',$user_id)->where('order_id',null)->sum('amount');
        }
        else{
            return 0;
        }
    }
}
