@extends('layouts.manureport')
@section('report')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div style="float: right;">
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <div class="a"><h3>ออกรายงานการเบิกวัตถุดิบ</h3></div>
                            <hr>
                            <thead>
                                <tr>
                                    <th>รหัสการเบิก</th>
                                    <th>วันที่การเบิก</th>
                                    <th>จำนวนวัตถุดิบที่เบิก</th>
                                    <th>วัตถุดิบที่เบิก</th>
                                    <th>รหัสการวางแผน</th>
                                    <th></th>
                                </tr>
                            </thead>
                            @foreach ($reportmat as $reportmats)
                            {{-- <form role="form"  method="post" action="{{route('RequiMM.update',[$RequiMM->Plan_Id])}}" >
                                {{ csrf_field() }}
                                @method('put') --}}
                            <tbody>
                                <tr>
                                    <td>{{$reportmats->Requismat_Id}}</td>
                                    <td>{{$reportmats->Requismat_Date}}</td>
                                    <td>{{$reportmats->Requismat_Amount}}</td>
                                    <td>{{App\Materials::find($reportmats->Material_Id)->idmat}}</td>
                                    <td>{{$reportmats->Plan_Id}}</td>
                                    <td>
                                        <button type="submit" class="btn btn-warning btn-sm">ออกรายงาน</button>
                                    </td>
                            </form>
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

