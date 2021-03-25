<?php

namespace App\Http\Controllers;

use App\component;
use App\componentdetail;
use App\Materials;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


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
        $comps = component::all();
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
                'component_Value'=>$request->component_Value,
                'Comde_Amount' => $request->Comde_Amount[$i],
                'Material_Id' => $request->Material_Id[$i],
                'component_Id' =>  $comp->component_Id,
            ]);
        }
        return back();
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
        return view('component.edit_component',compact('component','comde','mats'));
    }

    public function update(Request $request, $id)
    {
        //return $request;
        $update=component::findorFail($id);
        $update->update($request->all());

        for($i = 0; $i < count($request->Material_Id);$i++){
            if(isset($request->Comde_Id[$i])){
               // return "hi";
                DB::table('componentdetails')->where('Comde_Id',$request->Comde_Id[$i])->update([
                    'component_Value'=>$request->component_Value,
                    'Material_Id' => $request->Material_Id[$i],
                    'Comde_Amount' => $request->Comde_Amount[$i],
                ]);
            } else{
                componentdetail::create([
                    'component_Value'=>$request->component_Value,
                    'Material_Id' => $request->Material_Id[$i],
                    'Comde_Amount' => $request->Comde_Amount[$i],
                    'component_Id' => $id,
                ]);
            }
        }
        return redirect('/comp');
    }

    public function destroy($id)
    {
        component::find($id)->delete();
        return redirect('/comp');
    }
}
