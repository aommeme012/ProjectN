@extends('layouts.manumanage')
@section('component')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                            <h3>Departments</h3>
                            <a href="{{ route('dep.create')}}" class="btn btn-primary btn-sm">Add Departments</a>
                            <thead>
                                <tr>
                                    <th>Dep_Id</th>
                                    <th>Dep_Name</th>
                                    <th>Dep_Status</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($deps as $dep)
                                <tr>
                                    <td>{{$dep->Dep_Id}}</td>
                                    <td>{{$dep->Dep_Name}}</td>
                                    <td>{{$dep->Dep_Status}}</td>
                                    <td>
                                        <a href="{{ route('dep.edit',[$dep->Dep_Id])}}"class="btn btn-warning btn-sm"><i class="fa fa-edit fa-1x"></i></a>
                                    </td>
                                    <td>
                                        <form id="form_{{$dep->Dep_Id}}" class="form-inline" method="post"
                                            action="{{route('dep.destroy',[$dep->Dep_Id])}}">
                                            {{ csrf_field() }}
                                            @method('delete')
                                            <button type="button" class="btn btn-danger btn-sm"
                                            onclick = "delete_{{$dep->Dep_Id}}()"><i class = "fa fa-trash-o"></i></button>
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
    @foreach ( $deps as $dep )
function delete_{{$dep->Dep_Id}}() {
    swal({
  title: "คุณแน่ใจนะที่จะลบอันนี้",
  text: "คุณต้องการที่จะลบ {{$dep->Dep_Name}} ?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
}).then((willDelete) => {
  if (willDelete) {
    swal("{{$dep->Dep_Name}} ลบเสร็จสิ้น ", {
      icon: "success"

    })
    .then(()=>{
        document.getElementById('form_{{$dep->Dep_Id}}').submit();
    });
  }
});
    }
        @endforeach
</script>
@endsection
