<?php

namespace App\Http\Controllers;
use App\Departments;
use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class employeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('employeeOnly');
    }
    public function index()
    {
        $emps = Employee::all();
        return view('employee.employees', compact('emps'));
    }
    public function create()
    {
        $deps = Departments::all();
        return view('employee.add_employees', compact('deps'));
    }
    public function store(Request $request)
    {
        // Employee::create([
        //     'idemp' => $request->getEmpId(),
        //     'Fname' => $request->Fname,
        //     'Lname' => $request->Lname,
        //     'Address' => $request->Address,
        //     'Tel' => $request->Tel,
        //     'Sex' => $request->Sex,
        //     'Username' => $request->Username,
        //     'Password' => bcrypt($request->Password),
        //     'Emp_Status' => 'Enable',
        //     'type' => 0,
        //     'Dep_Id' => $request->Dep_Id,

        $Employee = new Employee;
        $Employee->fill($request->only($Employee->getFillable()));
        $Employee->idemp = $Employee->getEmpId();
        $Employee->Fname = $request->Fname;
        $Employee->Lname = $request->Lname;
        $Employee->Address = $request->Address;
        $Employee->Tel = $request->Tel;
        $Employee->Sex = $request->Sex;
        $Employee->Username = $request->Username;
        $Employee->Password = Hash::make($request->Password);
        $Employee->Emp_Status = 'Enable';
        $Employee->type = $request->type;
        $Employee->Dep_Id = $request->Dep_Id;
        $Employee->save();

            $updatestatusdep = Departments::findorfail($request->Dep_Id);
            $updatestatusdep->update([
                'Dep_Status' => 'Enable'
        ]);

        return back();
    }
    public function show(Employee $Employee)
    {
        //
    }
    public function edit($id)
    {
        $emp = Employee::find($id);
        $deps = Departments::all();
        return view('employee.edit_employees',compact('emp','deps'));
    }
    public function update(Request $request, $id)
    {
        $update=Employee::findorFail($id);
        $update->update($request->all());

        return redirect('/emp');
    }
    public function destroy($id)
    {
       $deleteemp=Employee::find($id);
       if($deleteemp->Emp_Status == "Available"){
        $deleteemp->delete();
        return redirect()->back()->with('success','ลบสำเร็จ');
       }else
       {
           return redirect()->back()->with('fail','ไม่สามารถลบได้');
       }
    }
}
