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
        $post=$request->all();
        PurchaseOrder::create($post);
        return redirect('/Purback');
    }
    public function show(PurchaseOrder $PurchaseOrder)
    {
        //
    }
    public function edit($id)
    {
        $Purc = PurchaseOrder::find($id);
        $emps = Employee::all();
        $parts = Partner::all();
        return view('Receive.Edit_Receives',compact('Purc','emps','parts'));
    }
    public function update(Request $request, $id)
    {
        $update=PurchaseOrder::findorFail($id);
        $update->update($request->all());

        return redirect('/comde');
    }
    public function destroy($id)
    {
        PurchaseOrder::find($id)->delete();
        return redirect('/comde');
    }
}
