<?php

namespace App\Http\Controllers;

use App\Production;
use App\RequisitionMaterial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductionController extends Controller
{
    public function index()
    {
        $Production = RequisitionMaterial::all();
        return view('Production.Showrequisitionmat', compact('Production'));
    }
    public function create()
    {
        $Production = Production::all();
        return view('Production.ProductionTable', compact('Production'));
    }
    public function store(Request $request)
    {
    }
    public function show()
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        $production = Production::join('requisition_materials', 'requisition_materials.Requismat_Id','=','productions.Requismat_Id')
        ->where('productions.Requismat_Id',$id)->get();
        return $production;
    foreach ($production as $productions) {
        Production::create([
            'Production_Date' => today(),
            'Emp_Id' => Auth::user()->Emp_Id,
            'Requismat_Id' =>  $id,
        ]);
    }
    Production::find($id)->update([
        'Production_Status' => 'กำลังผลิตอยู่'
    ]);
    return redirect('/P');
}
    public function destroy($id)
    {
        //
    }
}
