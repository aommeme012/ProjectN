@extends('layouts.manuproductionplaning')
@section('PlaningProduction')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div style="float: right;">
                        <a href="/Planings" class="btn btn-default btn-xs">ประวัติการวางแผน</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <h3>วางแผนการผลิต</h3>
                            <hr>
                            <a href="{{ route('Plan.create')}}" class="btn btn-primary btn-sm">Add Planing</a>
                            <thead>
                                <tr>
                                    <th>Plan_Id</th>
                                    <th>Plan_Date</th>
                                    <th>Amount</th>
                                    <th>Planning_Status</th>
                                    <th>component_Id</th>
                                    <th>Product_Id</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Plans as $Plan)
                                <tr>
                                    <td>{{$Plan->Plan_Id}}</td>
                                    <td>{{$Plan->Plan_Date}}</td>
                                    <td>{{$Plan->Amount}}</td>
                                    <td>{{$Plan->Planning_Status}}</td>
                                    <td>{{App\component::find($Plan->component_Id)->component_Name}}</td>
                                    <td>{{App\Product::find($Plan->Product_Id)->Product_Name}}</td>
                                    {{-- <td>
                                        <a href="{{ route('Plan.edit',[$Plan->Plan_Id])}}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                    </td> --}}
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
