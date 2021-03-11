@extends('layouts.manuproduction')
@section('Prodcution')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <div style="float: right;">
                            <a href="/Ption" class="btn btn-info btn-xs">รายการที่ผลิตเสร็จสิ้น</a>
                        </div>
                        <table class="table table-striped table-bordered table-hover">
                            <h3>Production</h3>
                            <thead>
                                <tr>
                                    <th>Production_Id</th>
                                    <th>Production_Date</th>
                                    <th>Production_Status</th>
                                    <th>Requismat_Id</th>
                                    <th>Emp_Id</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Production as $P)
                                <form role="form"  method="post" action="/updatesuccess/{{$P->Production_Id}}" >
                                    {{ csrf_field() }}
                                <tr>
                                    <td>{{$P->Production_Id}}</td>
                                    <td>{{$P->Production_Date}}</td>
                                    <td>{{$P->Production_Status}}</td>
                                    <td>{{$P->Requismat_Id}}</td>
                                    <td>{{$P->Emp_Id}}</td>
                                    <td>
                                        <button type="submit" class="btn btn-warning btn-sm" >ยืนยันการผลิตเสร็จสิ้น</button>
                                    </td>

                                </tr>
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
@endsection


