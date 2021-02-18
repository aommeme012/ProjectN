<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Materials;
use App\Partner;
use App\PurchaseOrder;
use App\PurchaseOrderDetail;
use App\Receive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReceiveController extends Controller
{
    public function index()
    {
        $receive = PurchaseOrder::join('purchase_order_details','purchase_orders.Purchase_Id','=','purchase_order_details.Purchase_Id')
        ->where('purchase_orders.Purchase_Status','Enable')->get();
        return view('Receive.ShowPurchase' , compact('receive'));
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        return "hi";
    }
    public function show($id)
    {
        return "hi";
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request , $id)
    {
        $amount =  PurchaseOrderDetail::join('purchase_orders','purchase_orders.Purchase_Id','=','purchase_order_details.Purchase_Id')
        ->join('materials','purchase_order_details.Material_Id','=','materials.Material_Id')
        ->where('purchase_orders.Purchase_Id', $id)->first();

        Receive::create([
            'Receive_Date' => today(),
            'Receive_Amount' => $amount['Pdetail_Amount'],
            'Emp_Id' => Auth::user()->Emp_Id,
            'Purchase_Id' => $id,
        ]);

        $update = Materials::find($amount['Material_Id']);
        $update->update([
         'Material_Amount' => $amount['Material_Amount'] + $amount['Pdetail_Amount']
        ]);

        $purchase = PurchaseOrder::find($id);
        $purchase->update([
         'Purchase_Status' => 'Complete'
        ]);



    }
    public function destroy($id)
    {
        //
    }
}
