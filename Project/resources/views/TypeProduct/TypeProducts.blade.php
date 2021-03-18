@extends('layouts.manumanage')
@section('component')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <h3>TypeProduct</h3>
                            <a href="{{ route('type.create')}}" class="btn btn-primary btn-sm">Add TypeProduct</a>

                            <thead>
                                <tr>
                                    <th>Type_Id</th>
                                    <th>Type_Name</th>
                                    <th>Type_Status</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($types as $type)
                                <tr>
                                    <td>{{$type->Type_Id}}</td>
                                    <td>{{$type->Type_Name}}</td>
                                    <td>{{$type->Type_Status}}</td>
                                    <td>
                                        <a href="{{ route('type.edit',[$type->Type_Id])}}" class="btn btn-warning btn-sm"><i class="fa fa-edit fa-1x"></i></a>
                                    </td>
                                    <td>
                                        <form id="form_{{$type->Type_Id}}" class="form-inline" method="post" action="{{route('type.destroy',[$type->Type_Id])}}">
                                            {{ csrf_field() }}
                                            @method('delete')
                                            <button type="button" class="btn btn-danger btn-sm"
                                            onclick = "delete_{{$type->Type_Id}}()"> <i class = "fa fa-trash-o"></i></button>
                                        </form>
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
    @foreach ( $types as $type )
function delete_{{$type->Type_Id}}() {
    swal({
  title: "คุณแน่ใจนะที่จะลบอันนี้",
  text: "คุณต้องการที่จะลบ {{$type->Type_Name}} ?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
}).then((willDelete) => {
  if (willDelete) {
    swal("{{$type->Type_Name}} ลบเสร็จสิ้น ", {
      icon: "success"

    })
    .then(()=>{
        document.getElementById('form_{{$type->Type_Id}}').submit();
    });
  }
});
    }
        @endforeach
</script>

@endsection
