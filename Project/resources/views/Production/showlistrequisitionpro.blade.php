@extends('layouts.manuproduction')
@section('Prodcution')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div style="float: right;">
                        <a href="/Protion" class="btn btn-danger"><i class="w3-xxxlarge glyphicon glyphicon-arrow-left"></i></a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <div class="a"><h3>ข้อมูลรายการเบิกสินค้า</h3></div>
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
                                @foreach ($showlist as $show)
                                <tr>
                                    <td>{{$show->Production_Id}}</td>
                                    <td>{{$show->Production_Date}}</td>
                                    <td>{{$show->Production_Status}}</td>
                                    <td>{{$show->Requismat_Id}}</td>
                                    <td>{{App\Employee::find($show->Emp_Id)->Fname}}</td>
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


