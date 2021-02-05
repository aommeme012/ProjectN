<?php

namespace App\Http\Controllers;

use App\Materials;
use App\ProductionPlanning;
use App\RequisitionMaterial;
use Illuminate\Http\Request;

class RequisitionMaterialController extends Controller
{
    public function index()
    {
        $Requims = RequisitionMaterial::all();
        $Plan = ProductionPlanning::all();
        return view('Receive.ShowPurchase', compact('Recs','emps','Purc'));
    }
}
