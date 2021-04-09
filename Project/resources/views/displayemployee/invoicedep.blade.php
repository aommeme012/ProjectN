@extends('layouts.manuinvouce')
@section('invo')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <div class="a"><h3>ข้อมูลการสั่งซื้อวัตถุดิบ</h3></div>
                            <hr>
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>รหัสการสั่งซื้อ</th>
                                    <th>วันที่การสั่งซื้อ</th>
                                    <th>ชื่อพนักงานที่สั่งซื้อ</th>
                                    <th>บริษัทคู่ค้า</th>
                                    <th>สถานะการสั่งซื้อ</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Purc as $Pur)
                                <form role="form"  method="get" action="{{route('Purpdfdep',[$Pur->Purchase_Id])}}" >
                                    {{ csrf_field() }}
                                    
                                <tr>
                                    <td>{{$Pur->Purchase_Id}}</td>
                                    <td>{{$Pur->idpur}}</td>
                                    <td>{{$Pur->Purchase_Date}}</td>
                                    <td>{{App\Employee::find($Pur->Emp_Id)->Fname}}</td>
                                    <td>{{App\Partner::find($Pur->Partner_Id)->Partner_Name}}</td>
                                    <td>{{$Pur->Purchase_Status}}</td>
                                    <td> <button type="submit" class="btn btn-default"><i class="fa fa-print fa-1x"></i></a>
                                    </td>
                                </tr>
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

@endsection


