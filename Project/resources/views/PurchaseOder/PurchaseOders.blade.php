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
                            <div class="col-md-4">
                                <h3>สั่งซื้อวัตถุดิบ</h3>
                                <form id="Purchase" role="form"  method="post" action="{{route('Pur.store')}}">
                                    {{ csrf_field() }}
                                    <hr>
                                    <div class="form-group">
                                    <label>เลือกบริษัทคู่ค้า</label>
                                    <select class="form-control" name="Partner_Id">
                                        @foreach ($parts as $part)
                                            <option value="{{$part->Partner_Id}}">
                                            {{$part->Partner_Name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button  class="btn btn-warning" id="add-more" type="button">เลือกวัตถุดิบเพิ่ม</button>
                                    <hr>
                                    <div class="form-group" id="form-line">
                                     <label>วัตถุดิบ</label>
                                            <select class="form-control" name="Material_Id[0]">
                                                @foreach ($mats as $mat)
                                                    <option value="{{$mat->Material_Id}}">
                                                    {{$mat->idmat}}
                                                    </option>
                                                    @endforeach
                                            </select>
                                    <br>
                                    <input class="form-control" type="Number" name="Pdetail_Amount[0]" placeholder="จำนวนวัตถุดิบ" required>
                                    <br>
                                    <input class="form-control" type="Money" name="Pdetail_Money[0]" placeholder="ราคาวัตถุดิบ" required>
                                    </div>
                                    <div class="form-group">
                                        <button  type="submit" class="btn btn-primary btn-sm" >เพิ่มการสั่งซื้อ</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
    var i = 1;
    $('#add-more').click(function(){
        $('#form-line').append(" <label>วัตถุดิบ</label>"+
        "<select class=\"form-control\" name=\"Material_Id["+i+"]\">"+
        "@foreach ($mats as $mat)"+
        "<option value=\"{{$mat->Material_Id}}\">"+
        " {{$mat->idmat}}"+
        "</option>"+
        "@endforeach"+
        "</select>"+
        "<br>"+
        "<input class=\"form-control\" type=\"Number\" name=\"Pdetail_Amount["+i+"]\"placeholder=\"จำนวนวัตถุดิบ\"required>"+
        "<br>"+
        "<input class=\"form-control\" type=\"Money\" name=\"Pdetail_Money["+i+"]\"placeholder=\"ราคาวัตถุดิบ\"required>");
        i++;
    });
});
</script>


@endsection
