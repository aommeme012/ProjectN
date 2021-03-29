@extends('layouts.manumanage')
@section('component')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                        <div class="row">
                            <div style="color:white;padding:15px 50px 5px 50px;float:right;font-size:16px;">
                                <a href="/part" class="btn btn-danger"><i class="w3-xxxlarge glyphicon glyphicon-arrow-left"></i></a>
                                </div>
                            <div class="col-md-4">
                                <h3>เพิ่มข้อมูลบริษัทคู่ค้า</h3>
                                <hr>
                                <form id="addPart" role="form"  method="post" action="{{route('part.store')}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <br>
                                        <input class="form-control" type="text" name="Partner_Name" placeholder="ชื่อบริษัทคู่ค้า" required>
                                        <br>
                                        <input class="form-control" type="text" name="Partner_Address"placeholder="ที่อยู่บริษัทคู่ค้า"required>
                                        <br>
                                        <input class="form-control" type="tel" name="Partner_Tel"placeholder="เบอร์โทรบริษัทคู่ค้า" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="0812345678" required>
                                    </div>
                                    <div class="form-group">
                                        <button onclick="addPart()" type="submit" class="btn btn-primary btn-sm">ยืนยัน</button>
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
</script> --}}
@endsection

