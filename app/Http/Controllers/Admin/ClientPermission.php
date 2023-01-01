<?php

namespace App\Http\Controllers\Admin;

use Helper;
use App\Models\User;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ClientPermission extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['clientPermissions'] = User::where('role','client')->get();
        return view('admin.pages.client_permission.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.client_permission.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['clientPermissions'] = User::findOrFail($id);
        return view('admin.pages.client_permission.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = User::find($id);
        $validator =
            [
                [
                    'name'      => 'required|string|max:100',
                    'phone'     => 'nullable|max:100',
                    'country'   => 'nullable|max:100',
                    'address'   => 'nullable|max:100',
                    'post_code' => 'nullable|max:100',
                    'email'     => 'required|unique:clients|max:200',
                    'status' => 'in:DEFAULT,inactive',
                    'password'  => 'max:100',
                    'image'     => 'image|nullable|mimes:png,jpg,jpeg|max:5000',
                ]
            ];
        $validator = Validator::make($request->all(), $validator);

        if ($validator->passes()) {
            $mainFile = $request->image;
            $uploadPath = storage_path('app/public/');

            if (isset($mainFile)) {
                $globalFunImg = Helper::singleImageUpload($mainFile, $uploadPath, 100, 227);
            } else {
                $globalFunImg['status'] = 0;
            }

            if (!empty($client)) {
                if ($globalFunImg['status'] == 1) {
                    File::delete(public_path($uploadPath . '/') . $client->image);
                    File::delete(public_path($uploadPath . '/thumb/') . $client->image);
                    File::delete(public_path($uploadPath . '/requestImg/') . $client->image);
                }

                $client->update([
                    'name'      => $request->name,
                    'status'    => $request->status,
                    'phone'     => $request->phone,
                    'country'   => $request->country,
                    'address'   => $request->address,
                    'post_code' => $request->post_code,
                    'email'     => $request->email,
                    'image'     => $globalFunImg['status'] == 1 ? $globalFunImg['file_name'] : $client->image,
                    'password'  => Hash::make($request->password),
                ]);
            }

            Toastr::success('Data has been updated');
        } else {
            // dd(
            //     $validator->messages()
            // );
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 100000]);
            }
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
    }

    public function clientStatus(Request $request){

        //dd($request->id);
        if($request->mode== 'true'){
            DB::table('users')->where('id',$request->id)->update(['status'=>'inactive']);
        }
        else {


            DB::table('users')->where('id',$request->id)->update(['status'=>'active']);
        }
         return response()->json(['msg'=>'Successfully Updated Status', 'status'=>true]);
    }
}
