@extends('layouts.manupurchase')
@section('Purchase')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <h3>PurchaseOder</h3>
                            <a href="{{ route('Pur.index')}}" class="btn btn-primary btn-sm">PurchaseOder</a>
                            <thead>
                                <tr>
                                    <th>Purchase_Id</th>
                                    <th>Purchase_Date</th>
                                    <th>Emp_Id</th>
                                    <th>Partner_Id</th>
                                    <th>Purchase_Status<th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Purc as $Pur)
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


