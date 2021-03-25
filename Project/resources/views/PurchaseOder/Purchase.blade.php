@extends('layouts.manupurchase')
@section('Purchase')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <div class="a"><h3>ข้อมูลการสั่งซื้อวัตถุดิบ</h3></div>
                            <hr>
                            <a href="{{ route('Pur.index')}}" class="btn btn-primary btn-sm">เพิ่มการสั่งซื้อ</a>
                            <br><br>
                            <thead>
                                <tr>
                                    <th>รหัสการสั่งซื้อ</th>
                                    <th>วันที่การสั่งซื้อ</th>
                                    <th>ชื่อพนักงานที่สั่งซื้อ</th>
                                    <th>บริษัทคู่ค้า</th>
                                    <th>สถานะการสั่งซื้อ</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Purc as $Pur)
                                <form id="Purchase" role="form"  method="post" action="{{route('Pur.store')}}">
                                    {{ csrf_field() }}
                                <tr>
                                    <td>{{$Pur->Purchase_Id}}</td>
                                    <td>{{$Pur->Purchase_Date}}</td>
                                    <td>{{App\Employee::find($Pur->Emp_Id)->Fname}}</td>
                                    <td>{{App\Partner::find($Pur->Partner_Id)->Partner_Name}}</td>
                                    <td>{{$Pur->Purchase_Status}}</td>

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
@endsection


