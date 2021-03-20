@extends('layouts.manupurchase')
@section('Purchase')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div style="float:right">
                    <a href="/Purback" class="btn btn-default btn-xs">ตารางการสั่งซื้อ</a>
                    <a href="/Pdet" class="btn btn-default btn-xs">รายละเอียดการสั่งซื้อ</a>
                </div>
                <div class="panel-body">

                        <div class="row">
                            <div class="col-md-6">
                                <h3>สั่งซื้อวัตถุดิบ</h3>
                                <form id="Purchase" role="form"  method="post" action="{{route('Pur.store')}}">
                                    {{ csrf_field() }}
                                    <hr>
                                    <div class="form-group">
                                    <label>Partner</label>
                                    <select class="form-control" name="Partner_Id">
                                        @foreach ($parts as $part)
                                            <option value="{{$part->Partner_Id}}">
                                            {{$part->Partner_Name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button  class="btn btn-warning" id="add-more" type="button">AddDetail</button>
                                    <hr>
                                    <div class="form-group" id="form-line">
                                     <label>Material</label>
                                            <select class="form-control" name="Material_Id[0]">
                                                @foreach ($mats as $mat)
                                                    <option value="{{$mat->Material_Id}}">
                                                    {{$mat->Material_Name}}
                                                    </option>
                                                    @endforeach
                                            </select>
                                    <label>Pdetail_Amount</label>
                                    <input class="form-control" type="Number" name="Pdetail_Amount[0]">
                                    </div>
                                    <div class="form-group">
                                        <button onclick="checkPurchase()" type="button" class="btn btn-primary btn-sm" >PurchaseOrder</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function checkPurchase() {
        swal({
  title: "คุณแน่ใจหรือไม่",
  text: "ที่จะสั่งซื้อ}",
  icon: "warning",
  buttons: true,
  dangerMode: true,
}).then((willDelete) => {
  if (willDelete) {
    swal(" สั่งซื้อเสร็จเรียบร้อย", {
      icon: "success",
    }).then(()=>{
        document.getElementById('Purchase').submit();
    });
        }
    });
}
</script>
<script>
$(document).ready(function(){
    var i = 1;
    $('#add-more').click(function(){
        $('#form-line').append(" <label>Material</label>"+
        "<select class=\"form-control\" name=\"Material_Id["+i+"]\">"+
        "@foreach ($mats as $mat)"+
        "<option value=\"{{$mat->Material_Id}}\">"+
        "{{$mat->Material_Name}}"+
        "</option>"+
        "@endforeach"+
        "</select>"+
        "<label>Pdetail_Amount</label>"+
        "<input class=\"form-control\" type=\"Number\" name=\"Pdetail_Amount["+i+"]\">");
        i++;
    });
});
</script>


@endsection
