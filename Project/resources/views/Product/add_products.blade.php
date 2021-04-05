@extends('layouts.manumanage')
@section('component')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                        <div class="row">
                            <div style="color:white;padding:15px 50px 5px 50px;float:right;font-size:16px;">
                                <a href="/Pro" class="btn btn-danger"><i class="w3-xxxlarge glyphicon glyphicon-arrow-left"></i></a>
                                </div>
                            <div class="col-md-4">
                                <h3>เพิ่มข้อมูลสินค้า</h3>
                                <hr>
                                <form id="addProduct" role="form"  method="post" action="{{route('Pro.store')}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">

                                        <input class="form-control" type="text" name="Product_Name"placeholder="ชื่อสินค้า" required>
                                        <br>
                                        <input class="form-control" type="text" name="Product_Amount"placeholder="จำนวนสินค้า" required>
                                        <br>
                                        <input class="form-control" type="file" name="Product_image" required>
                                        <div class="form-group">
                                        <br>
                                    <label>เลือกชนิดสินค้า</label>
                                    <select class="form-control" name="Type_Id">
                                    @foreach ($types as $type)
                                        <option value="{{$type->Type_Id}}">
                                        {{$type->Type_Name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                    </div>
                                    <div class="form-group">
                                        <button onclick="addProduct()" type="submit" class="btn btn-primary btn-sm">ยืนยัน</button>
                                    </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
{{-- <script>
    function addProduct() {
        swal({
  title: "คุณแน่ใจหรือไม่",
  text: "ที่จะเพิ่มสินค้า",
  icon: "warning",
  buttons: true,
  dangerMode: true,
}).then((willDelete) => {
  if (willDelete) {
    swal("เพิ่มสินค้าสำเร็จ", {
      icon: "success",
    }).then(()=>{
        document.getElementById('addProduct').submit();
    });
        }
    });
}
</script> --}}
@endsection

