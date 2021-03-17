@extends('layouts.manurequisitionproduct')
@section('RequisitionPro')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div style="float: right;">
                        <a href="/RequiPro" class="btn btn-info btn-xs">รายการที่เบิกสินค้า</a>
                        </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <h3>Production</h3>
                            <thead>
                                <tr>
                                    <th>Production_Id</th>
                                    <th>Production_Date</th>
                                    <th>Requismat_Id</th>
                                    <th>Emp_Id</th>
                                    <th></th>
                                </tr>
                            </thead>
                            @foreach ($RequiP as $RequiPP)
                            <form role="form"  method="post" action="{{route('RequiPP.update',[$RequiPP->Production_Id])}}" >
                                {{ csrf_field() }}
                                @method('put')
                            <tbody>

                                <tr>
                                    <td>{{$RequiPP->Production_Id}}</td>
                                    <td>{{$RequiPP->Production_Date}}</td>
                                    <td>{{$RequiPP->Requismat_Id}}</td>
                                    <td>{{App\Employee::find($RequiPP->Emp_Id)->Fname}}</td>
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

