<?php

namespace App\Http\Controllers;

use App\Employee;

use App\Partner;
use App\PurchaseOrder;
use App\Receive;
use Illuminate\Http\Request;

class ReceiveController extends Controller
{
    public function index()
    {
        $Recs = PurchaseOrder::all();
        $Purc = PurchaseOrder::all();
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
        $emps = $Purc -> Emp_Id;
        $Purc = $Purc -> Purchase_Id;
        return view('Receive.Receives', compact('emps','Purc'));
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
