<?php

namespace App\Http\Controllers;

use App\component;
use App\componentdetail;
use App\Materials;
use Illuminate\Http\Request;

class componentdetailController extends Controller
{
    public function index()
    {
        $comdes = componentdetail::all();
        return view('componentdetail.componentdetail', compact('comdes'));
    }
    public function create()
    {
        $mats = Materials::all();
        $comps = component::all();
        return view('componentdetail.add_componentdetail', compact('mats','comps'));
    }
    public function store(Request $request)
    {
        $post=$request->all();
        componentdetail::create($post);
        return back();
    }
    public function show($id)
    {
        $comde = componentdetail::
                    join('materials','componentdetails.Material_Id','=','materials.Material_Id')
                    ->join('components','componentdetails.component_Id','=','components.component_Id')
                    ->where('componentdetails.component_Id',$id)->get();
        return view('componentdetail.Showdetail', compact('comde'));
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
