@extends('layouts.manumanage')
@section('component')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-10">
                <div class="panel-body">
                        <div class="row">
                            <div style="padding:15px 50px 5px 50px;float:right;font-size:16px;">
                                <a href="/dep" class="btn btn-danger"><i class="w3-xxxlarge glyphicon glyphicon-arrow-left"></i></i></a>
                                </div>
                            <div class="col-md-3">
                                <h3>หน้าแก้ไขข้อมูลของแผนกงาน</h3></i>
                                <hr>
                                <form id="editDep" role="form"  method="post" action="{{route('dep.update',[$dep->Dep_Id])}}" >
                                    {{ csrf_field() }}
                                    @method('put')
                                    <h4>ชื่อแผนกงาน</h4>
                                    <div class="a"><div class="form-group"></div>
                                    <input class="form-control" type="text" name="Dep_Name" value="{{$dep->Dep_Name}}"placeholder="ชื่อแผนกงาน" required >
                                    </div>

                                    @if ($dep->Dep_Status == "Available")
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="Dep_Status" value="Enable">
                                            Enable
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="Dep_Status" value="Disable">
                                            Disable
                                        </label>
                                    </div>
                                    @endif
                                    @if ($dep->Dep_Status == "Enable")
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="Dep_Status" value="Enable" checked>
                                            Enable
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="Dep_Status" value="Disable">
                                            Disable
                                        </label>
                                    </div>
                                    @endif
                                    @if($dep->Dep_Status == "Disable")
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="Dep_Status" value="Enable">
                                            Enable
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="Dep_Status" value="Disable" checked>
                                            Disable
                                        </label>
                                    </div>
                                    @endif
                                    <div class="form-group">
                                        <button  type="button" onclick="checkEdit()" class="btn btn-warning btn-sm"  >แก้ไขข้อมูล</button>
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
  text: "จะแก้ไข {{$dep->Dep_Name}} ?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
}).then((willDelete) => {
  if (willDelete) {
    swal("{{$dep->Dep_Name}} แก้ไขเรียบร้อย", {
      icon: "success",
    }).then(()=>{
        document.getElementById('editDep').submit();
    });
        }
    });
}
</script>
@endsection

