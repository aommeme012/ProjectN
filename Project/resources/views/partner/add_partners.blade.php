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
                                <h3>Add Partners</h3>
                                <form id="addPart" role="form"  method="post" action="{{route('part.store')}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>Partner_Name</label>
                                        <input class="form-control" type="text" name="Partner_Name">
                                        <label>Partner_Address</label>
                                        <input class="form-control" type="text" name="Partner_Address">
                                        <label>Partner_Tel</label>
                                        <input class="form-control" type="text" name="Partner_Tel">
                                    </div>
                                    <div class="form-group">
                                        <button onclick="addPart()" type="button" class="btn btn-primary btn-sm">create</button>
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
    function addPart() {
        swal({
  title: "คุณแน่ใจหรือไม่",
  text: "ที่จะเพิ่มบริษัทคู่ค้า",
  icon: "warning",
  buttons: true,
  dangerMode: true,
}).then((willDelete) => {
  if (willDelete) {
    swal("เพิ่มบริษัทคู่ค้าสำเร็จ", {
      icon: "success",
    }).then(()=>{
        document.getElementById('addPart').submit();
    });
        }
    });
}
</script>
@endsection

