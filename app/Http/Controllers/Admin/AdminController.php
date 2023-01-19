<?php

namespace App\Http\Controllers\Admin;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Middleware\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function AdminDashboard(){


        return view('admin.pages.dashboard.index');

    }

    public function AdminLogin(){
        return view('admin.auth.login');
    } // End Mehtod

    public function AdminDestroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    } // End Mehtod

    public function AdminProfile(){

        $id = Auth::user()->id;
        $data = User::find($id);
        return view('admin.pages.profile.index',compact('data'));

    } // End Mehtod

    public function AdminProfileStore(Request $request){


        // return $data;
        $id = Auth::user()->id;
        $profile = User::find($id);
        $data = $request->all();

        //  $data->first_name = $request->first_name;
        //  $data->last_name = $request->last_name;
        //  $data->email = $request->email;
        //  $data->phone = $request->phone;
        //  $data->address = $request->address;
        //  $data->city = $request->city;
        //  $data->country = $request->country;

        if ($request->photo)
            {
                $destination = 'upload/Profile/admin/'.$profile->photo;
                if (File::exists($destination))
                {
                    File::delete($destination);
                }
                $image = $request->file('photo');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                $path = public_path('upload/Profile/admin/'.$name_gen);
                Image::make($image)->resize(376,282)->save($path);
                $data['photo'] = $name_gen;

            }

        $status = $profile->fill($data)->save();
        if($status){
            $notification = array(
                'message' => 'Admin Profile Updated Successfully',
                'alert-type' => 'success'
            );


        }
        else{
            $notification = array(
                'message' => 'Something error is happened!! Please try again.',
                'alert-type' => 'error'
            );
        }
        return redirect()->back()->with($notification);


    } // End Mehtod

    public function AdminChangePassword(){
        return view('admin.pages.profile.change_password');
    } // End Mehtod


    public function AdminUpdatePassword(Request $request){
        // Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        // Match The Old Password
        if (!Hash::check($request->old_password, auth::user()->password)) {
            return back()->with("error", "Old Password Doesn't Match!!");
        }

        // Update The new password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)

        ]);
        return back()->with("status", " Password Changed Successfully");

    } // End Mehtod

    ///////////// Admin All Method //////////////


    public function AllAdmin(){
        $alladminuser = User::where('role','admin')->latest()->get();
        return view('admin.pages.admin.all_admin',compact('alladminuser'));
    }// End Mehtod


    // public function AddAdmin(){
    //     $roles = Role::all();
    //     return view('admin.pages.admin.add_admin',compact('roles'));
    // }// End Mehtod



    public function AdminUserStore(Request $request){

        $user = new User();
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->role = 'admin';
        $user->status = 'active';
        $user->save();

        if ($request->roles) {
            $user->assignRole($request->roles);
        }

         $notification = array(
            'message' => 'New Admin User Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.admin')->with($notification);

    }// End Mehtod




    // public function EditAdminRole($id){

    //     $user = User::findOrFail($id);
    //     $roles = Role::all();
    //     return view('admin.pages.admin.edit_admin',compact('user','roles'));
    // }// End Mehtod


    public function AdminUserUpdate(Request $request,$id){


        $user = User::findOrFail($id);
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->role = 'admin';
        $user->status = 'active';
        $user->save();

        $user->roles()->detach();
        if ($request->roles) {
            $user->assignRole($request->roles);
        }

         $notification = array(
            'message' => 'New Admin User Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.admin')->with($notification);

    }// End Mehtod


    public function DeleteAdminRole($id){

        $user = User::findOrFail($id);
        if (!is_null($user)) {
            $user->delete();
        }

         $notification = array(
            'message' => 'Admin User Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// End Mehtod



}
