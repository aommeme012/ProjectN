@extends('layouts.manumanage')
@section('component')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <h3>component</h3>
                            <a href="{{ route('comp.create')}}" class="btn btn-primary btn-sm">Add component</a>

                            <thead>
                                <tr>
                                    <th>ไอดี</th>
                                    <th>ชื่อส่วนผสม</th>
                                    <th>สถานะส่วนผสม</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comps as $comp)
                                <tr>
                                    <td>{{$comp->component_Id}}</td>
                                    <td>{{$comp->component_Name}}</td></a>
                                    <td>{{$comp->component_Status}}</td>
                                    <td>
                                        <a href="{{ route('comp.edit',[$comp->component_Id])}}" class="btn btn-warning btn-sm"><i class = "fa fa-pencil"></i></a>
                                    </td>
                                    <td>
                                        <form id="form_{{$comp->component_Id}}" class="form-inline" method="post" action="{{route('comp.destroy',[$comp->component_Id])}}" >
                                            {{ csrf_field() }}
                                            @method('delete')
                                            <button type="button" class="btn btn-danger btn-sm"
                                            onclick = "delete_{{$comp->component_Id}}()"> <i class = "fa fa-trash-o"> </i></button>
                                        </form>
                                    </td>
                                    <td>
                                        <a href="{{ route('comde.show',[$comp->component_Id])}}" class="btn btn-default btn-sm">Detail</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    @foreach ( $comps as $comp )
function delete_{{$comp->component_Id}}() {
    swal({
  title: "คุณแน่ใจนะที่จะลบอันนี้",
  text: "คุณต้องการที่จะลบ {{$comp->component_Name}} ?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
}).then((willDelete) => {
  if (willDelete) {
    swal("{{$comp->component_Name}} ลบเสร็จสิ้น ", {
      icon: "success"

    })
    .then(()=>{
        document.getElementById('form_{{$comp->component_Id}}').submit();
    });
  }
});
    }
        @endforeach
</script>
@endsection
