@extends('layouts.manudep')
@section('deppurchase')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <h3>PurchaseOder</h3>
                            {{-- <a href="{{ route('Pur.index')}}" class="btn btn-primary btn-sm">PurchaseOder</a> --}}
                            <thead>
                                <tr>

                                    <th>จำนวนวัตถุดิบ</th>
                                    <th>ราคาวัตถุดิบ</th>
                                    <th>วัตถุดิบ</th>
                                    <th>วันที่การสั่งซื้อ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Purdetails as $Purdetail)
                                <tr>
                                    
                                    <td>{{$Purdetail->Pdetail_Amount}}</td>
                                    <td>{{$Purdetail->Pdetail_Money}}</td>
                                    <td>{{App\Materials::find($Purdetail->Material_Id)->Material_Name}}</td>
                                    <td>{{App\PurchaseOrder::find($Purdetail->Purchase_Id)->Purchase_Date}}</td>
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


