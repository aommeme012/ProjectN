@extends('layouts.manuproductionplaning')
@section('PlaningProduction')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div style="float: right;">
                        <a href="/Plan" class="btn btn-danger"><i class="w3-xxxlarge glyphicon glyphicon-arrow-left"></i></a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <div class="a"><h3>ประวัติการวางแผน</h3></div>
                            <hr>
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
                                @foreach ($Planings as $Plan)
                                <form id="ReturnPlan" role="form"  method="post" action="{{route('Plan.update',[$Plan->Plan_Id])}}" >
                                    {{ csrf_field() }}
                                    @method('put')
                                <tr>
                                    <td>{{$Plan->Plan_Id}}</td>
                                    <td>{{$Plan->Plan_Date}}</td>
                                    <td>{{$Plan->Amount}}</td>
                                    <td>{{$Plan->Planning_Status}}</td>
                                    <td>{{App\component::find($Plan->component_Id)->component_Name}}</td>
                                    <td>{{App\Product::find($Plan->Product_Id)->Product_Name}}</td>
                                    <td>
                                        <button onclick="CheckPlan()" type="button" class="btn btn-warning btn-sm">ทำรายการอีกครั้ง</button>
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
</div>
<script>
    function CheckPlan() {
        swal({
  title: "คุณแน่ใจหรือไม่",
  text: "ว่าจะทำรายการวางแผนนี้อีกครั้ง",
  icon: "warning",
  buttons: true,
  dangerMode: true,
}).then((willDelete) => {
  if (willDelete) {
    swal("วางแผนเสร็จสิ้น", {
      icon: "success",
    }).then(()=>{
        document.getElementById('ReturnPlan').submit();
    });
        }
    });
}
</script>
@endsection
