<?php

namespace App\Http\Controllers;

use App\Product;
use App\Production;
use App\RequisitionProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequisitionProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('employeeOnly');
    }
    public function index()
    {
        $RequiP  = DB::table('productions')
        ->where('Production_Status', '=', 'เสร็จสิ้น')->get();
        return view('RequisitionProducts.ShowProduction', compact('RequiP'));
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
        $Repro = RequisitionProduct::all();
        return view('RequisitionProducts.RequisitionProduct',compact('Repro'));
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        $RequisitionProduct =  Production::join('requisition_materials', 'productions.Requismat_Id', '=', 'requisition_materials.Requismat_Id')
        ->join('production_plannings', 'requisition_materials.Plan_Id', '=', 'production_plannings.Plan_Id')
        ->join('products', 'production_plannings.Product_Id', '=', 'products.Product_Id')
        ->where('productions.Production_Id', $id)->get();

        foreach ($RequisitionProduct as $RP) {
            $requisproducts = $RP->Amount;
                    RequisitionProduct::create([
                    'Requispro_Date' => date('Y-m-d H:i:s'),
                    'Requispro_Amount' => $requisproducts,
                    'Product_Id' => $RP->Product_Id,
                    'Emp_Id' => $RP->Emp_Id,
                ]);
            }
                Product::find($RP['Product_Id'])->update([
                    'Product_Amount' => $RP->Product_Amount - $requisproducts
                ]);
                Production::findorFail($RP['Production_Id'])->update([
                    'Production_Status' => 'เบิก'
                ]);
                return back()->with('success','เบิกสินค้าเสร็จสิน');
}
    public function destroy($id)
    {
        //
    }
}

