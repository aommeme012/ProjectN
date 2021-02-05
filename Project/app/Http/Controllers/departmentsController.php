<?php

namespace App\Http\Controllers;

use App\Departments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class departmentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('employeeOnly');
    }

    public function index()
    {
        $deps = Departments::all();
        return view('department.departments', compact('deps'));
        //return $deps;
    }
    public function create()
    {
        return view('department.add_department');
    }

    public function store(Request $request)
    {

        $post=$request->all();
        Departments::create($post);
        return view('department.add_department');
    }

    public function show(Departments $departments)
    {
        //
    }

    public function edit($id)
    {
        $dep = Departments::find($id);
        return view('department.edit_department',compact('dep'));
    }

    public function update(Request $request, $id)
    {
        $update=Departments::findorFail($id);
        $update->update($request->all());

        return redirect('/dep');
    }

    public function destroy($id)
    {
        Departments::find($id)->delete();
        return redirect('/dep');
    }
}
