<?php

namespace App\Http\Controllers;

use App\Materials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MaterialsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('employeeOnly');
    }
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
        $Materials = new Materials;
        $Materials->fill($request->only($Materials->getFillable()));
        $Materials->idmat = $Materials->getmatId();
        $Materials->Material_Name = $request->Material_Name;
        $Materials->Material_Amount = $request->Material_Amount;
        $Materials->unitmaterial = $request->unitmaterial;
        $Materials->save();
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
        //return "hi";
        $deletemat = Materials::find($id);
        if($deletemat->Material_Status == "Available"){
            $deletemat->delete();
            return redirect()->back()->with('success','ลบสำเร็จ');
           }else{
               return redirect()->back()->with('fail','ไม่สามารถลบได้');
           }
    }
}
