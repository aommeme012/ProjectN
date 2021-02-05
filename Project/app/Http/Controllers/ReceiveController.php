<?php

namespace App\Http\Controllers;

use App\Employee;

use App\Partner;
use App\PurchaseOrder;
use App\PurchaseOrderDetail;
use App\Receive;
use Illuminate\Http\Request;

class ReceiveController extends Controller
{
    public function index()
    {
        $Recs = PurchaseOrder::all();
        $Purc = PurchaseOrder::all();
        $Pdets = PurchaseOrderDetail::all();
        $emps = Employee::all();
        return view('Receive.ShowPurchase', compact('Recs','emps','Purc'));
    }
    public function create()
    {
        $Recs = Receive::all();
        $Purc = PurchaseOrder::all();
        $emps = Employee::all();
        return view('Receive.ReceivesTable', compact('Recs','emps','Purc'));
    }
    public function store(Request $request)
    {
        $post=$request->all();
        Receive::create($post);
        return redirect('/Receive');
    }
    public function show($id)
    {
        $Purc = PurchaseOrder::find($id);
        $Pdets = PurchaseOrderDetail::find($id);
        $emps = $Purc -> Emp_Id;
        $Purc = $Purc -> Purchase_Id;
        $Pdets = $Pdets -> Pdetail_Amount;
        return view('Receive.Receives', compact('emps','Purc','Pdets'));
    }
    public function edit($id)
    {
        $Rec = Receive::find($id);
        $Purc = PurchaseOrder::all();
        $emps = Employee::all();
        return view('Receive.Edit_Receives',compact('Rec','Purc','emps'));
    }
    public function update(Request $request, $id)
    {
        $update=Receive::findorFail($id);
        $update->update($request->all());

        return redirect('/Rec');
    }
    public function destroy($id)
    {
        Receive::find($id)->delete();
        return redirect('/Receive');
    }
}
