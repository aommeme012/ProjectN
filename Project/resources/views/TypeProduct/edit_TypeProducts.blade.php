@extends('layouts.manumanage')
@section('component')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                        <div class="row">
                            <div style="color:white;padding:15px 50px 5px 50px;float:right;font-size:16px;">
                                <a href="/type" class="btn btn-danger square-btn-adjust"><i class="w3-xxxlarge glyphicon glyphicon-arrow-left"></i></a>
                                </div>
                            <div class="col-md-6">
                                <h3>TypeProducts</h3>
                                <form id="editType" method="post" action="{{route('type.update',[$type->Type_Id])}}" >
                                    {{ csrf_field() }}
                                @method('put')
                                    <div class="form-group">
                                    <label>Type_Name</label>
                                        <input class="form-control" type="text" name="Type_Name"value="{{$type->Type_Name}}">
                                    </div>
                                    @if ($type->Type_Status == "Enable")
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="Type_Status" value="Enable" checked />Enable
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="Type_Status" value="Disable"  />Disable
                                                </label>
                                            </div>
                                        @else
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="Type_Status" value="Enable"  />Enable
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="Type_Status" value="Disable" checked />Disable
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
  text: "จะแก้ไข {{$type->Type_Name}} ?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
}).then((willDelete) => {
  if (willDelete) {
    swal("{{$type->Type_Name}} แก้ไขเรียบร้อย", {
      icon: "success",
    }).then(()=>{
        document.getElementById('editType').submit();
    });
        }
    });
}
</script>
@endsection


