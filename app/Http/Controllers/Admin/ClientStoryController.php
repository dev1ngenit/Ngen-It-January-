<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Helper;
use App\Models\Admin\ClientStory;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ClientStoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['storys'] = ClientStory::latest()->get();
        return view('admin.pages.story.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\blog
     */
    public function create()
    {
        return view('admin.pages.story.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        Helper::imageDirectory();
        $validator = Validator::make(
            $request->all(),
            [
                'badge' => 'required',
                'title' => 'required',
                'tags'  => 'required',
                'image' => 'image|mimes:png,jpg,jpeg|max:10000',
            ]

        );

        if ($validator->passes()) {
            $mainFile = $request->file('image');
            $imgPath = storage_path('app/public/');
            if (empty($mainFile)) {
                ClientStory::create([
                    'badge'       => $request->badge,
                    'title'       => $request->title,
                    'header'      => $request->header,
                    'created_by'  => $request->created_by,
                    'tags'        => $request->tags,
                    'short_des'   => $request->short_des,
                    'long_des'    => $request->long_des,
                    'footer'      => $request->footer,
                    'created_at'  => Carbon::now(),
                ]);
            } else {
                $globalFunImg =  Helper::singleImageUpload($mainFile, $imgPath, 1180, 400);
                if ($globalFunImg['status'] == 1) {
                    ClientStory::create([
                        'badge'       => $request->badge,
                        'title'       => $request->title,
                        'header'      => $request->header,
                        'created_by'  => $request->created_by,
                        'tags'        => $request->tags,
                        'short_des'   => $request->short_des,
                        'long_des'    => $request->long_des,
                        'footer'      => $request->footer,
                        'image'       => $globalFunImg['file_name'],
                        'created_at'  => Carbon::now(),
                    ]);
                } else {
                    Toastr::warning('Image upload failed! plz try again.');
                }
            }
            Toastr::success('Data Inserted Successfully');
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
        $data['story'] = ClientStory::find($id);
        return view('admin.pages.story.edit', $data);
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
        $story = ClientStory::find($id);

        if (!empty($request->image)) {
            $validator =
                [
                    'badge' => 'required',
                    'title' => 'required',
                    'tags' => 'required',
                    'image' => 'required|image|mimes:png,jpg,jpeg|max:10000',
                ];
        } else {
            $validator =
                [
                    'title' => 'required|max:200',
                    'tags' => 'required|max:250',
                ];
        }
        $validator = Validator::make($request->all(), $validator);

        if ($validator->passes()) {
            $mainFile = $request->image;
            $uploadPath = storage_path('app/public/');

            if (isset($mainFile)) {
                $globalFunImg = Helper::singleImageUpload($mainFile, $uploadPath, 1180, 400);
            } else {
                $globalFunImg['status'] = 0;
            }

            if (!empty($story)) {
                if ($globalFunImg['status'] == 1) {
                    File::delete(public_path($uploadPath . '/') . $story->image);
                    File::delete(public_path($uploadPath . '/thumb/') . $story->image);
                    File::delete(public_path($uploadPath . '/requestImg/') . $story->image);
                }

                $story->update([
                    'badge'       => $request->badge,
                    'title'       => $request->title,
                    'header'      => $request->header,
                    'created_by'  => $request->created_by,
                    'tags'        => $request->tags,
                    'short_des'   => $request->short_des,
                    'long_des'    => $request->long_des,
                    'footer'      => $request->footer,
                    'image'       => $globalFunImg['status'] == 1 ? $globalFunImg['file_name'] : $story->image,
                ]);
            }

            Toastr::success('Data has been updated');
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
        $story = ClientStory::find($id);

        if (File::exists(public_path('storage/') . $story->image)) {
            File::delete(public_path('storage/') . $story->image);
        }
        if (File::exists(public_path('storage/requestImg/') . $story->image)) {
            File::delete(public_path('storage/requestImg/') . $story->image);
        }
        if (File::exists(public_path('storage/thumb/') . $story->image)) {
            File::delete(public_path('storage/thumb/') . $story->image);
        }
        $story->delete();
    }
}
