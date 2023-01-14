<?php

namespace App\Http\Controllers\Client;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Models\Admin\Rfq;
use App\Models\Client\Client;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{

    public function ClientLogin(){
        if (Auth::guard('client')->check()) {
            return redirect()->route('client.dashboard');
        } else {
            return view('client.auth.login');
        }
    } // End Mehtod

    public function clientLoginStore(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|max: 70',
                'password' => 'required|max: 70',
            ],
        );

        if ($validator->passes()) {
            $credentials = $request->only('email', 'password');
            //dd($credentials);
            if (Auth::guard('client')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))){

                //dd($credentials);
                Toastr::success('You have Successfully logged in.');
                return redirect('client/dashboard');
                //
            }else{
                Toastr::error('Login details are not valid');
                return redirect("client/login");

            }




        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
            Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
            return redirect("client/login");
        }



    }

    public function clientRegisterStore(Request $request)
    {
        //dd($request->all());

        $validator = Validator::make(
            $request->all(),
            [
                'name'     => 'required|max:70',
                'email'    => 'required|unique:clients|max:70',
                'password' => 'required|min:6|max:11|confirmed',
            ],
        );
        if ($validator->passes()) {
            $client = Client::create([
                'name'     => $request->name,
                'email'    => $request->email,
                'phone'    => $request->phone,
                'status'   => 'inactive',
                'password' => Hash::make($request->password),
            ]);

            event(new Registered($client));
            Auth::login($client);
            Toastr::success('You have registered Successfully');
            return redirect('client/dashboard');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
            return redirect('client/login');
        }


    }

    public function ClientDashboard(){

        $data['client'] = Auth::guard('client');
        return view('client.pages.dashboard.index',$data);

    }

    public function ClientProfile(){
        if (Auth::guard('client')->user()->id){
            $data['data'] = Client::where('id', Auth::guard('client')->user()->id)->first();
        return view('client.pages.profile.profile',$data);
        }else{
            Toastr::error('Login first.');
            return redirect()->back();
        }
    }

    public function ClientTrack(){
        return view('client.pages.track');
    } // End Mehtod

    public function ClientProfileUpdate(){

        if (Auth::guard('client')->user()->id){
            $data = Client::where('id', Auth::guard('client')->user()->id)->first();
        return view('client.pages.profile_update',compact('data'));
        }else{
            Toastr::error('Login first.');
            return redirect()->back();
        }
    }

    public function ClientProfileStore(Request $request){
        $data = $request->all();

        $check = Client::where('email', $data['email'])->first();

        if ($check) {
            $validator = Validator::make(

                $request->all(),
                //dd($request->all()),
                [
                    'name'    => 'required|max:70',
                    'phone'   => 'numeric|digits:11',
                    'image'   => 'image|mimes:png,jpg,jpeg|max:5000',
                ],
                [
                    'image'   => [
                        'max' => 'The image field must be smaller than 10 MB.',
                    ],
                    'image'   => 'The file must be an image.',
                    'mimes'   => 'The :attribute must be a file of type: PNG - JPEG - JPG'
                ]
            );
        } else {
            $validator = Validator::make(
                $request->all(),
                [
                    'name'    => 'required|max:70',
                    'phone'   => 'numeric|digits:11',
                    'email'   => 'required|email|unique:users,email',
                    'image'   => 'image|mimes:png,jpg,jpeg|max:5000',
                ],
                [
                    'image'   => [
                        'max' => 'The image field must be smaller than 10 MB.',
                    ],
                    'image'   => 'The file must be an image.',
                    'mimes'   => 'The :attribute must be a file of type: PNG - JPEG - JPG'
                ]
            );
        }



        if ($validator->passes()) {
            $id = Auth::guard('client')->user()->id;
            $profile = Client::find($id);
            if ($check) {
                $request->except('email');
            } else {
                $data = $request->all();
            }

            //$data = $request->all();

            if ($request->photo)
                {
                    $destination = 'upload/Profile/user/'.$profile->photo;
                    if (File::exists($destination))
                    {
                        File::delete($destination);
                    }
                    $image = $request->photo;
                    $imagename = time() . '.' . $image->getClientoriginalExtension();
                    $request->photo->move('upload/Profile/user', $imagename);
                    $data['photo'] = $imagename;
                }

            $status = $profile->fill($data)->save();
            Toastr::success('Your Profile Updated Successfully');
            return redirect()->route('client.pages.profile');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
            return redirect()->back();
        }


    } // End Mehtod

    public function ClientChangePassword(){
        return view('admin.pages.profile.change_password');
    } // End Mehtod


    public function ClientUpdatePassword(Request $request){
        // Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        // Match The Old Password
        if (!Hash::check($request->old_password, Auth::guard('client')->user()->password)) {
            return back()->with("error", "Old Password Doesn't Match!!");
        }

        // Update The new password
        User::whereId(Auth::guard('client')->user()->id)->update([
            'password' => Hash::make($request->new_password)

        ]);
        return back()->with("status", "Password Changed Successfully");

    } // End Mehtod




    public function ClientDestroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/client/login');
    } // End Mehtod


    public function ClientRFQ(){

        $data['rfqs'] = Rfq::where('user_id' , Auth::guard('client')->user()->id)->get();
        return view('client.pages.rfq',$data);

    }


}
