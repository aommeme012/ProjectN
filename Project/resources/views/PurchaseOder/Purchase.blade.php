@extends('layouts.manupurchase')
@section('Purchase')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <div class="a"><h3>ข้อมูลการสั่งซื้อวัตถุดิบ</h3></div>
                            <hr>
                            <a href="{{ route('Pur.index')}}" class="btn btn-primary btn-sm">เพิ่มการสั่งซื้อ</a>
                            <br><br>
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>รหัสการสั่งซื้อ</th>
                                    <th>วันที่การสั่งซื้อ</th>
                                    <th>ชื่อพนักงานที่สั่งซื้อ</th>
                                    <th>บริษัทคู่ค้า</th>
                                    <th>สถานะการสั่งซื้อ</th>
                                    <th>รายละเอียดการสั่งซื้อ</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Purc as $Pur)
                                <form role="form"  method="post" action="{{route('Pur.update',[$Pur->Purchase_Id])}}" >
                                    {{ csrf_field() }}
                                    @method('put')
                                <tr>
                                    <td>{{$Pur->Purchase_Id}}</td>
                                    <td>{{$Pur->idpur}}</td>
                                    <td>{{$Pur->Purchase_Date}}</td>
                                    <td>{{App\Employee::find($Pur->Emp_Id)->Fname}}</td>
                                    <td>{{App\Partner::find($Pur->Partner_Id)->Partner_Name}}</td>
                                    <td>{{$Pur->Purchase_Status}}</td>
                                    <td>
                                        <?php
                                        $orderpur = App\PurchaseOrder::join('purchase_order_details','purchase_orders.Purchase_Id','=','purchase_order_details.Purchase_Id')
                                        ->where('purchase_orders.Purchase_Id',$Pur->Purchase_Id)->get();
                                        ?>
                                        @foreach ($orderpur as $orderdetail)
                                        <?php
                                            $materialss = App\Materials::find($orderdetail->Material_Id);
                                        ?>
                                        {{$materialss->idmat}}
                                        {{$materialss->Material_Name}}
                                        {{$orderdetail->Pdetail_Amount}}<br>
                                        @endforeach
                                    </td>
                                    <td> <button type="submit" class="btn btn-default"><i class="fa fa-print fa-1x"></i></a>
                                    </td>
                                </tr>
                            </form>
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


