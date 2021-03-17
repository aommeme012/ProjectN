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
        //
    }
    public function update(Request $request, $id)
    {
        ProductionPlanning::find($id)->update([
            'Planning_Status' => 'Enable'
        ]);
        return redirect('/Plan');
    }
    public function destroy($id)
    {
        //
    }
}
