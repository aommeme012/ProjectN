@extends('layouts.manumanage')
@section('component')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-body">
                                <div class="row">
                                    <div style="color:white;padding:15px 50px 5px 50px;float:right;font-size:16px;">
                                        <a href="/part" class="btn btn-danger square-btn-adjust"><i class="w3-xxxlarge glyphicon glyphicon-arrow-left"></i></a>
                                        </div>
                                    <div class="col-md-6">
                                        <h3>Partners</h3>
                                        <form id="editPart" role="form"  method="post" action="{{route('part.update',[$part->Partner_Id])}}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            @method('put')
                                            <div class="form-group">
                                            <label>Partner_Name</label>
                                                <input class="form-control" type="text" name="Partner_Name"value="{{$part->Partner_Name}}">
                                                <label>Partner_Address</label>
                                                <input class="form-control" type="text" name="Partner_Address"value="{{$part->Partner_Address}}">
                                                <label>Partner_Tel</label>
                                                <input class="form-control" type="text" name="Partner_Tel" value="{{$part->Partner_Tel}}">
                                            </div>
                                            @if ($part->Partner_Status == "Enable")
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="Partner_Status" value="Enable" checked />Enable
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="Partner_Status" value="Disable"  />Disable
                                                            </label>
                                                        </div>
                                                    @else
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="Partner_Status" value="Enable"  />Enable
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="Partner_Status" value="Disable" checked />Disable
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
  text: "จะแก้ไข {{$part->Partner_Name}} ?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
}).then((willDelete) => {
  if (willDelete) {
    swal("{{$part->Partner_Name}} แก้ไขเรียบร้อย", {
      icon: "success",
    }).then(()=>{
        document.getElementById('editPart').submit();
    });
        }
    });
}
</script>
@endsection
