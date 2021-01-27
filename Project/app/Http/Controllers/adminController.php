<?php

namespace App\Http\Controllers;

use App\admin;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        $admins = admin::all();
        return view('admin.admin', compact('admins'));
    }
    public function create()
    {
        return view('admin.add_admin');
    }
    public function store(Request $request)
    {
        $post=$request->all();
        admin::create($post);
        return view('admin.add_admin');
    }

    public function show(admin $admin)
    {
        //
    }

    public function edit($id)
    {
        $admin = admin::find($id);
        return view('admin.edit_admin',compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $update=admin::findorFail($id);
        $update->update($request->all());

        return redirect('/admin');
    }

    public function destroy($id)
    {
        admin::find($id)->delete();
        return redirect('/admin');
    }
}
