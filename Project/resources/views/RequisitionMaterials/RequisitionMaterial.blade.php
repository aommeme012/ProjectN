@extends('layouts.manurequisitionmat')
@section('requisitionmat')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <h3>ตารางเบิกสินค้า</h3>
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
                                @foreach ($Requisitionmat as $RequiMat)
                                <tr>
                                    <td>{{$RequiMat->Requismat_Id}}</td>
                                    <td>{{$RequiMat->Requismat_Date}}</td>
                                    <td>{{$RequiMat->Requismat_Amount}}</td>
                                    <td>{{$RequiMat->Material_Id}}</td>
                                    <td>{{$RequiMat->Plan_Id}}</td>
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
