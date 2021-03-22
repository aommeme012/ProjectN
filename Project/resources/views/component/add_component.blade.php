@extends('layouts.manumanage')

@section('component')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div style="color:white;padding:15px 50px 5px 50px;float:right;font-size:16px;">
                    <a href="/comp" class="btn btn-danger"><i class="w3-xxxlarge glyphicon glyphicon-arrow-left"></i></a>
                </div>
                <div class="panel-body">

                        <div class="row">
                            <div class="col-md-4">
                                <h3>ข้อมูลส่วนผสม</h3>
                                <form id="component" role="form"  method="post" action="{{route('comp.store')}}">
                                    {{ csrf_field() }}
                                    <hr>
                                    <div class="form-group">
                                        <label>ชื่อส่วนประกอบ</label>
                                        <input class="form-control" type="text" name="component_Name"placeholder="ชื่อส่วนประกอบ">

                                    </div>
                                    <button  class="btn btn-warning" id="add-more" type="button">เลือกวัตถุดิบเพิ่ม</button>
                                    <h3>รายละเอียดของสูตร</h3>
                                    <hr>
                                    <input class="form-control" type="text" name="component_Value"placeholder="ส่วนผสมของสูตร">
                                    <div class="form-group" id="form-line">
                                        <br>
                                     <label>เลือกวัตถุดิบ</label>
                                            <select class="form-control" name="Material_Id[0]">
                                                @foreach ($mats as $mat)
                                                    <option value="{{$mat->Material_Id}}">
                                                    {{$mat->idmat}}
                                                    </option>
                                                    @endforeach
                                            </select>
                                    <br>
                                    <input class="form-control" type="Number" name="Comde_Amount[0]"placeholder="จำนวนของวัตถุดิบ">
                                    </div>

                                    <div class="form-group">
                                        <button onclick="addcomponent()" type="button" class="btn btn-primary btn-sm" >ยืนยัน</button>
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
$(document).ready(function(){
    var i = 1;
    $('#add-more').click(function(){
        $('#form-line').append(" <label>เลือกวัตถุดิบ</label>"+
        "<select class=\"form-control\" name=\"Material_Id["+i+"]\">"+
        "@foreach ($mats as $mat)"+
        "<option value=\"{{$mat->Material_Id}}\">"+
        "{{$mat->Material_Name}}"+
        "</option>"+
        "@endforeach"+
        "</select>"+
        "ใส่จำนวนวัตถุดิบ"+
        "<input class=\"form-control\" type=\"Number\" name=\"Comde_Amount["+i+"]\">");
        i++;
    });
});
</script>

<script>
    function addcomponent() {
        swal({
  title: "คุณแน่ใจหรือไม่",
  text: "ที่จะสร้างสูตร",
  icon: "warning",
  buttons: true,
  dangerMode: true,
}).then((willDelete) => {
  if (willDelete) {
    swal("สร้างสูตรสำเร็จ", {
      icon: "success",
    }).then(()=>{
        document.getElementById('component').submit();
    });
        }
    });
}
</script>
@endsection
