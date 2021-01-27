<?php

namespace App\Http\Controllers;

use App\TypeProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TypeProductController extends Controller
{
    public function index()
    {
        $types = TypeProduct::all();
        return view('TypeProduct.TypeProducts', compact('types'));
        //return $deps;
    }
    public function create()
    {
        return view('TypeProduct.add_TypeProducts');
    }
    public function store(Request $request)
    {
        $post=$request->all();
        TypeProduct::create($post);
        return view('TypeProduct.add_TypeProducts');
    }
    public function show(TypeProduct $Partner)
    {
        //
    }
    public function edit($id)
    {
        $type = TypeProduct::find($id);
        return view('TypeProduct.edit_TypeProducts',compact('type'));
    }

    public function update(Request $request, $id)
    {
        $update=TypeProduct::findorFail($id);
        $update->update($request->all());

        return redirect('/type');
    }
    public function destroy($id)
    {
        TypeProduct::find($id)->delete();
        return redirect('/type');
    }
}
