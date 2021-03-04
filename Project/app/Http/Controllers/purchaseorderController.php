<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Materials;
use App\Partner;
use App\PurchaseOrder;
use App\PurchaseOrderDetail;
use Illuminate\Http\Request;

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
        $Purc = new PurchaseOrder();
        $Purc->fill($request->only($Purc->getFillable()));
        $Purc->save();

        $Purchas = $request->Material_Id;
        for($i = 0; $i < count($Purchas); $i++){
            PurchaseOrderDetail::create([
                'Pdetail_Amount' => $request->Pdetail_Amount[$i],
                'Material_Id' => $request->Material_Id[$i],
                'Purchase_Id' =>  $Purc->Purchase_Id,
            ]);
        }
        return back();
        // $post=$request->all();
        // PurchaseOrder::create($post);
        // return redirect('/Purback');
    }
    public function show(PurchaseOrder $PurchaseOrder)
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
}
