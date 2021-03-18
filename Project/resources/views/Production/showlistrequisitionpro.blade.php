@extends('layouts.manuproduction')
@section('Prodcution')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div style="float: right;">
                        <a href="/Protion" class="btn btn-warning btn-xs"><i class="w3-xxxlarge glyphicon glyphicon-arrow-left"></i></a>
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
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($showlist as $show)
                                <tr>
                                    <td>{{$show->Production_Id}}</td>
                                    <td>{{$show->Production_Date}}</td>
                                    <td>{{$show->Production_Status}}</td>
                                    <td>{{$show->Requismat_Id}}</td>
                                    <td>{{$show->Emp_Id}}</td>
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


