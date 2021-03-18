@extends('layouts.manumanage')
@section('component')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-body">
                                <div class="row">
                                    <div style="color:white;padding:15px 50px 5px 50px;float:right;font-size:16px;">
                                    <a href="/emp" class="btn btn-danger square-btn-adjust"><i class="w3-xxxlarge glyphicon glyphicon-arrow-left"></i></a>
                                    </div>
                                    <div class="col-md-6">
                                        <h3>Add employees</h3>
                                        <form id="addEmp" role="form"  method="post" action="{{route('emp.store')}}">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label>Fname</label>
                                                <input class="form-control" type="text" name="Fname">
                                                <label>Lname</label>
                                                <input class="form-control" type="text" name="Lname">
                                                <div class="form-group">
                                                <label>Address</label>
                                                <input class="form-control" type="text" name="Address">
                                                <div class="form-group">
                                                <label>Tel</label>
                                                <input class="form-control" type="text" name="Tel">
                                                <div class="form-group">
                                                <label>Sex</label>
                                                <input class="form-control" type="text" name="Sex">
                                                <div class="form-group">
                                                <label>Username</label>
                                                <input class="form-control" type="text" name="Username">
                                                <div class="form-group">
                                                <label>Password</label>
                                                <input class="form-control" type="text" name="Password">
                                                <div class="form-group">
                                            <label>Dep</label>
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
                                                <button onclick="addEmp()" type="button" class="btn btn-primary btn-sm">create</button>
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
