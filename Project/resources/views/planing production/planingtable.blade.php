@extends('layouts.manuproductionplaning')
@section('PlaningProduction')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div style="float: right;">
                        <a href="/Planings" class="btn btn-default btn-xs">ประวัติการวางแผน</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <div class="a"><h3>ข้อมูลการวางแผนการผลิต</h3></div>
                            <hr>
                            <a href="{{ route('Plan.create')}}" class="btn btn-primary btn-sm">เพิ่มการวางแผน</a>
                            <br><br>
                            <thead>
                                <tr>
                                    <th>รหัสการวางแผน</th>
                                    <th>วันที่การวางแผน</th>
                                    <th>จำนวนที่จะผลิต</th>
                                    <th>สถานะการวางแผน</th>
                                    <th>ส่วนประกอบ</th>
                                    <th>สินค้าที่จะผลิต</th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Plans as $Plan)
                                <tr>
                                    <td>{{$Plan->idplan}}</td>
                                    <td>{{$Plan->Plan_Date}}</td>
                                    <td>{{$Plan->Amount}}</td>
                                    <td>{{$Plan->Planning_Status}}</td>
                                    <td>{{App\component::find($Plan->component_Id)->component_Name}}</td>
                                    <td>{{App\Product::find($Plan->Product_Id)->Product_Name}}</td>
                                    <td>
                                        <a href="{{ route('Plan.edit',[$Plan->Plan_Id])}}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
