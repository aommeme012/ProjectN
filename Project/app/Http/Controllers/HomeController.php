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
        //--------admin----------//
        if(Auth::user()->type == 1 ){
            return redirect('/dep');
        }
        //--------แผนกขาย----------//
        if(Auth::user()->type == 0 && Auth::user()->Dep_Id == 5 ){
            return redirect('/indexpro');
        }
        //--------แผนกจัดซื้อ----------//
        if(Auth::user()->type == 0 && Auth::user()->Dep_Id == 2){
            return redirect('/Purshow');
        }
        //--------แผนกผลิต----------//
        if(Auth::user()->type == 0 && Auth::user()->Dep_Id == 3){
            return redirect('/PurEmp');
        }
        //--------แผนกคลัง----------//
        if(Auth::user()->type == 0 && Auth::user()->Dep_Id == 4){
            return redirect('/Recdep');
        }
    }
}

