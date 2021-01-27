<?php

namespace App\Http\Controllers;

use App\TypeProduct;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $pros = Product::all();
        return view('Product.products', compact('pros'));
    }
    public function create()
    {
        $types = TypeProduct::all();
        return view('Product.add_products', compact('types'));
    }
    public function store(Request $request)
    {
        $post=$request->all();
        Product::create($post);
        return back();
    }
    public function show(Product $Product)
    {
        //
    }
    public function edit($id)
    {
        $Pro = Product::find($id);
        $types = TypeProduct::all();
        return view('Product.edit_Products',compact('Pro','types'));
    }

    public function update(Request $request, $id)
    {
        $update=Product::findorFail($id);
        $update->update($request->all());

        return redirect('/Pro');
    }
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect('/Pro');
    }
}
