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
                                        <h3>แก้ไขข้อมูลพนักงาน</h3>
                                        <hr>
                                        {{-- <form id="editEmp" method="post" action="{{route('emp.update',[$emp->Emp_Id])}}" >
                                            {{ csrf_field() }}
                                        @method('put') --}}
                                        <div class="form-group">
                                            <label>ชื่อ</label>
                                            <input class="form-control" type="text" name="Fname"value="{{$emp->Fname}}">
                                            <label>นามสกุล</label>
                                            <input class="form-control" type="text" name="Lname"value="{{$emp->Lname}}">
                                            <div class="form-group">
                                            <label>ที่อยู่</label>
                                            <input class="form-control" type="text" name="Address"value="{{$emp->Address}}">
                                            <div class="form-group">
                                            <label>เบอร์โทร</label>
                                            <input class="form-control" type="text" name="Tel"value="{{$emp->Tel}}">
                                            <div class="form-group">
                                            <label>เพศ</label>
                                            <input class="form-control" type="text" name="Sex"value="{{$emp->Sex}}">
                                            <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" type="text" name="Username"value="{{$emp->Username}}">
                                            <div class="form-group">
                                            {{-- <label>Password</label>
                                            <input class="form-control" type="text" name="Password"value="{{$emp->Password}}"> --}}
                                            <div class="form-group">
                                        <label>เลือกแผนกงาน</label>
                                        <select class="form-control" name="Dep_Id">
                                        @foreach ($deps as $dep)
                                            <option value="{{$dep->Dep_Id}}">
                                            {{($emp->Dep_Id == $dep->Dep_Id?'selected':'')}}>
                                            {{$dep->Dep_Name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                        </div>
                                        @if ($emp->Emp_Status == "Enable")
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="Emp_Status" value="Enable" checked />Enable
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="Emp_Status" value="Disable"  />Disable
                                                            </label>
                                                        </div>
                                                    @else
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="Emp_Status" value="Enable"  />Enable
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="Emp_Status" value="Disable" checked />Disable
                                                            </label>
                                                        </div>
                                                    @endif
                                            <div class="form-group">
                                                <button onclick="checkEdit()" type="button" class="btn btn-warning btn-sm">edit</button>
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
text: "จะแก้ไข {{$emp->Fname}} ?",
icon: "warning",
buttons: true,
dangerMode: true,
}).then((willDelete) => {
if (willDelete) {
swal("{{$emp->Fname}} แก้ไขเรียบร้อย", {
  icon: "success",
}).then(()=>{
    document.getElementById('editEmp').submit();
});
    }
});
}
</script>
@endsection

