<?php

namespace App\Http\Controllers\SAS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SASController extends Controller
{
    public function SourcingSas()
    {
        return view('admin.pages.sas.sourcing_sas');
    }
}
