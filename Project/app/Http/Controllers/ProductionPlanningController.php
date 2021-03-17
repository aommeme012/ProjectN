<?php

namespace App\Http\Controllers;

use App\component;
use App\Product;
use App\ProductionPlanning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductionPlanningController extends Controller
{
    public function index()
    {
        $Plans = DB::table('production_plannings')
        ->where('Planning_Status', '=', 'Enable')->get();
        $comps = component::all();
        $pros = Product::all();
        return view('planing production.planingtable', compact('Plans','comps','pros'));
    }
    public function create()
    {
        $Plans = ProductionPlanning::all();
        $comps = component::all();
        $pros = Product::all();
        return view('planing production.Fillplaning', compact('Plans','comps','pros'));
    }
    public function store(Request $request)
    {
        $post=$request->all();
        ProductionPlanning::create($post);
        return back();
    }
    public function show(ProductionPlanning $ProductionPlanning)
    {
        $Planings = DB::table('production_plannings')
        ->where('Planning_Status', '=', 'Disable')->get();
        return view('planing production.Showlistplan', compact('Planings'));
    }
    public function edit($id)
    {
        $Plan = ProductionPlanning::find($id);
        $comps = component::all();
        $pros = Product::all();
        return view('planing production.edit_planing', compact('Plan','comps','pros'));
    }
    // public function updatesuccess(Request $request, $id)
    // {
    //     $update=ProductionPlanning::findorFail($id);
    //     $update->update($request->all());
    //     return redirect('/Plan');
    // }

    public function update(Request $request, $id)
    {
        $planingproduction = ProductionPlanning::join('components','production_plannings.component_Id','=','components.component_Id')
        ->join('products','production_plannings.Product_Id','=','products.Product_Id')
        ->where('production_plannings.Plan_Id',$id)->get();

        foreach ($planingproduction as $planingproductions) {
        ProductionPlanning::create([
            'Plan_Date' => today(),
            'Amount' =>  $planingproductions->Amount,
            'Planning_Status' => 'Enable',
            'component_Id' => $planingproductions->component_Id,
            'Product_Id' => $planingproductions->Product_Id,

        ]);
    }
    return redirect('/Plan');
        // ProductionPlanning::find($id)->update([
        //     'Planning_Status' => 'Enable'
        // ]);
        // return redirect('/Plan');
    }

    public function destroy($id)
    {
        //
    }
}
