@extends('layouts.manurequisitionproduct')
@section('RequisitionPro')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div style="float: right;">
                    <a  href="/RequiPP" class="btn btn-danger" ><i class="w3-xxxlarge glyphicon glyphicon-arrow-left"></i></a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <div class="a"><h3>รายการที่เบิกไปแล้ว</h3></div>
                            <hr>
                            <thead>
                                <tr>
                                    <th>รหัสการเบิกสินค้า</th>
                                    <th>วันที่เบิกสินค้า</th>
                                    <th>จำนวนสินค้าที่เบิก</th>
                                    <th>ชื่อสินค้าที่เบิก</th>
                                    <th>ชื่อพนักงานที่เบิก</th>
                                </tr>
                            </thead>
                            @foreach ($Repro as $RP)
                            <tbody>
                                <tr>
                                    <td>{{$RP->Requispro_Id}}</td>
                                    <td>{{$RP->Requispro_Date}}</td>
                                    <td>{{$RP->Requispro_Amount}}</td>
                                    <td>{{App\Product::find($RP->Product_Id)->Product_Name}}</td>
                                    <td>{{App\Employee::find($RP->Emp_Id)->Fname}}</td>
                            </form>
                                @endforeach
                        </tbody>
                    </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

