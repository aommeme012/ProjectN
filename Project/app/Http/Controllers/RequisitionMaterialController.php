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
        $RequiM = ProductionPlanning::all();

        return view('RequisitionMaterials.ShowPlan' , compact('RequiM'));
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request , $id)
    {
        $RequisitionMaterial =  ProductionPlanning::
        join('componentdetails','componentdetails.component_Id','=','production_plannings.component_Id')
        ->join('materials','materials.Material_Id','=','componentdetails.Material_Id')
        ->where('production_plannings.Plan_Id', $id)->first();

        $c = $RequisitionMaterial-> Amount * $RequisitionMaterial->Comde_Amount;

        RequisitionMaterial::create([
            'Requismat_Date' => today(),
            'Requismat_Amount' => $c,
            'Material_Id' => $id,
            'Plan_Id' => $id,
        ]);

        $update = Materials::find($RequisitionMaterial['Material_Id']);
        $update->update([
         'Material_Amount' => $RequisitionMaterial->Material_Amount - $c
        ]);

        return redirect()->back();


    }
    public function destroy($id)
    {
        //
    }
}
