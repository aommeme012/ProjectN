@extends('layouts.manuproduction')
@section('Prodcution')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div style="float: right;">
                        <a href="/showlistproduction" class="btn btn-info btn-xs">รายการที่ผลิตที่เบิกไปแล้ว</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <div class="a"><h3>รายการที่ผลิตเสร็จสิ้น</h3></div>
                            <hr>
                            <thead>
                                <tr>
                                    <th>รหัสการผลิต</th>
                                    <th>วันที่การผลิต</th>
                                    <th>สถานะการผลิต</th>
                                    <th>รหัสการเบิก</th>
                                    <th>ชื่อคนที่สั่งผลิต</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Ption as $P)
                                <tr>
                                    <td>{{$P->Production_Id}}</td>
                                    <td>{{$P->Production_Date}}</td>
                                    <td>{{$P->Production_Status}}</td>
                                    <td>{{$P->Requismat_Id}}</td>
                                    <td>{{$P->Fname}}</td>
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


