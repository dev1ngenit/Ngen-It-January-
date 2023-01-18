<?php

namespace App\Http\Controllers\SAS;

use App\Models\Admin\Sas;
use Illuminate\Http\Request;
use App\Models\Admin\Sourcing;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class SASController extends Controller
{


    public function index()
    {
        $data['products'] = Sourcing::latest()->get();

        return view('admin.pages.sas.all', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'ref_code'          => 'nullable',
                'cog_price'         => 'nullable',
                'sales_price'       => 'nullable',
                'bank_charge'       => 'nullable',
                'customs'           => 'nullable',
                'tax'               => 'nullable',
                'utility_cost'      => 'nullable',
                'shiping_cost'      => 'nullable',
                'sales_comission'   => 'nullable',
                'liability'         => 'nullable',
                'regular_discounts' => 'nullable',
                'rebates'           => 'nullable',
                'capital_share'     => 'nullable',
                'management_cost'   => 'nullable',
                'net_profit'        => 'nullable',
                'gross_profit'      => 'nullable',
            ],
        );

        if ($validator->passes()) {
            Sas::create([
                'create'            => $request->create,
                'item_name'         => $request->item_name,
                'product_id'        => $request->product_id,
                'ref_code'          => $request->ref_code,
                'cog_price'         => $request->cog_price,
                'sales_price'       => $request->sales_price,
                'bank_charge'       => $request->bank_charge,
                'customs'           => $request->customs,
                'tax'               => $request->tax,
                'utility_cost'      => $request->utility_cost,
                'shiping_cost'      => $request->shiping_cost,
                'sales_comission'   => $request->sales_comission,
                'liability'         => $request->liability,
                'regular_discounts' => $request->regular_discounts,
                'rebates'           => $request->rebates,
                'capital_share'     => $request->capital_share,
                'management_cost'   => $request->management_cost,
                'net_profit'        => $request->net_profit,
                'gross_profit'      => $request->gross_profit,
            ]);
            Sourcing::findOrFail($request->product_id)->update([
                'action_status'         => 'seek_approval',
            ]);
            Toastr::success('Data Insert Successfully.');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }
        return redirect()->route('sas.index');
    }

    public function show($id)
    {

        $data['product'] = Sourcing::where('ref_code' , $id)->first();
        $data['sourcing'] = Sas::where('product_id' , $data['product']->id)->first();
        //dd($data['sourcing']);
        return view('admin.pages.sas.sas_approve', $data);
    }

    public function edit($id)
    {
        $data['product'] = Sourcing::first();
        $data['sourcing'] = Sas::where('ref_code',$id)->first();
        return view('admin.pages.sas.sourcing_sas_edit', $data);
    }

    public function update(Request $request, $id)

    {

        //dd($id);
        $sas = Sas::where('ref_code',$id)->first();
        //dd($sas);
        $validator = Validator::make(
            $request->all(),
            [
                'ref_code'          => 'nullable',
                'cog_price'         => 'nullable',
                'sales_price'       => 'nullable',
                'bank_charge'       => 'nullable',
                'customs'           => 'nullable',
                'tax'               => 'nullable',
                'utility_cost'      => 'nullable',
                'shiping_cost'      => 'nullable',
                'sales_comission'   => 'nullable',
                'liability'         => 'nullable',
                'regular_discounts' => 'nullable',
                'rebates'           => 'nullable',
                'capital_share'     => 'nullable',
                'management_cost'   => 'nullable',
                'net_profit'        => 'nullable',
                'gross_profit'      => 'nullable',
            ],
        );

        if ($validator->passes()) {
            $sas->update([
                'create'          => $request->create,
                'item_name'          => $request->item_name,
                'product_id'          => $request->product_id,
                'ref_code'          => $request->ref_code,
                'cog_price'         => $request->cog_price,
                'sales_price'       => $request->sales_price,
                'bank_charge'       => $request->bank_charge,
                'customs'           => $request->customs,
                'tax'               => $request->tax,
                'utility_cost'      => $request->utility_cost,
                'shiping_cost'      => $request->shiping_cost,
                'sales_comission'   => $request->sales_comission,
                'liability'         => $request->liability,
                'regular_discounts' => $request->regular_discounts,
                'rebates'           => $request->rebates,
                'capital_share'     => $request->capital_share,
                'management_cost'   => $request->management_cost,
                'net_profit'        => $request->net_profit,
                'gross_profit'      => $request->gross_profit,
            ]);
            Toastr::success('Data Update Successfully.');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }
        return redirect()->back();
    }

    public function SourcingSas($id)
    {
        $data['product'] = Sourcing::where('slug', $id)->first();
        return view('admin.pages.sas.sourcing_sas', $data);
    }


}
