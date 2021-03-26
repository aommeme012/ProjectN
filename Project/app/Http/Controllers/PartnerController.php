<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartnerController extends Controller
{
    public function index()
    {
        $parts = Partner::all();
        return view('partner.partners', compact('parts'));
        //return $deps;
    }
    public function create()
    {
        return view('partner.add_partners');
    }
    public function store(Request $request)
    {
        $post=$request->all();
        Partner::create($post);
        return view('partner.add_partners');
    }
    public function show(Partner $Partner)
    {
        //
    }
    public function edit($id)
    {
        $part = Partner::find($id);
        return view('partner.edit_partners',compact('part'));
    }

    public function update(Request $request, $id)
    {
        $update=Partner::findorFail($id);
        $update->update($request->all());

        return redirect('/part');
    }
    public function destroy($id)
    {
        $deletepart=Partner::find($id);
        if($deletepart->Partner_Status == "Available"){
            $deletepart->delete();
            return redirect()->back()->with('success','ลบสำเร็จ');
           }else{
               return redirect()->back()->with('fail','ไม่สามารถลบได้');
           }
    }
}
