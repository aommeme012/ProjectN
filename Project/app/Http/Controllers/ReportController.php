<?php

namespace App\Http\Controllers;

use App\RequisitionMaterial;
use App\Production;
use App\RequisitionProduct;
use App\Product;
use App\ProductionPlanning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('employeeOnly');
    }
    public function index()
    {
        $reportmat = RequisitionMaterial::all();
        return view('report.reportrequisitionmat', compact('reportmat'));
    }
    public function create()
    {
        return view('report.indexreport');
    }
    public function store(Request $request)
    {
        //
    }
    public function show()
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
    public function reportrequismat()
    {
        $requismatpdf = RequisitionMaterial::all();
        return view('report.PDFreportrequismat',[
            'requismatpdf' => $requismatpdf,
        ]);
    }
    public function reportproduction()
    {
        $reportpropdf = Production::join('requisition_materials','productions.Requismat_Id','=','requisition_materials.Requismat_Id')
        ->join('production_plannings', 'requisition_materials.Plan_Id', '=', 'production_plannings.Plan_Id')
        ->join('products', 'production_plannings.Product_Id', '=', 'products.Product_Id')
        ->where('Production_Status', '=', 'เสร็จสิ้น')->get();

            return view('report.PDFreportproduction',[
                'reportpropdf' => $reportpropdf,
            ]);
    }
    public function reportrequisproduct()
    {
        $reportreproductpdf = RequisitionProduct::all();
        return view('report.PDFreportrequisproduct',[
            'reportreproductpdf' => $reportreproductpdf,
        ]);
    }
    public function reportproduct()
    {
        $reportproductpdf = Product::all();
        return view('report.PDFreportproduct',[
            'reportproductpdf' => $reportproductpdf,
        ]);
    }
}
