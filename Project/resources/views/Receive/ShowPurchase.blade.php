@extends('layouts.manureceives')
@section('Receive')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div style="float:right">
                    <a href="/Receive" class="btn btn-default btn-xs">รายการที่รับเข้า</a>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <div class="a"><h3>ข้อมูลการสั่งซื้อ</h3></div>
                            <hr>
                            <thead>
                                <tr>
                                    <th>รหัสการสั่งซื้อ</th>
                                    <th>วันที่การสั่งซื้อ</th>
                                    <th>พนักงานที่สั่งซื้อ</th>
                                    <th>บริษัทคู่ค้า</th>
                                    <th>จำนวนสั่งซื้อ</th>
                                    <th>รายละเอียดวัตถุดิบที่อยู่ในคลัง</th>
                                    <th></th>
                                </tr>
                            </thead>
                            @foreach ($receive as $Rec)
                            <form role="form" method="post"
                                action="{{route('Rec.update',[$Rec->Purchase_Id])}}">
                                {{ csrf_field() }}
                                @method('put')
                                <tbody>
                                    <tr>
                                        <td>{{$Rec->idpur}}</td>
                                        <td>{{$Rec->Purchase_Date}}</td>
                                        <td>{{App\Employee::find($Rec->Emp_Id)->Fname}}</td>
                                        <td>{{App\Partner::find($Rec->Partner_Id)->Partner_Name}}</td>
                                        <td>
                                            <?php
                                            $orderpur = App\PurchaseOrder::join('purchase_order_details','purchase_orders.Purchase_Id','=','purchase_order_details.Purchase_Id')
                                            ->where('purchase_orders.Purchase_Id',$Rec->Purchase_Id)->get();
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
                                        <td>
                                            <?php $orders = App\PurchaseOrder::join('purchase_order_details','purchase_orders.Purchase_Id','=','purchase_order_details.Purchase_Id')
                                            ->where('purchase_orders.Purchase_Id',$Rec->Purchase_Id)->get(); ?>
                                            @foreach ($orders as $o)
                                            <?php $material = App\Materials::find($o->Material_Id); ?>
                                            {{$material->idmat}} {{$material->Material_Name}} {{$material->Material_Amount}}<br>
                                            @endforeach
                                        </td>
                                        <td>
                                            <button onclick="receive();" type="submit" class="btn btn-warning btn-sm">รับวัตถุดิบเข้า</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                    </form>


                                @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function receive(){
    }
    @if(session('success'))
        swal("{{session('success')}}");
    @endif
</script>
@endsection

