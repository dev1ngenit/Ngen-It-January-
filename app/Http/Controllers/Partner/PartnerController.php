<?php

namespace App\Http\Controllers\Partner;

use Illuminate\Http\Request;
use App\Models\Partner\Partner;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;

class PartnerController extends Controller
{

    public function dashboard()
    {

        $data['partner'] = Auth::guard('partner');
        //dd($data['partner']);
        return view('partner.pages.dashboard.index', $data);
    }

    public function index()
    {
        return view('partner.auth.register');
    }
    public function PartnerRegistration(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name'                   => 'required|max:70',
                'primary_email_address'  => 'required|unique:partners|max:70',
                'password'               => 'required|confirmed',
            ],
        );
        if ($validator->passes()) {
            $partner = Partner::create([
                'name'                   => $request->name,
                'primary_email_address' => $request->primary_email_address,
                'status'   => 'inactive',
                'password'               => Hash::make($request->password),


            ]);

            event(new Registered($partner));

            Auth::login($partner);
            Toastr::success('You have registered Successfully');
            return redirect('partner/dashboard');
        } else {

            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
            return redirect('partner/login');
        }
    }


    public function showLoginForm()
    {
        if (Auth::guard('partner')->check()) {
            return redirect()->route('partner.dashboard');
        } else {
            return view('partner.auth.login');
        }
    }

    /**
     * Handle an incoming admin authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Partnerlogin(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make(
            $request->all(),
            [
                'primary_email_address' => 'required|max:70',
                'password' => 'required|max:70',
            ],
        );

        if ($validator->passes()) {
            $credentials = $request->only('primary_email_address', 'password');
            //dd($credentials);
            if (Auth::guard('partner')->attempt(['primary_email_address' => $request->primary_email_address, 'password' => $request->password], $request->get('remember'))){
            //if (Auth::guard('partner')->attempt(['primary_email_address' => $credentials['primary_email_address'], 'password' => $credentials['password'],])) {
                //dd($credentials);
                Toastr::success('You have Successfully logged in.');
                return redirect('partner/dashboard');

            } else {
                Toastr::error('Login details are not valid');
                return redirect("partner/login");
            }
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
            return redirect("partner/login");
        }
    }

    // public function PartnerLogin(){
    //     return view('partner.auth.login');
    // } // End Mehtod

    public function logout(Request $request)
    {
        Auth::guard('partner')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/partner/login');
    } // End Mehtod
}
