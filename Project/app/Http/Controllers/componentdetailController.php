<?php

namespace App\Http\Controllers;

use App\component;
use App\componentdetail;
use App\Materials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
                    //return $comde;
        return view('componentdetail.Showdetail', compact('comde'));
    }
    public function edit($id)
    {
        // $component = component::findorFail($id);
        // $comde = componentdetail::
        //     join('materials','componentdetails.Material_Id','=','materials.Material_Id')
        //     ->join('components','componentdetails.component_Id','=','components.component_Id')
        //     ->where('componentdetails.component_Id',$id)->get();
        // $mats = Materials::all();
        // //return $comde;
        // return view('component.edit_component',compact('component','comde','mats'));
    }
    public function update(Request $request, $id)
    {
        // $update=componentdetail::findorFail($id);
        // $update->update($request->all());

        // return redirect('/comde');
    }
    public function destroy($id)
    {
        componentdetail::find($id)->delete();
        return redirect('/comde');
    }
}
