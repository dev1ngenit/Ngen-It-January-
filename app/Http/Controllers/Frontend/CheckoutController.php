<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    // Checkout Method
    public function CheckoutCreate(){

         if (Auth::check()) {
             if (Cart::total() > 0) {

        $data['carts'] = Cart::content();
        $data['cartQty'] = Cart::count();
        $data['cartsubTotal'] = Cart::subtotal();
        $data['cartTotal'] = Cart::total();
        $id = Auth::user()->id;
        $data['user'] = User::find($id);
        //dd($data['user']);

        //$divisions = ShipDivision::orderBy('division_name','ASC')->get();
        return view('frontend.pages.cart.checkout',$data);

            }else{
                Toastr::warning('Shopping At list One Product');
                return redirect()->route('shop');

            }


        }else{
            Toastr::warning('You Need to Login First');


         return redirect()->route('client.login');

        }

    } // end method


    public function CheckoutStore(Request $request){
    	//dd($request->all());
    	$data = array();
    	$data['name'] = $request->name;
    	$data['email'] = $request->email;
    	$data['phone'] = $request->phone;
    	$data['postal'] = $request->postal;
        $data['address'] = $request->address;
        $data['city'] = $request->city;
        $data['country'] = $request->country;
        $data['state'] = $request->state;
        $data['work_order'] = $request->work_order;
    	$data['payment_slip'] = $request->payment_slip;
    	$data['notes'] = $request->notes;
        $data['carts'] = Cart::content();
    	$data['cartTotal'] = Cart::total();


    	if ($request->payment_method == 'card') {
    		return view('frontend.pages.payment.stripe',$data);
    	}elseif ($request->payment_method == 'paypal') {
    		return view ('paypal');
    	}else{
            //dd($data);
            return view('frontend.pages.payment.cash',$data);
    	}


    }// end mehtod.

}
