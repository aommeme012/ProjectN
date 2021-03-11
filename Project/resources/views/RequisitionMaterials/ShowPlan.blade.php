@extends('layouts.manurequisitionmat')
@section('Requisitionmat')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div style="float: right;">
                        <a href="/RequiMat" class="btn btn-info btn-xs">รายการที่เบิกวัตถุดิบ</a>
                        </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <h3>ProductionPlanning  </h3>
                            <thead>
                                <tr>
                                    <th>Plan_Id</th>
                                    <th>Plan_Date</th>
                                    <th>Amount</th>
                                    <th>component_Id</th>
                                    <th>Product_Id</th>
                                    <th></th>
                                </tr>
                            </thead>
                            @foreach ($RequiM as $RequiMM)
                            <form role="form"  method="post" action="{{route('RequiMM.update',[$RequiMM->Plan_Id])}}" >
                                {{ csrf_field() }}
                                @method('put')
                            <tbody>

                                <tr>
                                    <td>{{$RequiMM->Plan_Id}}</td>
                                    <td>{{$RequiMM->Plan_Date}}</td>
                                    <td>{{$RequiMM->Amount}}</td>
                                    <td>{{$RequiMM->component_Id}}</td>
                                    <td>{{$RequiMM->Product_Id}}</td>

                                <td>
                                    <button type="submit" class="btn btn-warning btn-sm" onclick="Requisition();">Requisition</button>
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
<script>
    function Requisition(){
    }
    @if(session('success'))
        swal("{{session('success')}}");
    @endif
    @if(session('fail'))
        swal("{{session('fail')}}");
    @endif
</script>
@endsection

