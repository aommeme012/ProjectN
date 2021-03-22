@extends('layouts.manumanage')
@section('component')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                        <div class="row">
                            <div style="color:white;padding:15px 50px 5px 50px;float:right;font-size:16px;">
                                <a href="/mat" class="btn btn-danger"><i class="w3-xxxlarge glyphicon glyphicon-arrow-left"></i></a>
                                </div>
                            <div class="col-md-4">
                                <h3>แก้ไขข้อมูลวัตถุดิบ</h3>
                                <hr>
                                <form id="editMat" role="form"  method="post" action="{{route('mat.update',[$mat->Material_Id])}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    @method('put')
                                    <div class="form-group">
                                    <label>รหัสวัตถุดิบ</label>
                                    <input class="form-control" type="text" name="idmat" value="{{$mat->idmat}}">
                                    <label>ชื่อวัตถุดิบ</label>
                                    <input class="form-control" type="text" name="Material_Name" value="{{$mat->Material_Name}}">
                                    <label>จำนวนวัตถุดิบ</label>
                                    <input class="form-control" type="text" name="Material_Amount" value="{{$mat->Material_Amount}}" disabled>
                                    <label>หน่วยวัตถุดิบ</label>
                                    <input class="form-control" type="text" name="unitmaterial" value="{{$mat->unitmaterial}}">
                                    @if ($mat->Material_Status == "Enable")
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="Material_Status" value="Enable" checked />Enable
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="Material_Status" value="Disable"  />Disable
                                                    </label>
                                                </div>
                                            @else
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="Material_Status" value="Enable"  />Enable
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="Material_Status" value="Disable" checked />Disable
                                                    </label>
                                                </div>
                                            @endif
                                    <div class="form-group">
                                        <button onclick="checkEdit()" type="button" class="btn btn-warning btn-sm">แกไข</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function checkEdit() {
        swal({
  title: "คุณแน่ใจหรือไม่",
  text: "จะแก้ไข {{$mat->Material_Name}} ?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
}).then((willDelete) => {
  if (willDelete) {
    swal("{{$mat->Material_Name}} แก้ไขเรียบร้อย", {
      icon: "success",
    }).then(()=>{
        document.getElementById('editMat').submit();
    });
        }
    });
}
</script>
@endsection

