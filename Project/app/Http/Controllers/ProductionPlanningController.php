<?php

namespace App\Http\Controllers;

use App\component;
use App\Product;
use App\ProductionPlanning;
use Illuminate\Http\Request;

class ProductionPlanningController extends Controller
{
    public function index()
    {
        $Plans = ProductionPlanning::all();
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
        //
    }
    public function edit($id)
    {
        $emp = ProductionPlanning::find($id);
        return view('employee.edit_employees',compact('emp','deps'));
    }
    public function update(Request $request, $id)
    {
        $update=ProductionPlanning::findorFail($id);
        $update->update($request->all());

        return redirect('/emp');
    }
    public function destroy($id)
    {
        ProductionPlanning::find($id)->delete();
        return redirect('/emp');
    }
}
