@extends('layouts.manuproduction')
@section('Prodcution')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <h3>Production</h3>
                            <a href="{{ route('P.create')}}" class="btn btn-primary btn-sm">Production</a>
                            <thead>
                                <tr>
                                    <th>Production_Id</th>
                                    <th>Production_Date</th>
                                    <th>Production_Status</th>
                                    <th>Requismat_Id</th>
                                    <th>Emp_Id</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Production as $P)
                                <tr>
                                    <td>{{$P->Production_Id}}</td>
                                    <td>{{$P->Production_Date}}</td>
                                    <td>{{$P->Production_Status}}</td>
                                    <td>{{$P->Requismat_Id}}</td>
                                    <td>{{$P->Emp_Id}}</td>
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


