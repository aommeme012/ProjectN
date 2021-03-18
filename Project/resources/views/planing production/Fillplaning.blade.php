@extends('layouts.manuproductionplaning')
@section('PlaningProduction')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                        <div class="row">
                            <div style="color:white;padding:15px 50px 5px 50px;float:right;font-size:16px;">
                            <a href="/Plan" class="btn btn-danger btn-xs">ไปหน้าตาราง</a>
                            </div>
                            <div class="col-md-6">
                                <h3>แผนการผลิต</h3>
                                <hr>
                                <form id="Plan" role="form"  method="post" action="{{route('Plan.store')}}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>วันที่</label &nbsp>
                                        <input class="form-control" type="Date" name="Plan_Date" id="start" min = <?php echo date('Y-m-d',);?> value="<?php echo date('Y-m-d',); ?>">
                                        <label>จำนวน</label>
                                        <input class="form-control" type="number" name="Amount">
                                    <label>ส่วนประกอบ</label>
                                    <select class="form-control" name="component_Id">
                                    @foreach ($comps as $comp)
                                        <option value="{{$comp->component_Id}}">
                                        {{$comp->component_Name}}
                                        </option>
                                        @endforeach
                                    </select>
                                    <label>สินค้า</label>
                                    <select class="form-control" name="Product_Id">
                                    @foreach ($pros as $Pro)
                                        <option value="{{$Pro->Product_Id}}">
                                        {{$Pro->Product_Name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                                    <div class="form-group">
                                        <button onclick="CheckPlan()" type="button" class="btn btn-primary btn-sm">ยืนยัน</button>
                                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function CheckPlan() {
        swal({
  title: "คุณแน่ใจหรือไม่",
  text: "ที่จะวาแผนการผลิตชิ้นนี้",
  icon: "warning",
  buttons: true,
  dangerMode: true,
}).then((willDelete) => {
  if (willDelete) {
    swal("วางแผนเสร็จสิ้น", {
      icon: "success",
    }).then(()=>{
        document.getElementById('Plan').submit();
    });
        }
    });
}
</script>
@endsection

