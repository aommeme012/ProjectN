<?php

namespace App\Http\Controllers;

use App\PurchaseOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','employeeOnly']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->Dep_Id == 1 ){
            return redirect('/dep');
        }
        if(Auth::user()->Dep_Id == 2){
            return redirect('/PurEmp');
        }
        if(Auth::user()->Dep_Id == 3){
            return redirect('/Recdep');
        }
        if(Auth::user()->Dep_Id == 6){
            return redirect('/PlanEmp');
        }
        if(Auth::user()->Dep_Id == 5){
            return redirect('/Recdep');
        }
    }
}

