<?php

namespace App\Http\Controllers;

use App\Materials;
use App\PurchaseOrder;
use App\PurchaseOrderDetail;
use Illuminate\Http\Request;

class purchaseorderdetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('employeeOnly');
    }
    public function index()
    {
        $Pdets = PurchaseOrderDetail::all();
        $Purc = PurchaseOrder::all();
        $mats = Materials::all();
        return view('PurchaseOderDetail.Pdetail', compact('Pdets','Purc','mats'));
    }
    public function create()
    {

    }
}
