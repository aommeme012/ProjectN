@extends('layouts.manurequisitionproduct')
@section('RequisitionPro')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div style="float: right;">
                    <a  href="/RequiPP" class="btn btn-warning btn-xs" >back</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <h3>รายการที่เบิกไปแล้ว</h3>
                            <hr>
                            <thead>
                                <tr>
                                    <th>Requispro_Id</th>
                                    <th>Requispro_Date</th>
                                    <th>Requispro_Amount</th>
                                    <th>Product_Id</th>
                                    <th>Emp_Id</th>
                                </tr>
                            </thead>
                            @foreach ($Repro as $RP)
                            <tbody>
                                <tr>
                                    <td>{{$RP->Requispro_Id}}</td>
                                    <td>{{$RP->Requispro_Date}}</td>
                                    <td>{{$RP->Requispro_Amount}}</td>
                                    <td>{{$RP->Product_Id}}</td>
                                    <td>{{$RP->Emp_Id}}</td>
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

