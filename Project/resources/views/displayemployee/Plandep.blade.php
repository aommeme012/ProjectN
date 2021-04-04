@extends('layouts.manuplandep')
@section('depplan')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <div class="a"><h3>รายการวางแผนการผลิตและวัตถุดิบที่จะนำไปผลิต</h3></div>
                            <hr>
                            <thead>
                                <tr>
                                    <th>รหัสการวางแผน</th>
                                    <th>วันที่การวางแผน</th>
                                    <th>จำนวนที่จะผลิต</th>
                                    <th>สถานะการวางแผน</th>
                                    <th>ส่วนประกอบ</th>
                                    <th>สินค้าที่จะผลิต</th>
                                    <th>วัตถุดิบที่นำไปผลิต</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Plans as $Plan)
                                <tr>
                                    <td>{{$Plan->Plan_Id}}</td>
                                    <td>{{$Plan->Plan_Date}}</td>
                                    <td>{{$Plan->Amount}}</td>
                                    <td>{{$Plan->Planning_Status}}</td>
                                    <td>{{App\component::find($Plan->component_Id)->component_Name}}</td>
                                    <td>{{App\Product::find($Plan->Product_Id)->Product_Name}}</td>
                                    <td><?php
                                        $orderpurr = App\ProductionPlanning::join('components','production_plannings.component_Id','=','components.component_Id')
                                        ->join('componentdetails','components.component_Id','=','componentdetails.component_Id')
                                        ->where('production_plannings.Plan_Id',$Plan->Plan_Id)->get();
                                        ?>
                                        @foreach ($orderpurr as $matplan)
                                        <?php
                                            $materialssss = App\Materials::find($matplan->Material_Id);
                                        ?>
                                        {{$materialssss->idmat}}
                                        {{$materialssss->Material_Name}}
                                        {{$matplan->Comde_Amount}}<br>
                                        @endforeach
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
@endsection


