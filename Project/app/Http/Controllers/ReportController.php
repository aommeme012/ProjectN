<?php

namespace App\Http\Controllers;

use App\RequisitionMaterial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {
        $reportmat = RequisitionMaterial::all();
        return view('report.reportrequisitionmat', compact('reportmat'));
    }
    public function create()
    {
        return view('report.indexreport');
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
