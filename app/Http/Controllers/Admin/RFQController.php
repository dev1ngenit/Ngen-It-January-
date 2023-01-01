<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Admin\Rfq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class RFQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rfqs'] = Rfq::get();
        return view('admin.pages.rfq.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $data['sales_mans'] = User::where('role', 'sales')->select('users.id', 'users.name')->get();
    //     return view('admin.pages.rfq.add', $data);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
            ],
        );

        if ($validator->passes()) {
            RFQ::create([
                'name'            => $request->name,
                'email'           => $request->email,
                'phone'           => $request->phone,
                'company_name'    => $request->company_name,
                'license'         => $request->license,
                'registration_id' => $request->registration_id,
                'pcn_number'      => $request->pcn_number,
                'authorization'   => $request->authorization,
                'message'         => $request->message,
                'message_type'    => $request->message_type,
                'status'          => $request->status,
                'sales_man_id'    => $request->sales_man_id,
            ]);
            Toastr::success('Data successfully Inserted.');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }
        return redirect()->back();
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
        $data['sales_mans'] = User::where('role', 'sales')->select('users.id', 'users.name')->get();
        $data['rfq'] = Rfq::find($id);
        return view('admin.pages.rfq.edit', $data);
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
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
            ],
        );

        if ($validator->passes()) {
            RFQ::find($id)->update([
                'name'            => $request->name,
                'email'           => $request->email,
                'phone'           => $request->phone,
                'company_name'    => $request->company_name,
                'license'         => $request->license,
                'registration_id' => $request->registration_id,
                'pcn_number'      => $request->pcn_number,
                'authorization'   => $request->authorization,
                'message'         => $request->message,
                'message_type'    => $request->message_type,
                'status'          => $request->status,
                'sales_man_id'    => $request->sales_man_id,
            ]);
            Toastr::success('Data successfully Inserted.');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
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
        RFQ::find($id)->delete();
    }
}
