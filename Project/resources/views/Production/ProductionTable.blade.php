@extends('layouts.manuproduction')
@section('Prodcution')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <div style="float: right;">
                            <a href="/Ption" class="btn btn-info btn-xs">รายการที่ผลิตเสร็จสิ้น</a>
                        </div>
                        <table class="table table-striped table-bordered table-hover">
                            <div class="a"><h3>ข้อมูลรายการที่ผลิต</h3></div>
                            <hr>
                            <thead>
                                <tr>
                                    <th>รหัสการผลิต</th>
                                    <th>วันที่การผลิต</th>
                                    <th>สถานะการผลิต</th>
                                    <th>รหัสการเบิก</th>
                                    <th>ชื่อคนที่สั่งผลิต</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Production as $P)
                                <form id="SubmitProduction" role="form"  method="post" action="/updatesuccess/{{$P->Production_Id}}" >
                                    {{ csrf_field() }}
                                <tr>
                                    <td>{{$P->Production_Id}}</td>
                                    <td>{{$P->Production_Date}}</td>
                                    <td>{{$P->Production_Status}}</td>
                                    <td>{{$P->Requismat_Id}}</td>
                                    <td>{{$P->Fname}}</td>
                                    <td>
                                        <button onclick="Production()" type="button" class="btn btn-warning btn-sm" >ยืนยันการผลิตเสร็จสิ้น</button>
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
<script>
    function Production() {
        swal({
  title: "คุณแน่ใจหรือไม่",
  text: "ว่าจะยืนยันการผลิต",
  icon: "warning",
  buttons: true,
  dangerMode: true,
}).then((willDelete) => {
  if (willDelete) {
    swal("ผลิตเสร็จสิ้น", {
      icon: "success",
    }).then(()=>{
        document.getElementById('SubmitProduction').submit();
    });
        }
    });
}
</script>
@endsection


