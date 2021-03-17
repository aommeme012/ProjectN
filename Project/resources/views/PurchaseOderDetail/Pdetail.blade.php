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
                                    <th>Pdetail_Id</th>
                                    <th>Pdetail_Amount</th>
                                    <th>Material_Id</th>
                                    <th>Purchase_Id</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Pdets as $Pdet)
                                <tr>
                                    <td>{{$Pdet->Pdetail_Id}}</td>
                                    <td>{{$Pdet->Pdetail_Amount}}</td>
                                    <td>{{App\Materials::find($Pdet->Material_Id)->Material_Name}}</td>
                                    <td>{{App\PurchaseOrder::find($Pdet->Purchase_Id)->Purchase_Date}}</td>
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


