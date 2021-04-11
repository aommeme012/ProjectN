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
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('employeeOnly');
    }
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
        return view('displayemployee.PurchaseDep', compact('Purc','emps','parts','mats'));
    }
    public function create()
    {
        $Purc = PurchaseOrder::all();
        $emps = Employee::all();
        $parts = Partner::all();
        $mats = Materials::all();
        return view('PurchaseOder.Purchase', compact('emps','parts','Purc','mats'));
    }
    public function createEmployee()
    {
        $Purc = PurchaseOrder::all();
        $emps = Employee::all();
        $parts = Partner::all();
        $mats = Materials::all();
        return view('DepEmployee.PurchaseDep', compact('emps','parts','Purc','mats'));
    }
    public function store(Request $request)
    {
        $Purc = new PurchaseOrder;
        $Purc->fill($request->only($Purc->getFillable()));
            $Purc->idpur = $Purc->getpurId();
            $Purc->Purchase_Date = today();
            $Purc->Emp_Id = Auth::user()->Emp_Id;
            $Purc->Partner_Id = $request->Partner_Id;
            $Purc->save();

        $Purchas = $request->Material_Id;
        for($i = 0; $i < count($Purchas); $i++){
            PurchaseOrderDetail::create([
                'Pdetail_Amount' => $request->Pdetail_Amount[$i],
                'Pdetail_Money' => $request->Pdetail_Money[$i],
                'Material_Id' => $request->Material_Id[$i],
                'Purchase_Id' =>  $Purc->Purchase_Id,

                ]);

                $updatestatuspart = Partner::findorfail($request->Partner_Id);
                $updatestatuspart->update([
                'Partner_Status' => 'Enable'
                ]);
            }
            $purchaspdf = PurchaseOrder::join('purchase_order_details','purchase_orders.Purchase_Id','=','purchase_order_details.Purchase_Id')
                ->where('purchase_orders.Purchase_Id',$Purc->Purchase_Id)->get();
            $purchas = PurchaseOrder::where('Purchase_Id',$Purc->Purchase_Id)->first();

                return view('PurchaseOder.PurchasePDF',[
                    'purchaspdf' => $purchaspdf,'Purc'=> $Purc ,'purchas'=> $purchas
                ]);
                return redirect('/Purback');
}
public function storeEmployee(Request $request)
    {
        $Purc = new PurchaseOrder;
        $Purc->fill($request->only($Purc->getFillable()));
            $Purc->idpur = $Purc->getpurId();
            $Purc->Purchase_Date = today();
            $Purc->Emp_Id = Auth::user()->Emp_Id;
            $Purc->Partner_Id = $request->Partner_Id;
            $Purc->save();

        $Purchas = $request->Material_Id;
        for($i = 0; $i < count($Purchas); $i++){
            PurchaseOrderDetail::create([
                'Pdetail_Amount' => $request->Pdetail_Amount[$i],
                'Pdetail_Money' => $request->Pdetail_Money[$i],
                'Material_Id' => $request->Material_Id[$i],
                'Purchase_Id' =>  $Purc->Purchase_Id,

                ]);

                $updatestatuspart = Partner::findorfail($request->Partner_Id);
                $updatestatuspart->update([
                'Partner_Status' => 'Enable'
                ]);
            }
                return back();
}
    public function show(PurchaseOrder $PurchaseOrder )
    {
        $Purdetails = PurchaseOrderDetail::all();
        return view('PurchaseOderDetail.PdetailDep', compact('Purdetails'));
    }
    public function showEmployee()
    {
        $Purc = PurchaseOrder::all();
        $emps = Employee::all();
        $parts = Partner::all();
        $mats = Materials::all();
        return view('displayemployee.invoicedep', compact('emps','parts','Purc','mats'));
    }
    public function edit($id)
    {
       //
    }
    public function update(Request $request, $id)
    {
        $purchaspdf = PurchaseOrder::join('purchase_order_details','purchase_orders.Purchase_Id','=','purchase_order_details.Purchase_Id')
        ->where('purchase_orders.Purchase_Id',$id)->get();


        $purchas = PurchaseOrder::where('Purchase_Id',$id)->first();

        return view('PurchaseOder.PurchasePDF',[
            'purchaspdf' => $purchaspdf, 'purchas'=> $purchas
        ]);
    }
    public function updateEmployee(Request $request, $id)
    {


        $purchaspdf = PurchaseOrder::join('purchase_order_details','purchase_orders.Purchase_Id','=','purchase_order_details.Purchase_Id')
        ->where('purchase_orders.Purchase_Id',$id)->get();

        $purchasss = PurchaseOrder::where('Purchase_Id',$id)->first();

        return view('DepEmployee.PurchaseDepPdf',[
            'purchaspdf' => $purchaspdf, 'purchasss'=> $purchasss
        ]);
    }
    public function destroy($id)
    {
        //
    }
}
