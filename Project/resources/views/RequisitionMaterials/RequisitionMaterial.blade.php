@extends('layouts.manurequisitionmat')
@section('Requisitionmat')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div style="float: right;">
                    <a href="/RequiMM" class="btn btn-danger" ><i class="w3-xxxlarge glyphicon glyphicon-arrow-left"></i></a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <div class="a"><h3>รายการที่เบิกไปแล้ว</h3></div>
                            <hr>
                            <thead>
                                <tr>
                                    <th>รหัสการเบิก</th>
                                    <th>วันที่การเบิก</th>
                                    <th>จำนวนวัตถุดิบที่เบิก</th>
                                    <th>วัตถุดิบที่เบิก</th>
                                    <th>รหัสการวางแผน</th>
                                </tr>
                            </thead>
                            @foreach ($Remat as $R)
                            <tbody>
                                <tr>
                                    <td>{{$R->Requismat_Id}}</td>
                                    <td>{{$R->Requismat_Date}}</td>
                                    <td>{{$R->Requismat_Amount}}</td>
                                    <td>{{App\Materials::find($R->Material_Id)->idmat}}</td>
                                    <td>{{App\ProductionPlanning::find($R->Plan_Id)->idplan}}</td>
                                @endforeach
                        </tbody>
                    </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

