@extends('layouts.manumanage')
@section('component')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-body">
                                <div class="row">
                                    <div style="color:white;padding:15px 50px 5px 50px;float:right;font-size:16px;">
                                        <a href="/type" class="btn btn-danger"><i class="w3-xxxlarge glyphicon glyphicon-arrow-left"></i></a>
                                        </div>
                                    <div class="col-md-4">
                                        <h3>เพิ่มข้อมูลชนิดของสินค้า</h3>
                                        <hr>
                                        <form id="checkType" role="form"  method="post" action="{{route('type.store')}}">
                                            {{ csrf_field() }}
                                            <div class="form-group">

                                                <input class="form-control" type="text" name="Type_Name"placeholder="ชื่อชนิดสินค้า" required>
                                            </div>
                                            <div class="form-group">
                                                <button onclick="checkType()" type="submit" class="btn btn-primary btn-sm">ยืนยัน</button>
                                            </div>
                                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script>
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
</script> --}}
@endsection

