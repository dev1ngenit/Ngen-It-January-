<?php

namespace App\Http\Controllers\Client;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
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
        return view('client.auth.login');
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
            if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password'],])) {
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
                'name'     => 'required|max: 70',
                'email'    => 'required|unique:users|max: 70',
                'password' => 'required| min:6| max:7| confirmed',
            ],
        );
        if ($validator->passes()) {
            $client = User::create([
                'name'     => $request->name,
                'email'    => $request->email,
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

        return view('client.dashboard');

    }

    public function ClientProfile(){
        if (Auth::user()->id){
            $data['user'] = User::where('id', Auth::user()->id)->first();
        return view('client.profile',$data);
        }else{
            Toastr::error('Login first.');
            return redirect()->back();
        }
    }

    public function ClientTrack(){
        return view('client.track');
    } // End Mehtod

    public function ClientProfileUpdate(){

        if (Auth::user()->id){
            $data = User::where('id', Auth::user()->id)->first();
        return view('client.profile_update',compact('data'));
        }else{
            Toastr::error('Login first.');
            return redirect()->back();
        }
    }

    public function ClientProfileStore(Request $request){
        $data = $request->all();

        $check = User::where('email', $data['email'])->first();

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
            $id = Auth::user()->id;
            $profile = User::find($id);
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
            return redirect()->route('client.profile');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
            return redirect()->back();
        }


    } // End Mehtod



    public function ClientDestroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/client/login');
    } // End Mehtod


    


}
