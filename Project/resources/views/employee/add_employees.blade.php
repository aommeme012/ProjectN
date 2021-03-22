@extends('layouts.manumanage')
@section('component')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-body">
                                <div class="row">
                                    <div style="color:white;padding:15px 50px 5px 50px;float:right;font-size:16px;">
                                    <a href="/emp" class="btn btn-danger"><i class="w3-xxxlarge glyphicon glyphicon-arrow-left"></i></a>
                                    </div>
                                    <div class="col-md-4">
                                        <h3><i class="w3-xxxlarge glyphicon glyphicon-user">&nbsp;เพิ่มข้อมูลพนักงาน</i></h3>
                                        <hr>
                                        <form id="addEmp" role="form"  method="post" action="{{route('emp.store')}}">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="idemp" placeholder="รหัสพนักงาน">
                                                <br>
                                                <input class="form-control" type="text" name="Fname" placeholder="ชื่อ">
                                                <br>
                                                <input class="form-control" type="text" name="Lname"placeholder="นามสกุล">
                                                <div class="form-group">
                                                    <br>
                                                <input class="form-control" type="text" name="Address"placeholder="ที่อยู่">
                                                <div class="form-group">
                                                    <br>
                                                <input class="form-control" type="text" name="Tel"placeholder="เบอร์โทร">
                                                <div class="form-group">
                                                    <br>
                                                <input class="form-control" type="text" name="Sex"placeholder="เพศ">
                                                <div class="form-group">
                                                    <br>
                                                <input class="form-control" type="text" name="Username"placeholder="Username">
                                                <div class="form-group">
                                                    <br>
                                                <input class="form-control" type="text" name="Password"placeholder="Password">
                                                <div class="form-group">
                                                    <br>
                                            <label>เลือกแผนกงาน</label>
                                            <select class="form-control" name="Dep_Id">
                                            @foreach ($deps as $dep)
                                                <option value="{{$dep->Dep_Id}}">
                                                {{$dep->Dep_Name}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                            </div>
                                            <div class="form-group">
                                                <button onclick="addEmp()" type="button" class="btn btn-primary btn-sm">ยืนยัน</button>
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
    function addEmp() {
        swal({
  title: "คุณแน่ใจหรือไม่",
  text: "ที่จะเพิ่มพนักงาน",
  icon: "warning",
  buttons: true,
  dangerMode: true,
}).then((willDelete) => {
  if (willDelete) {
    swal("เพิ่มพนักงานสำเร็จสำเร็จ", {
      icon: "success",
    }).then(()=>{
        document.getElementById('addEmp').submit();
    });
        }
    });
}
</script>
@endsection
