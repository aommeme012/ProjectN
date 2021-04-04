@extends('layouts.manudep')
@section('deppurchase')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <div class="a"><h3>รายการสั่งซื้อวัตถุดิบ</h3></div>
                            <hr>
                            <thead>
                                <tr>
                                    <th>รหัสการสั่งซื้อ</th>
                                    <th>วันที่การสั่งซื้อ</th>
                                    <th>จำนวนและวัตถุดิบที่ซื้อ</th>
                                    <th>พนักงาน</th>
                                    <th>บริษัทคู่ค้า</th>
                                    <th>สถานะการสั่งซื้อ</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Purc as $Pur)
                                <tr>
                                    <td>{{$Pur->Purchase_Id}}</td>
                                    <td>{{$Pur->Purchase_Date}}</td>
                                    <td>
                                        <?php
                                        $orderpurr = App\PurchaseOrder::join('purchase_order_details','purchase_orders.Purchase_Id','=','purchase_order_details.Purchase_Id')
                                        ->where('purchase_orders.Purchase_Id',$Pur->Purchase_Id)->get();
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
                                    <td>{{App\Employee::find($Pur->Emp_Id)->Fname}}</td>
                                    <td>{{App\Partner::find($Pur->Partner_Id)->Partner_Name}}</td>
                                    <td>{{$Pur->Purchase_Status}}</td>

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


