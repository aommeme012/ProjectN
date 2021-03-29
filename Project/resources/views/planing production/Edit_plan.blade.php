@extends('layouts.manuproductionplaning')
@section('PlaningProduction')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                        <div class="row">
                            <div style="color:white;padding:15px 50px 5px 50px;float:right;font-size:16px;">
                            <a href="/Plan" class="btn btn-danger btn-xs">แก้ไชการวางแผน</a>
                            </div>
                            <div class="col-md-4">
                                <h3>แผนการผลิต</h3>
                                <hr>
                                <form id="Plan" role="form"  method="post" action="{{route('Plan.updateplan',[$Plan->Plan_Id])}}">
                                    {{ csrf_field() }}
                                    @method('put')
                                    <div class="form-group">
                                        <label>วันที่การวางแผน</label &nbsp>
                                        <input class="form-control" type="Date" name="Plan_Date" id="start" min = <?php echo date('Y-m-d',);?> value="<?php echo date('Y-m-d',); ?>">
                                        <br>
                                        <label>จำนวนที่ผลิต</label>
                                        <input class="form-control" type="number" name="Amount"placeholder="จำนวนที่จะผลิต" value="{{$Plan->Amount}}">
                                        <br>
                                    <label>เลือกส่วนประกอบ</label>
                                    <select class="form-control" name="component_Id">
                                    @foreach ($comps as $comp)
                                        <option value="{{$comp->component_Id}}">
                                        {{($Plan->component_Id == $comp->component_Id?'selected':'')}}>
                                        {{$comp->component_Name}}
                                        </option>
                                        @endforeach
                                    </select>
                                    <label>เลือกสินค้า</label>
                                    <select class="form-control" name="Product_Id">
                                    @foreach ($pros as $Pro)
                                        <option value="{{$Pro->Product_Id}}">
                                        {{($Plan->Product_Id == $Pro->Product_Id?'selected':'')}}>
                                        {{$Pro->Product_Name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                                    <div class="form-group">
                                        <button  onclick="checkEdit()" type="submit" class="btn btn-primary btn-sm">ยืนยัน</button>
                                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function checkEdit() {
        swal({
    title: "คุณแน่ใจหรือไม่",
    text: "จะแก้ไข ?",
    icon: "warning",
    buttons: true,
    dangerMode: true,
    }).then((willDelete) => {
    if (willDelete) {
    swal(" แก้ไขเรียบร้อย", {
      icon: "success",
    }).then(()=>{
        document.getElementById('Plan').submit();
    });
        }
    });
    }
    </script>
@endsection

