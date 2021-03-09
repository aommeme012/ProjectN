@extends('layouts.manuproduction')
@section('Prodcution')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div style="float: right;">
                        <a href="/Protion" class="btn btn-warning btn-xs">ย้อนกลับ</a>
                    </div>
                    <div class="table-responsive">
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
                                @foreach ($Ption as $P)
                                <tr>
                                    <td>{{$P->Production_Id}}</td>
                                    <td>{{$P->Production_Date}}</td>
                                    <td>{{$P->Production_Status}}</td>
                                    <td>{{$P->Requismat_Id}}</td>
                                    <td>{{$P->Emp_Id}}</td>
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


