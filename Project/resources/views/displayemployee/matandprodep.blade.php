@extends('layouts.manudeprecdep')
@section('showrecdep')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <div class="a"><h3>รายการวัตถุดิบที่นำเข้า</h3></div>
                            <hr>
                            <thead>
                                <tr>
                                    <th>รหัสรับวัตถุดิบ</th>
                                    <th>วันที่รับวัตถุดิบ</th>
                                    <th>พนักงาน</th>
                                    <th>วันที่การสั่งซื้อ</th>
                                    <th>จำนวนที่รับวัตถุดิบเข้าและวัตถุดิบ</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rec as $Recs)
                                <tr>
                                    <td>{{$Recs->Receive_Id}}</td>
                                    <td>{{$Recs->Receive_Date}}</td>
                                    <td>{{App\Employee::find($Recs->Emp_Id)->Fname}}</td>
                                    <td>{{App\PurchaseOrder::find($Recs->Purchase_Id)->Purchase_Date}}</td>
                                    <td>
                                        <?php
                                        $orderpurr = App\PurchaseOrder::join('purchase_order_details','purchase_orders.Purchase_Id','=','purchase_order_details.Purchase_Id')
                                        ->where('purchase_orders.Purchase_Id',$Recs->Purchase_Id)->get();
                                        ?>
                                        @foreach ($orderpurr as $orderde)
                                        <?php
                                            $materialsss = App\Materials::find($orderde->Material_Id);
                                        ?>
                                        {{$materialsss->idmat}}
                                        {{$materialsss->Material_Name}}
                                        {{$orderde->Pdetail_Amount}}<br>
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


