@extends('layouts.manudepproduct')
@section('showpro')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <div class="a"><h3>สต็อกสินค้า</h3></div>
                            <hr>
                            <thead>
                                <tr>
                                    <th>รหัสสินค้า</th>
                                    <th>ชื่อสินค้า</th>
                                    <th>จำนวนสินค้า</th>
                                    <th>สถานะสินค้า</th>
                                    <th>ชนิดสินค้า</th>
                                    {{-- <th>รูปตัวอย่างสินค้า</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pros as $Pro)
                                <tr>
                                    <td>{{$Pro->Product_Id}}</td>
                                    <td>{{$Pro->Product_Name}}</td>
                                    <td>{{$Pro->Product_Amount}}</td>
                                    <td>{{$Pro->Product_Status}}</td>
                                    <td>{{App\TypeProduct::find($Pro->Type_Id)->Type_Name}}</td>
                                    {{-- <td></td> --}}
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


