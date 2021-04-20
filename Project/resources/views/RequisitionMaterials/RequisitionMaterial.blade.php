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
                                    <td><?php $requsitionmat = App\RequisitionMaterial::join('production_plannings','requisition_materials.Plan_Id','=','production_plannings.Plan_Id')
                                        ->join('components','production_plannings.component_Id','=','components.component_Id')
                                        ->join('componentdetails','components.component_Id','=','componentdetails.component_Id')
                                        ->where('requisition_materials.Requismat_Id',$R->Requismat_Id)->get();?>
                                        @foreach ($requsitionmat as $requsitionmats)
                                        <?php $mats1 = App\Materials::find($requsitionmats->Material_Id); ?>

                                        {{$mats1 ->idmat}}-{{$mats1 ->Material_Name}}<br>
                                        @endforeach
                                    </td>
                                    <td><?php $plan = App\RequisitionMaterial::join('production_plannings','requisition_materials.Plan_Id','=','production_plannings.Plan_Id')
                                        ->join('products','production_plannings.Product_Id','=','products.Product_Id')
                                        ->where('requisition_materials.Requismat_Id',$R->Requismat_Id)->get(); ?>
                                        @foreach ($plan  as $plans)
                                        <?php $planings = App\Product::find($plans->Plan_Id); ?>
                                        {{$plans ->idplan}}-{{$plans ->Product_Name}}
                                        @endforeach</td>
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

