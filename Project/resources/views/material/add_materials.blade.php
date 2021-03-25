@extends('layouts.manumanage')
@section('component')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-body">
                                <div class="row">
                                    <div style="color:white;padding:15px 50px 5px 50px;float:right;font-size:16px;">
                                        <a href="/mat" class="btn btn-danger"><i class="w3-xxxlarge glyphicon glyphicon-arrow-left"></i></a>
                                        </div>
                                    <div class="col-md-4">
                                        <h3>เพิ่มข้อมูลวัตถุดิบ</h3>
                                        <hr>
                                        <form id="addMat" role="form"  method="post" action="{{route('mat.store')}}" >
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="idmat"placeholder="รหัสวัตถุดิบ" required>
                                                <br>
                                                <input class="form-control" type="text" name="Material_Name"placeholder="ชื่อวัตถุดิบ" required>
                                                <br>
                                                <input class="form-control" type="text" name="Material_Amount"placeholder="จำนวนวัตถุดิบ" required>
                                                <br>
                                                <input class="form-control" type="text" name="unitmaterial"placeholder="หน่วยวัตถุดิบ" required>
                                            </div>
                                            <div class="form-group">
                                                <button onclick="addMat()" type="submit" class="btn btn-primary btn-sm">ยืนยัน</button>
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
        function addMat() {
            swal({
      title: "คุณแน่ใจหรือไม่",
      text: "ที่จะเพิ่มพนักงาน",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((willDelete) => {
      if (willDelete) {
        swal("เพิ่มพนักงานสำเร็จ", {
          icon: "success",
        }).then(()=>{
            document.getElementById('addMat').submit();
        });
            }
        });
    }
    </script> --}}
@endsection
