<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Contact;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['contacts'] = Contact::where('msg_type', NULL)->orderBy('id','DESC')->get();
        return view('admin.pages.contact.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.contact.add');
    }

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
                'fname' => 'required|max: 70',
                'lname' => 'required|max: 70',
                'phone' => 'required|max: 70',
                'email' => 'required|max: 70',
            ],
        );

        if ($validator->passes()) {
            Contact::create([
                'fname'    => $request->fname,
                'lname'    => $request->lname,
                'phone'    => $request->phone,
                'email'    => $request->email,
                'state'    => $request->state,
                'country'  => $request->country,
                'company'  => $request->company,
                'msg_type' => $request->msg_type,
                'message'  => $request->message,
            ]);
            Toastr::success('Your Message has received Successfully. We will contact with you soon.');
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
        $data['contact'] = Contact::find($id);
        return view('admin.pages.contact.edit', $data);
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
                'fname' => 'required|max: 70',
                'lname' => 'required|max: 70',
                'phone' => 'required|max: 70',
                'email' => 'required|max: 70',
            ],
        );

        if ($validator->passes()) {
            Contact::find($id)->update([
                'fname'    => $request->fname,
                'lname'    => $request->lname,
                'phone'    => $request->phone,
                'email'    => $request->email,
                'state'    => $request->state,
                'country'  => $request->country,
                'company'  => $request->company,
                'msg_type' => $request->msg_type,
                'message'  => $request->message,
            ]);
            Toastr::success('Data Update Successfully');
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
        Contact::find($id)->delete();
    }

    public function Support()
    {
        $data['contacts'] = Contact::whereNotNull('msg_type')->orderBy('id','DESC')->get();
        return view('admin.pages.contact.support', $data);
    }
}
