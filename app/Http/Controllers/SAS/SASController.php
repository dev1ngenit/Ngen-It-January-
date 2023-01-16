<?php

namespace App\Http\Controllers\SAS;

use Illuminate\Http\Request;
use App\Models\Admin\Sourcing;
use App\Http\Controllers\Controller;

class SASController extends Controller
{
    public function SourcingSas($id)
    {
        $data['product'] = Sourcing::where('slug' , $id)->first();
        return view('admin.pages.sas.sourcing_sas',$data);
    }
}
