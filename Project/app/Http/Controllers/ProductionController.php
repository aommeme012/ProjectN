<?php

namespace App\Http\Controllers;

use App\Production;
use App\ProductionPlanning;
use App\RequisitionMaterial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductionController extends Controller
{
    public function index()
    {
        $Requimat = RequisitionMaterial::join('production_plannings','requisition_materials.Plan_Id','=','production_plannings.Plan_Id')
        ->where('production_plannings.Planning_Status','Enable')->get();
        return view('Production.Showrequisitionmat', compact('Requimat'));
    }
    public function create()
    {
        $Production = DB::table('productions')
        ->where('Production_Status', '=', 'กำลังผลิตอยู่')->get();
        return view('Production.ProductionTable', compact('Production'));
    }
    public function store(Request $request)
    {
        return $request;

    }
    public function show()
    {
        $Ption = DB::table('productions')
        ->where('Production_Status', '=', 'เสร็จสิ้น')->get();
        return view('Production.historyproduction', compact('Ption'));
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        $production = RequisitionMaterial::
        join('production_plannings','requisition_materials.Plan_Id','=','production_plannings.Plan_Id')
        ->join('productions','requisition_materials.Requismat_Id','=','productions.Requismat_Id')
        ->where('production_plannings.Planning_Status','Enable')->first();


        Production::create([
            'Production_Date' => today(),
            'Emp_Id' => Auth::user()->Emp_Id,
            'Production_Status' => 'กำลังผลิตอยู่',
            'Requismat_Id' => $id,
        ]);

        ProductionPlanning::findorFail($production['Plan_Id'])->update([
            'Planning_Status' => 'Disable'
        ]);

        return redirect('/P');

    }
    public function updatesuccess(Request $request,$id){

    //return $id;
    $update= Production::findorFail($id);
    $update->update([
        'Production_Status' => 'เสร็จสิ้น',
    ]);

    return redirect('/Protion');

    }
    public function destroy($id)
    {
        //
    }
}
