@extends('layouts.manureceives')
@section('Receive')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <h3>Receive</h3>
                            <a href="{{ route('Rec.index')}}" class="btn btn-primary btn-sm">Receive</a>
                            <thead>
                                <tr>
                                    <th>Receive_Id</th>
                                    <th>Receive_Date</th>
                                    <th>Emp_Id</th>
                                    <th>Purchase_Id</th>
                                    <th>Receive_Amount</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Recs as $Rec)
                                <tr>
                                    <td>{{$Rec->Receive_Id}}</td>
                                    <td>{{$Rec->Receive_Date}}</td>
                                    <td>{{$Rec->Emp_Id}}</td>
                                    <td>{{$Rec->Purchase_Id}}</td>
                                    <td>{{$Rec->Receive_Amount}}</td>
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


