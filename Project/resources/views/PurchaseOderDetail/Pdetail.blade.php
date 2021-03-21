@extends('layouts.manupurchase')
@section('Purchase')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <div class="a"><h3>รายละเอียดการสั่งซื้อ</h3></div>
                            <hr>
                            <a href="{{ route('Pur.index')}}" class="btn btn-primary btn-sm">เพิ่มรายการสั่งซื้อ</a>
                            <br><br>
                            <thead>
                                <tr>
                                    <th>รหัสรายละเอียดสั่งซื้อ</th>
                                    <th>จำนวนวัตถุดิบ</th>
                                    <th>วัตถุดิบ</th>
                                    <th>วันที่การสั่งซื้อ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Pdets as $Pdet)
                                <tr>
                                    <td>{{$Pdet->Pdetail_Id}}</td>
                                    <td>{{$Pdet->Pdetail_Amount}}</td>
                                    <td>{{App\Materials::find($Pdet->Material_Id)->Material_Name}}</td>
                                    <td>{{App\PurchaseOrder::find($Pdet->Purchase_Id)->Purchase_Date}}</td>
                                </tr>
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


