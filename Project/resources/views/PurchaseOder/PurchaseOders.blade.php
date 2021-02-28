@extends('layouts.manupurchase')
@section('Purchase')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div style="color:white;padding:15px 50px 5px 50px;float:right;font-size:16px;">
                    <a href="/Pdet" class="btn btn-danger square-btn-adjust">Detail</a>
                </div>
                <div style="color:white;padding:15px 50px 5px 50px;float:right;font-size:16px;">
                    <a href="/Purback" class="btn btn-danger square-btn-adjust">TablePurchaseOder</a>
                </div>
                <div class="panel-body">

                        <div class="row">
                            <div class="col-md-6">
                                <h3>Purchase</h3>
                                <form role="form"  method="post" action="{{route('Pur.store')}}">
                                    {{ csrf_field() }}
                                    <hr>
                                    <div class="form-group">
                                        <label>Purchase_Date</label>
                                        <input class="form-control" type="Date" name="Purchase_Date">
                                    <label>Employees</label>
                                    <select class="form-control" name="Emp_Id">
                                        @foreach ($emps as $emp)
                                            <option value="{{$emp->Emp_Id}}">
                                            {{$emp->Fname}}
                                            </option>
                                            @endforeach
                                    </select>
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
                                    <h3>DetailPurchase</h3>
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
                                        <button type="submit" class="btn btn-primary btn-sm" >PurchaseOrder</button>
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
