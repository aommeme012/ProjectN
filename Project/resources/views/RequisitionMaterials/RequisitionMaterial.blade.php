@extends('layouts.manurequisitionmat')
@section('Requisitionmat')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div style="float: right;">
                    <a href="/RequiMM" class="btn btn-warning btn-xs" ><i class="w3-xxxlarge glyphicon glyphicon-arrow-left"></i></a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <h3>รายการที่เบิกไปแล้ว</h3>
                            <hr>
                            <thead>
                                <tr>
                                    <th>Requismat_Id</th>
                                    <th>Requismat_Date</th>
                                    <th>Requismat_Amount</th>
                                    <th>Material_Id</th>
                                    <th>Plan_Id</th>
                                </tr>
                            </thead>
                            @foreach ($Remat as $R)
                            <tbody>
                                <tr>
                                    <td>{{$R->Requismat_Id}}</td>
                                    <td>{{$R->Requismat_Date}}</td>
                                    <td>{{$R->Requismat_Amount}}</td>
                                    <td>{{App\Materials::find($R->Material_Id)->Material_Name}}</td>
                                    <td>{{$R->Plan_Id}}</td>
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

