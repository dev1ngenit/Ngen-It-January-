<?php

namespace App\Http\Controllers\Admin;

use Helper;
use App\Models\Admin\Row;
use Illuminate\Http\Request;
use App\Models\Admin\Industry;
use App\Models\Admin\Solution;
use App\Models\Admin\SolutionCard;
use App\Http\Controllers\Controller;
use App\Models\Admin\SolutionDetail;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SolutionDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['solutionDetails'] = SolutionDetail::get();
        return view('admin.pages.solutionDetail.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['rows'] = Row::select('rows.id', 'rows.title')->get();
        $data['industries'] = Industry::select('industries.id', 'industries.title')->get();
        $data['solution_cards'] = SolutionCard::select('solution_cards.id', 'solution_cards.title')->get();
        return view('admin.pages.solutionDetail.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Helper::imageDirectory();
        $validator = Validator::make(
            $request->all(),
            [
                'industry_id'      => 'required',
                'name'             => 'required',
                'header'           => 'required',
                'row_two_title'    => 'required',
                'row_two_header'   => 'required',
                'row_three_title'  => 'required',
                'row_three_header' => 'required',
                'row_five_title'   => 'required',
                'row_five_header'  => 'required',
                'banner_image'   => 'required|image|mimes:png,jpg,jpeg|max:10000',
            ],
            [
                'mimes' => 'The :attribute must be a file of type: PNG - JPEG - JPG'
            ],

        );

        if ($validator->passes()) {
            $mainFile = $request->file('banner_image');
            $imgPath = storage_path('app/public/');
            if (empty($mainFile)) {
                SolutionDetail::create([
                    'row_one_id'             => $request->row_one_id,
                    'row_four_id'            => $request->row_four_id,
                    'solution_card_one_id'   => $request->solution_card_one_id,
                    'solution_card_two_id'   => $request->solution_card_two_id,
                    'solution_card_three_id' => $request->solution_card_three_id,
                    'solution_card_four_id'  => $request->solution_card_four_id,
                    'solution_card_five_id'  => $request->solution_card_five_id,
                    'solution_card_six_id'   => $request->solution_card_six_id,
                    'solution_card_seven_id' => $request->solution_card_seven_id,
                    'solution_card_eight_id' => $request->solution_card_eight_id,
                    'industry_id'            => $request->industry_id,
                    'name'                   => $request->name,
                    'header'                 => $request->header,
                    'banner_image'           => $request->banner_image,
                    'row_two_title'          => $request->row_two_title,
                    'row_two_header'         => $request->row_two_header,
                    'row_three_title'        => $request->row_three_title,
                    'row_three_header'       => $request->row_three_header,
                    'row_five_title'         => $request->row_five_title,
                    'row_five_header'        => $request->row_five_header,
                ]);
            } else {
                $globalFunImg =  Helper::singleImageUpload($mainFile, $imgPath, 157, 87);
                if ($globalFunImg['status'] == 1) {
                    SolutionDetail::create([
                        'row_one_id'             => $request->row_one_id,
                        'row_four_id'            => $request->row_four_id,
                        'solution_card_one_id'   => $request->solution_card_one_id,
                        'solution_card_two_id'   => $request->solution_card_two_id,
                        'solution_card_three_id' => $request->solution_card_three_id,
                        'solution_card_four_id'  => $request->solution_card_four_id,
                        'solution_card_five_id'  => $request->solution_card_five_id,
                        'solution_card_six_id'   => $request->solution_card_six_id,
                        'solution_card_seven_id' => $request->solution_card_seven_id,
                        'solution_card_eight_id' => $request->solution_card_eight_id,
                        'industry_id'            => $request->industry_id,
                        'name'                   => $request->name,
                        'header'                 => $request->header,
                        'row_two_title'          => $request->row_two_title,
                        'row_two_header'         => $request->row_two_header,
                        'row_three_title'        => $request->row_three_title,
                        'row_three_header'       => $request->row_three_header,
                        'row_five_title'         => $request->row_five_title,
                        'row_five_header'        => $request->row_five_header,
                        'banner_image'           => $globalFunImg['file_name'],
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
        $data['rows'] = Row::select('rows.id', 'rows.title')->get();
        $data['industries'] = Industry::select('industries.id', 'industries.title')->get();
        $data['solution_cards'] = SolutionCard::select('solution_cards.id', 'solution_cards.title')->get();
        $data['solutionDetail'] = SolutionDetail::findOrFail($id);
        return view('admin.pages.solutionDetail.edit', $data);
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
        // dd($request->all());
        $solutionDetails = SolutionDetail::find($id);
        if (!empty($solutionDetails)) {
            $validator =
                // dd('ima');
                [

                    'industry_id'      => 'required',
                    'name'             => 'required',
                    'header'           => 'required',
                    'row_two_title'    => 'required',
                    'row_two_header'   => 'required',
                    'row_three_title'  => 'required',
                    'row_three_header' => 'required',
                    'row_five_title'   => 'required',
                    'row_five_header'  => 'required',

                ];
        } else {
            $validator =
                // dd('not ima');
                [

                    'industry_id'      => 'required',
                    'name'             => 'required',
                    'header'           => 'required',
                    'row_two_title'    => 'required',
                    'row_two_header'   => 'required',
                    'row_three_title'  => 'required',
                    'row_three_header' => 'required',
                    'row_five_title'   => 'required',
                    'row_five_header'  => 'required',
                    'banner_image'   => 'image|mimes:png,jpg,jpeg|max:10000',

                ];
        }
        $validator = Validator::make($request->all(), $validator);

        if ($validator->passes()) {
            $mainFile = $request->banner_image;
            $uploadPath = storage_path('app/public/');

            if (isset($mainFile)) {
                $globalFunImg = Helper::singleImageUpload($mainFile, $uploadPath, 157, 87);
            } else {
                $globalFunImg['status'] = 0;
            }

            if (!empty($solutionDetails)) {
                if ($globalFunImg['status'] == 1) {
                    File::delete(public_path($uploadPath . '/') . $solutionDetails->banner_image);
                    File::delete(public_path($uploadPath . '/thumb/') . $solutionDetails->banner_image);
                    File::delete(public_path($uploadPath . '/requestImg/') . $solutionDetails->banner_image);
                }

                $solutionDetails->update([
                    'row_one_id'             => $request->row_one_id,
                    'row_four_id'            => $request->row_four_id,
                    'solution_card_one_id'   => $request->solution_card_one_id,
                    'solution_card_two_id'   => $request->solution_card_two_id,
                    'solution_card_three_id' => $request->solution_card_three_id,
                    'solution_card_four_id'  => $request->solution_card_four_id,
                    'solution_card_five_id'  => $request->solution_card_five_id,
                    'solution_card_six_id'   => $request->solution_card_six_id,
                    'solution_card_seven_id' => $request->solution_card_seven_id,
                    'solution_card_eight_id' => $request->solution_card_eight_id,
                    'industry_id'            => $request->industry_id,
                    'name'                   => $request->name,
                    'header'                 => $request->header,
                    'row_two_title'          => $request->row_two_title,
                    'row_two_header'         => $request->row_two_header,
                    'row_three_title'        => $request->row_three_title,
                    'row_three_header'       => $request->row_three_header,
                    'row_five_title'         => $request->row_five_title,
                    'row_five_header'        => $request->row_five_header,
                    'banner_image' => $globalFunImg['status'] == 1 ? $globalFunImg['file_name'] : $solutionDetails->banner_image,
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
        SolutionDetail::findOrFail($id)->delete();
    }
}
