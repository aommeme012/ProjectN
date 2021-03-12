@extends('layouts.manuproductionplaning')
@section('PlaningProduction')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div style="float: right;">
                        <a href="/Plan" class="btn btn-warning btn-xs">ย้อนกลับ</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <h3>ประวัติการวางแผน</h3>
                            <thead>
                                <tr>
                                    <th>Plan_Id</th>
                                    <th>Plan_Date</th>
                                    <th>Amount</th>
                                    <th>Planning_Status</th>
                                    <th>component_Id</th>
                                    <th>Product_Id</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Planings as $Plan)
                                <form role="form"  method="post" action="{{route('Plan.update',[$Plan->Plan_Id])}}" >
                                    {{ csrf_field() }}
                                    @method('put')
                                <tr>
                                    <td>{{$Plan->Plan_Id}}</td>
                                    <td>{{$Plan->Plan_Date}}</td>
                                    <td>{{$Plan->Amount}}</td>
                                    <td>{{$Plan->Planning_Status}}</td>
                                    <td>{{$Plan->component_Id}}</td>
                                    <td>{{$Plan->Product_Id}}</td>
                                    <td>
                                        <button type="submit" class="btn btn-warning btn-sm">ทำรายการอีกครั้ง</button>
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
</div>
@endsection
