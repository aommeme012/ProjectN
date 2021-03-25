<?php

namespace App\Http\Controllers;

use App\PurchaseOrder;
use PDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function pdf()
    {
        $p = PurchaseOrder::all();
        $pdf = PDF::loadView('pdf',['p'=>$p]);
        return @$pdf->stream();
    }
}
