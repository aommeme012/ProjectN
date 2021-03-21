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
                                    <th>สถานะการสั่งซื้อ</th>
                                    <th>รายละเอียดวัตถุดิบที่อยู่ในคลัง</th>
                                    <th></th>
                                </tr>
                            </thead>
                            @foreach ($receive as $Rec)
                            <form role="form" method="post" id="Receives"
                                action="{{route('Rec.update',[$Rec->Purchase_Id])}}">
                                {{ csrf_field() }}
                                @method('put')
                                <tbody>

                                    <tr>
                                        <td>{{$Rec->Purchase_Id}}</td>
                                        <td>{{$Rec->Purchase_Date}}</td>
                                        <td>{{App\Employee::find($Rec->Emp_Id)->Fname}}</td>
                                        <td>{{App\Partner::find($Rec->Partner_Id)->Partner_Name}}</td>
                                        <td>{{$Rec->Purchase_Status}}</td>
                                        <td>
                                            <?php $orders = App\PurchaseOrder::join('purchase_order_details','purchase_orders.Purchase_Id','=','purchase_order_details.Purchase_Id')
                                            ->where('purchase_orders.Purchase_Status','Enable')->get(); ?>
                                            @foreach ($orders as $o)
                                            <?php $material = App\Materials::find($o->Material_Id); ?>
                                            {{$material->Material_Name}} {{$material->Material_Amount}}<br>
                                            @endforeach
                                        </td>
                                        <td>
                                            <button onclick="checkReceives()" type="button"
                                             class="btn btn-warning btn-sm">รับวัตถุดิบเข้า</button>
                                        </td>
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
</div>
</body>
<script>
    function checkReceives() {
        swal({
  title: "คุณแน่ใจหรือไม่",
  text: "ที่จะรับวัตถุดิบชิ้นนี้เข้า",
  icon: "warning",
  buttons: true,
  dangerMode: true,
}).then((willDelete) => {
  if (willDelete) {
    swal("รับวัตถุดิบเข้าเสร็จเรียบร้อย", {
      icon: "success",
    }).then(()=>{
        document.getElementById('Receives').submit();
    });
        }
    });
}
</script>
@endsection

