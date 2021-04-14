<?php

namespace App\Http\Controllers;

use App\Product;
use App\Production;
use App\ProductionPlanning;
use App\RequisitionMaterial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('employeeOnly');
    }
    public function index()
    {
        $Requimat = RequisitionMaterial::join('production_plannings', 'requisition_materials.Plan_Id', '=', 'production_plannings.Plan_Id')
        ->join('materials','requisition_materials.Material_Id','=','materials.Material_Id')
        ->where('production_plannings.Planning_Status', 'Enable')->get();

        return view('Production.Showrequisitionmat', compact('Requimat'));
    }
    public function create()
    {
        $Production = DB::table('productions')->join('employees','productions.Emp_Id','=','employees.Emp_Id')
            ->where('Production_Status', '=', 'ผลิตอยู่')->get();
        return view('Production.ProductionTable', compact('Production'));
    }
    public function store(Request $request)
    {
        //
    }
    public function show()
    {
        $Ption = DB::table('productions')->join('employees','productions.Emp_Id','=','employees.Emp_Id')
            ->where('Production_Status', '=', 'เสร็จสิ้น')->get();
        return view('Production.historyproduction', compact('Ption'));
    }
    public function showlist()
    {
        $showlist = DB::table('productions')
            ->where('Production_Status', '=', 'เบิก')->get();
        return view('Production.showlistrequisitionpro', compact('showlist'));
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        Production::create([
            'Production_Date' => today(),
            'Production_DateEnd' => today(),
            'Emp_Id' => Auth::user()->Emp_Id,
            'Production_Status' => 'ผลิตอยู่',
            'Requismat_Id' => $id,
        ]);
        $production = RequisitionMaterial::join('production_plannings', 'requisition_materials.Plan_Id', '=', 'production_plannings.Plan_Id')
            ->join('productions', 'requisition_materials.Requismat_Id', '=', 'productions.Requismat_Id')
            ->join('products', 'production_plannings.Product_Id', '=', 'products.Product_Id')
            ->where('production_plannings.Planning_Status', 'Enable')->first();

        ProductionPlanning::findorFail($production['Plan_Id'])->update([
            'Planning_Status' => 'Disable'
        ]);

        return redirect('/P');
    }
    public function updatesuccess(Request $request, $id)
    {

        $propro = Production::join('requisition_materials', 'productions.Requismat_Id', '=', 'requisition_materials.Requismat_Id')
            ->join('production_plannings', 'requisition_materials.Plan_Id', '=', 'production_plannings.Plan_Id')
            ->join('products', 'production_plannings.Product_Id', '=', 'products.Product_Id')
            ->where('productions.Production_Id', $id)->get();

        foreach ($propro as $prop) {
            Product::find($prop->Product_Id)->update([
                'Product_Amount' => $prop->Product_Amount + $prop->Amount
            ]);
        }
        $update = Production::findorFail($id);
        $update->update([
            'Production_DateEnd' => today(),
            'Production_Status' => 'เสร็จสิ้น',
        ]);

        return redirect('/Protion');
    }
    public function destroy($id)
    {
        //
    }
}
