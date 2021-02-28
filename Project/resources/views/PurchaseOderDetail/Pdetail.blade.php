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
                                    <th></th>
                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Pdets as $Pdet)
                                <tr>
                                    <td>{{$Pdet->Pdetail_Id}}</td>
                                    <td>{{$Pdet->Pdetail_Amount}}</td>
                                    <td>{{$Pdet->Material_Id}}</td>
                                    <td>{{$Pdet->Purchase_Id}}</td>
                                    <td>
                                        <a href="{{ route('Pdet.edit',[$Pdet->Purchase_Id])}}" class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <form class="form-inline" method="post" action="{{route('Pdet.destroy',[$Pdet->Pdetail_Id])}}" >
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


