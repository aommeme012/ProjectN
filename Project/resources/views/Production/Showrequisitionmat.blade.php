@extends('layouts.manuproduction')
@section('Prodcution')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <h3>production</h3>
                            <a href="/Protion" class="btn btn-primary btn-sm">Production</a>
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
                                    <td>{{$P->Material_Id}}</td>
                                    <td>{{$P->Plan_Id}}</td>

                                <td>
                                    <button type="submit" class="btn btn-warning btn-sm" onclick="Production();">Production</button>
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

