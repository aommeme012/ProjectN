@extends('layouts.manurequisitionmat')
@section('requisitionmat')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <h3>Receive</h3>
                            <a href="{{ route('RequiMM.index')}}" class="btn btn-primary btn-sm">Requisition</a>
                            <thead>
                                <tr>
                                    <th>Requismat_Id</th>
                                    <th>Requismat_Date</th>
                                    <th>Requismat_Amount</th>
                                    <th>Material_Id</th>
                                    <th>Plan_Id</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($RequiM as $RequiMM)
                                <tr>
                                    <td>{{$RequiMM->Requismat_Id}}</td>
                                    <td>{{$RequiMM->Requismat_Date}}</td>
                                    <td>{{$RequiMM->Requismat_Amount}}</td>
                                    <td>{{$RequiMM->Material_Id}}</td>
                                    <td>{{$RequiMM->Plan_Id}}</td>
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
