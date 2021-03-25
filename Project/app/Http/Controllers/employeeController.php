<?php

namespace App\Http\Controllers;
use App\Departments;
use App\Employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('employeeOnly');
    }
    // public function __construct()
    // {
    //     $this->middlewear('auth');
    // }
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

        Employee::create([
            'idemp' => $request->idemp,
            'Fname' => $request->Fname,
            'Lname' => $request->Lname,
            'Address' => $request->Address,
            'Tel' => $request->Tel,
            'Sex' => $request->Sex,
            'Username' => $request->Username,
            'Password' => bcrypt($request->Password),
            'Emp_Status' => 'Enable',
            'type' => 0,
            'Dep_Id' => $request->Dep_Id,

            $updatestatusdep = Departments::findorfail($request->Dep_Id),
            $updatestatusdep->update([
                'Dep_Status' => 'ถูกใช้ไปแล้ว'
            ])
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
       Employee::find($id)->delete();
        return redirect()->back();
    }
}
