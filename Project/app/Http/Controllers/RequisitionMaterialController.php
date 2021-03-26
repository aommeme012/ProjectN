<?php

namespace App\Http\Controllers;

use App\Materials;
use App\ProductionPlanning;
use App\RequisitionMaterial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequisitionMaterialController extends Controller
{
    public function index()
    {
        $RequiM  = DB::table('production_plannings')
        ->where('Planning_Status', '=', 'Enable')->get();
        return view('RequisitionMaterials.ShowPlan', compact('RequiM'));
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show()
    {
        $Remat = RequisitionMaterial::all();
        return view('RequisitionMaterials.RequisitionMaterial',compact('Remat'));
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        $RequisitionMaterial =  ProductionPlanning::join('componentdetails', 'componentdetails.component_Id', '=', 'production_plannings.component_Id')
            ->join('materials', 'materials.Material_Id', '=', 'componentdetails.Material_Id')
            
            // ->select(DB::raw('*, FLOOR(materials.Material_Amount/componentdetails.Comde_Amount) as balance'))
            ->where('production_plannings.Plan_Id', $id)
            ->orderBy('balance', 'ASC')->get();

        return $RequisitionMaterial;

        if ($RequisitionMaterial[0]->Amount <= $RequisitionMaterial[0]->balance) {
            foreach ($RequisitionMaterial as $R) {
                $c = $R->Amount * $R->Comde_Amount;
                RequisitionMaterial::create([
                    'Requismat_Date' => today(),
                    'Requismat_Amount' => $c,
                    'Material_Id' => $R->Material_Id,
                    'Plan_Id' => $id,
                ]);
                Materials::find($R['Material_Id'])->update([
                    'Material_Amount' => $R->Material_Amount - $c
                ]);
            }
            return back()->with('success','เบิกวัตถุดิบเสร็จสิน');
        }else
        {
            return back()->with('fail','เบิกวัตถุดิบไม่สำเร็จ');
        }
    }
    public function destroy($id)
    {
        //
    }
}
