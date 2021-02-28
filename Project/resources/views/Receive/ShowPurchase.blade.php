@extends('layouts.manureceives')
@section('Receive')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <h3>PurchaseOder</h3>
                            <thead>
                                <tr>
                                    <th>Purchase_Id</th>
                                    <th>Purchase_Date</th>
                                    <th>Emp_Id</th>
                                    <th>Partner_Id</th>
                                    <th>Purchase_Status</th>
                                    <th>Detail</th>
                                    <th></th>
                                </tr>
                            </thead>
                            @foreach ($receive as $Rec)
                            <form role="form" method="post"
                                action="{{route('Rec.update',[$Rec->Purchase_Id])}}">
                                {{ csrf_field() }}
                                @method('put')
                                <tbody>

                                    <tr>
                                        <td>{{$Rec->Purchase_Id}}</td>
                                        <td>{{$Rec->Purchase_Date}}</td>
                                        <td>{{$Rec->Emp_Id}}</td>
                                        <td>{{$Rec->Partner_Id}}</td>
                                        <td>{{$Rec->Purchase_Status}}</td>
                                        <td>
                                            <?php $orders = App\PurchaseOrder::join('purchase_order_details','purchase_orders.Purchase_Id','=','purchase_order_details.Purchase_Id')
                                            ->where('purchase_orders.Purchase_Status','Enable')->get(); ?>
                                            @foreach ($orders as $o)
                                            <?php $material = App\Materials::find($o->Material_Id); ?>
                                            {{$material->Material_Name}} {{$material->Material_Amount}}<br>
                                            @endforeach
                                        </td>
                                        <td>
                                            <button type="submit"
                                                class="btn btn-warning btn-sm">receive</button>
                                        </td>
                                </tbody>
                            </form>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
@endsection

