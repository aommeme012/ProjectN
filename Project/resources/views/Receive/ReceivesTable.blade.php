@extends('layouts.manureceives')
@section('Receive')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <div class="a"><h3>ข้อมูลการรับวัตถุดิบ</h3></div>
                            <hr>
                            <a href="{{ route('Rec.index')}}" class="btn btn-primary btn-sm">รับวัตถุดิบ</a>
<br><br>
                            <thead>
                                <tr>
                                    <th>รหัสรับวัตถุดิบ</th>
                                    <th>วันที่รับวัตถุดิบ</th>
                                    <th>พนักงาน</th>
                                    <th>วันที่การสั่งซื้อ</th>
                                    <th>จำนวนที่รับวัตถุดิบเข้า</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rec as $Recs)
                                <tr>
                                    <td>{{$Recs->Receive_Id}}</td>
                                    <td>{{$Recs->Receive_Date}}</td>
                                    <td>{{App\Employee::find($Recs->Emp_Id)->Fname}}</td>
                                    <td>{{App\PurchaseOrder::find($Recs->Purchase_Id)->Purchase_Date}}</td>
                                    <td>{{$Recs->Receive_Amount}}</td>
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


