@extends('layouts.manurequisitionproduct')
@section('RequisitionPro')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div style="float: right;">
                        <a href="/RequiPro" class="btn btn-info btn-xs">รายการที่เบิกสินค้า</a>
                        </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <div class="a"><h3>ข้อมูลรายการผลิต</h3></div>
                            <hr>
                            <thead>
                                <tr>
                                    <th>รหัสการผลิต</th>
                                    <th>วันที่การผลิต</th>
                                    <th>รหัสการเบิกวัตถุดิบ</th>
                                    <th>ชื่อคนที่สั่งผลิต</th>
                                    <th></th>
                                </tr>
                            </thead>
                            @foreach ($RequiP as $RequiPP)
                            <form id="Requisitionpro" role="form"  method="post" action="{{route('RequiPP.update',[$RequiPP->Production_Id])}}" >
                                {{ csrf_field() }}
                                @method('put')
                            <tbody>

                                <tr>
                                    <td>{{$RequiPP->Production_Id}}</td>
                                    <td>{{$RequiPP->Production_Date}}</td>
                                    <td>{{$RequiPP->Requismat_Id}}</td>
                                    <td>{{App\Employee::find($RequiPP->Emp_Id)->Fname}}</td>
                                <td>
                                    <button onclick="Requisitionpro()" type="button" class="btn btn-warning btn-sm" onclick="Requisition();">เบิกสินค้า</button>
                                </td>
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
</div>
<script>
    function Requisitionpro() {
        swal({
  title: "คุณแน่ใจหรือไม่",
  text: "ที่จะเบิกสินค้าชิ้นนี้",
  icon: "warning",
  buttons: true,
  dangerMode: true,
}).then((willDelete) => {
  if (willDelete) {
    swal("เบิกสินค้าเสร็จสิ้น", {
      icon: "success",
    }).then(()=>{
        document.getElementById('Requisitionpro').submit();
    });
        }
    });
}
</script>
@endsection

