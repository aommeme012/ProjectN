@extends('layouts.manurequisitionmat')
@section('Requisitionmat')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div style="float: right;">
                        <a href="/RequiMat" class="btn btn-info btn-xs">รายการที่เบิกวัตถุดิบ</a>
                        </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <div class="a"><h3>แผนการผลิตที่จะเบิก</h3></div>
                            <hr>
                            <thead>
                                <tr>
                                    <th>รหัสการวางแผน</th>
                                    <th>วันที่การวางแผน</th>
                                    <th>จำนวนที่จะผลิต</th>
                                    <th>ส่วนประกอบ</th>
                                    <th>สินค้าที่จะผลิต</th>
                                    <th></th>
                                </tr>
                            </thead>
                            @foreach ($RequiM as $RequiMM)
                            <form  role="form"  method="post" action="{{route('RequiMM.update',[$RequiMM->Plan_Id])}}" >
                                {{ csrf_field() }}
                                @method('put')
                            <tbody>

                                <tr>
                                    <td>{{$RequiMM->idplan}}</td>
                                    <td>{{$RequiMM->Plan_Date}}</td>
                                    <td>{{$RequiMM->Amount}}</td>
                                    <td>{{App\component::find($RequiMM->component_Id)->component_Name}}</td>
                                    <td>{{App\Product::find($RequiMM->Product_Id)->Product_Name}}</td>

                                <td>
                                    <button type="submit" class="btn btn-warning btn-sm" onclick="Requisition();">เบิกวัตถุดิบ</button>
                                </td>
                            </tbody>
                            </form>
                                @endforeach
                    </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    function Requisition(){
    }
    @if(session('success'))
        swal("{{session('success')}}");
    @endif
    @if(session('fail'))
        swal("{{session('fail')}}");
    @endif
</script>
@endsection

