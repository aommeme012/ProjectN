<?php

namespace App\Http\Controllers;

use App\Materials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MaterialsController extends Controller
{
    public function index()
    {
        $mats = Materials::all();
        return view('material.materials', compact('mats'));
        //return $deps;
    }
    public function create()
    {
        return view('material.add_materials');
    }
    public function store(Request $request)
    {
        $post=$request->all();
        Materials::create($post);
        return view('material.add_materials');
    }
    public function show(Materials $Materials)
    {
        //
    }
    public function edit($id)
    {
        $mat = Materials::find($id);
        return view('material.edit_Materials',compact('mat'));
    }

    public function update(Request $request, $id)
    {
        $update=Materials::findorFail($id);
        $update->update($request->all());

        return redirect('/mat');
    }
    public function destroy($id)
    {
        Materials::find($id)->delete();
        return redirect('/mat');
    }
}
