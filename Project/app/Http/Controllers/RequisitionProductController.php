<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequisitionProductController extends Controller
{
    public function index()
    {
        $RequiP  = DB::table('productions')
        ->where('Production_Status', '=', 'เสร็จสิ้น')->get();
        return view('RequisitionProducts.ShowProduction', compact('RequiP'));
    }
}
