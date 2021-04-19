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
        //
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
    public function reportrequismat(Request $request)
    {
        $St_date = $request->StartDate;
        $En_date = $request->EndDate;

        $requismatpdf = RequisitionMaterial::whereDate('Requismat_Date','>=', $St_date)
        ->whereDate('Requismat_Date','<=', $En_date)->get();
        return view('report.PDFreportrequismat',[
            'requismatpdf' => $requismatpdf, 'St_date' => $St_date , 'En_date' => $En_date
        ]);
    }
    public function reportproduction(Request $request)
    {
        $St_date = $request->StartDate;
        $En_date = $request->EndDate;

        $reportpropdf = Production::join('requisition_materials','productions.Requismat_Id','=','requisition_materials.Requismat_Id')
        ->join('production_plannings', 'requisition_materials.Plan_Id', '=', 'production_plannings.Plan_Id')
        ->join('products', 'production_plannings.Product_Id', '=', 'products.Product_Id')
        ->whereDate('Production_Date','>=', $St_date)
        ->whereDate('Production_DateEnd','<=', $En_date)
        ->where('Production_Status', '=', 'เสร็จสิ้น')->get();

            return view('report.PDFreportproduction',[
                'reportpropdf' => $reportpropdf, 'St_date' => $St_date , 'En_date' => $En_date
            ]);
    }
    public function reportrequisproduct(Request $request)
    {
        $St_date = $request->StartDate;
        $En_date = $request->EndDate;

        $reportreproductpdf = RequisitionProduct::whereDate('Requispro_Date','>=', $St_date)
        ->whereDate('Requispro_Date','<=', $En_date)->get();
        return view('report.PDFreportrequisproduct',[
            'reportreproductpdf' => $reportreproductpdf,'St_date' => $St_date , 'En_date' => $En_date
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
