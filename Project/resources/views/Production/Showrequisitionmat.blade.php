@extends('layouts.manuproduction')
@section('Prodcution')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div style="float: right;">
                    <a href="/Protion" class="btn btn-info btn-xs" >รายการที่กำลังผลิตอยู่</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <div class="a"><h3>เลือกรายการที่จะผลิต</h3></div>
                            <hr>
                            <thead>
                                <tr>
                                    <th>รหัสการเบิก</th>
                                    <th>วันที่การเบิก</th>
                                    <th>จำนวนวัตถุดิบที่เบิก</th>
                                    <th>วัตถุดิบที่เบิก</th>
                                    <th>รหัสแผนงาน</th>
                                    <th></th>
                                </tr>
                            </thead>
                            @foreach ($Requimat as $P)
                            <form  role="form"  method="post" action="{{route('P.update',[$P->Requismat_Id])}}" >
                                {{ csrf_field() }}
                                @method('put')
                            <tbody>

                                <tr>
                                    <td>{{$P->Requismat_Id}}</td>
                                    <td>{{$P->Requismat_Date}}</td>
                                    <td>{{$P->Requismat_Amount}}</td>
                                    <td>{{$P->idmat}}</td>
                                    <td>{{$P->idplan}}</td>

                                <td>
                                    <button  type="submit" class="btn btn-warning btn-sm">ยืนยันการผลิต</button>
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
{{-- <script>
    function CheckProduction() {
        swal({
  title: "คุณแน่ใจหรือไม่",
  text: "ที่จะทำการผลิตรายการนี้",
  icon: "warning",
  buttons: true,
  dangerMode: true,
}).then((willDelete) => {
  if (willDelete) {
    swal("เริ่มทำรายการผลิต", {
      icon: "success",
    }).then(()=>{
        document.getElementById('Production').submit();
    });
        }
    });
}
</script> --}}
@endsection

