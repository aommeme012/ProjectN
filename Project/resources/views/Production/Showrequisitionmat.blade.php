@extends('layouts.manuproduction')
@section('Prodcution')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div style="float: right;">
                    <a href="/Protion" class="btn btn-info btn-xs" >รายการที่กำลังผลิตอยู่</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <h3>เลือกรายการที่จะผลิต</h3>
                            <hr>
                            <thead>
                                <tr>
                                    <th>Requismat_Id</th>
                                    <th>Requismat_Date</th>
                                    <th>Requismat_Amount</th>
                                    <th>Material_Id</th>
                                    <th>Plan_Id</th>
                                    <th></th>
                                </tr>
                            </thead>
                            @foreach ($Requimat as $P)
                            <form role="form"  method="post" action="{{route('P.update',[$P->Requismat_Id])}}" >
                                {{ csrf_field() }}
                                @method('put')
                            <tbody>

                                <tr>
                                    <td>{{$P->Requismat_Id}}</td>
                                    <td>{{$P->Requismat_Date}}</td>
                                    <td>{{$P->Requismat_Amount}}</td>
                                    <td>{{$P->Material_Name}}</td>
                                    <td>{{$P->Plan_Date}}</td>

                                <td>
                                    <button type="submit" class="btn btn-warning btn-sm" onclick="Production();">ยืนยันการผลิต</button>
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
    function Production(){
    }
    @if(session('success'))
        swal("{{session('success')}}");
    @endif
    @if(session('fail'))
        swal("{{session('fail')}}");
    @endif
</script>
@endsection

