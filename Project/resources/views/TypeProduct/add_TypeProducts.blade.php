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
                                        <h3>Add TypeProduct</h3>
                                        <form id="checkType" role="form"  method="post" action="{{route('type.store')}}" >
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label>Type_Name</label>
                                                <input class="form-control" type="text" name="Type_Name">
                                            </div>
                                            <div class="form-group">
                                                <button onclick="checkType()" type="button" class="btn btn-primary btn-sm">create</button>
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
    function checkType() {
        swal({
  title: "คุณแน่ใจหรือไม่",
  text: "ที่จะเพิ่มชนิดของสินค้า",
  icon: "warning",
  buttons: true,
  dangerMode: true,
}).then((willDelete) => {
  if (willDelete) {
    swal("เพิ่มชนิดของสินค้าสำเร็จ", {
      icon: "success",
    }).then(()=>{
        document.getElementById('checkType').submit();
    });
        }
    });
}
</script>
@endsection

