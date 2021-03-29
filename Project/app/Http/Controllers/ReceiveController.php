<?php

namespace App\Http\Controllers;

use App\Materials;
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
        $receive = PurchaseOrder::where('Purchase_Status', 'Enable')->get();
        return view('Receive.ShowPurchase', compact('receive'));
    }
    public function create()
    {
        $rec = Receive::all();
        return view('Receive.ReceivesTable',compact('rec'));
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        $amount =  PurchaseOrderDetail::join('purchase_orders', 'purchase_orders.Purchase_Id', '=', 'purchase_order_details.Purchase_Id')
            ->join('materials', 'purchase_order_details.Material_Id', '=', 'materials.Material_Id')
            ->where('purchase_orders.Purchase_Id', $id)->get();

        foreach ($amount as $a) {
            Receive::create([
                'Receive_Date' => today(),
                'Receive_Amount' => $a['Pdetail_Amount'],
                'Emp_Id' => Auth::user()->Emp_Id,
                'Purchase_Id' => $id,
            ]);
            Materials::find($a->Material_Id)->update([
                'Material_Amount' => $a->Material_Amount + $a->Pdetail_Amount
            ]);
        }
        PurchaseOrder::find($id)->update([
            'Purchase_Status' => 'Complete'
        ]);

        return redirect('/Rec')->with('success','รับเข้าเสร็จสิน');
    }
    public function destroy($id)
    {
        //
    }
}
