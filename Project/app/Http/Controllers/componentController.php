<?php

namespace App\Http\Controllers;

use App\component;
use App\componentdetail;
use App\Materials;
use Illuminate\Http\Request;
use Illuminate\View\Component as ViewComponent;

class componentController extends Controller
{
    public function index()
    {
        $comps = component::all();
        $mats = Materials::all();
        return view('component.component', compact('comps','mats'));
    }
    public function create()
    {
        $mats = Materials::all();
        return view('component.add_component',compact('mats'));
    }

    public function store(Request $request)
    {
        $comp = new component();
        $comp->fill($request->only($comp->getFillable()));
        $comp->save();

        $component = $request->Material_Id;
        for($i = 0; $i < count($component); $i++){
            componentdetail::create([
                'Comde_Amount' => $request->Comde_Amount[$i],
                'Material_Id' => $request->Material_Id[$i],
                'component_Id' =>  $comp->component_Id,
            ]);
        }
        return back();
        // $post=$request->all();
        // component::create($post);
        // return view('component.add_component');
    }

    public function show($id)
    {
        $comde = componentdetail::find($id);

        $mats = $comde -> Material_Id;
        $comps = $comde -> component_Id;
        $comde = $comde -> Comde_Amount;

        return view('componentdetail.Showdetail', compact('mats','comps','comde'));
    }

    public function edit($id)
    {
        $component = component::findorFail($id);
        $comde = componentdetail::
            join('materials','componentdetails.Material_Id','=','materials.Material_Id')
            ->join('components','componentdetails.component_Id','=','components.component_Id')
            ->where('componentdetails.component_Id',$id)->get();
        $mats = Materials::all();
        //return $comde;
        return view('component.edit_component',compact('component','comde','mats'));
    }

    public function update(Request $request, $id)
    {
        $update=component::findorFail($id);
        $update->update($request->all());

        return redirect('/comp');
    }

    public function destroy($id)
    {
        component::find($id)->delete();
        return redirect('/comp');
    }
}
