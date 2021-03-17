@extends('layouts.manuproductionplaning')
@section('PlaningProduction')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                        <div class="row">
                            <div style="padding:15px 50px 5px 50px;float:right;font-size:16px;">
                                <a href="/dep" class="btn btn-danger square-btn-adjust">back</a>
                                </div>
                            <div class="col-md-6">
                                <h3>แก้ไขแผนการผลิต</h3>
                                <hr>
                                <form role="form"  method="post" action="{{route('Plan.update',[$Plan->Plan_Id])}}" >
                                    {{ csrf_field() }}
                                    @method('put')
                                    <div class="form-group">
                                        <label>วันที่</label>
                                            <input class="form-control" type="Date" name="Plan_Date" id="start" min = <?php echo date('Y-m-d',);?> value="<?php echo date('Y-m-d',); ?>">
                                            <label>จำนวน</label>
                                            <input class="form-control" type="number" name="Amount" value="{{$Plan->Amount}}">
                                        <label>ส่วนประกอบ</label>
                                        <select class="form-control" name="component_Id">
                                        @foreach ($comps as $comp)
                                            <option value="{{$comp->component_Id}}">
                                            {{$comp->component_Name}}
                                            </option>
                                            @endforeach
                                        </select>
                                        <label>สินค้า</label>
                                        <select class="form-control" name="Product_Id">
                                        @foreach ($pros as $Pro)
                                            <option value="{{$Pro->Product_Id}}">
                                            {{$Pro->Product_Name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-warning btn-sm">edit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

