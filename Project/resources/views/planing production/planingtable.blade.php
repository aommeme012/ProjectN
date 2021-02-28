@extends('layouts.manuproductionplaning')
@section('Planing')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <h3>Plan</h3>
                            <a href="{{ route('Plan.create')}}" class="btn btn-primary btn-sm">Add Planing</a>
                            <thead>
                                <tr>
                                    <th>Plan_Id</th>
                                    <th>Plan_Date</th>
                                    <th>Amount</th>
                                    <th>Planning_Status</th>
                                    <th>component_Id</th>
                                    <th>Product_Id</th>
                                    <th></th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Plans as $Plan)
                                <tr>
                                    <td>{{$Plan->Plan_Id}}</td>
                                    <td>{{$Plan->Plan_Date}}</td>
                                    <td>{{$Plan->Amount}}</td>
                                    <td>{{$Plan->Planning_Status}}</td>
                                    <td>{{$Plan->component_Id}}</td>
                                    <td>{{$Plan->Product_Id}}</td>
                                    <td>
                                        <a href="{{ route('Plan.edit',[$Plan->Plan_Id])}}" class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <form class="form-inline" method="post" action="{{route('Plan.destroy',[$Plan->Plan_Id])}}">
                                            {{ csrf_field() }}
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
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


