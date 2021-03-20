<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Materials;
use App\Partner;
use App\PurchaseOrder;
use App\PurchaseOrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class purchaseorderController extends Controller
{
    public function index()
    {
        $Purc = PurchaseOrder::all();
        $emps = Employee::all();
        $parts = Partner::all();
        $mats = Materials::all();
        return view('PurchaseOder.PurchaseOders', compact('Purc','emps','parts','mats'));
    }
    public function indexEmployee()
    {
        $Purc = PurchaseOrder::all();
        $emps = Employee::all();
        $parts = Partner::all();
        $mats = Materials::all();
        return view('PurchaseOder.PurchaseDep', compact('Purc','emps','parts','mats'));
    }
    public function create()
    {
        $Purc = PurchaseOrder::all();
        $emps = Employee::all();
        $parts = Partner::all();
        $mats = Materials::all();
        return view('PurchaseOder.Purchase', compact('emps','parts','Purc','mats'));
    }
    public function store(Request $request)
    {

        $Purc  = PurchaseOrder::create([
            'Purchase_Date' => today(),
            'Emp_Id' => Auth::user()->Emp_Id,
            'Partner_Id' => $request->Partner_Id,
        ]);

        $Purchas = $request->Material_Id;
        for($i = 0; $i < count($Purchas); $i++){
            PurchaseOrderDetail::create([
                'Pdetail_Amount' => $request->Pdetail_Amount[$i],
                'Material_Id' => $request->Material_Id[$i],
                'Purchase_Id' =>  $Purc->Purchase_Id,
            ]);
        }
        return back();

    }
    public function show(PurchaseOrder $PurchaseOrder )
    {
        $Purdetails = PurchaseOrderDetail::all();
        return view('PurchaseOderDetail.PdetailDep', compact('Purdetails'));
    }
    public function edit($id)
    {
       //
    }
    public function update(Request $request, $id)
    {

    }
    public function destroy($id)
    {
        //
    }
}
