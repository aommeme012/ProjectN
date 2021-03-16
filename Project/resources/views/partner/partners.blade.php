@extends('layouts.manumanage')
@section('component')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <h3>Partners</h3>
                            <a href="{{ route('part.create')}}" class="btn btn-primary btn-sm">Add Partners</a>
                            <thead>
                                <tr>
                                    <th>Partner Id</th>
                                    <th>Partner Name</th>
                                    <th>Partner Address</th>
                                    <th>Partner Tel</th>
                                    <th>Partner Status</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($parts as $part)
                                <tr>
                                    <td>{{$part->Partner_Id}}</td>
                                    <td>{{$part->Partner_Name}}</td>
                                    <td>{{$part->Partner_Address}}</td>
                                    <td>{{$part->Partner_Tel}}</td>
                                    <td>{{$part->Partner_Status}}</td>
                                    <td>
                                        <a href="{{ route('part.edit',[$part->Partner_Id])}}" class="btn btn-warning btn-sm"><i class = "fa fa-pencil"></i></a>
                                    </td>
                                    <td>
                                        <form id="form_{{$part->Partner_Id}}" class="form-inline" method="post" action="{{route('part.destroy',[$part->Partner_Id])}}">
                                            {{ csrf_field() }}
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                            onclick = "delete_{{$part->Partner_Id}}()"><i class = "fa fa-trash-o"></i></button>
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
    @foreach ( $parts as $part )
function delete_{{$part->Partner_Id}}() {
    swal({
  title: "คุณแน่ใจนะที่จะลบอันนี้",
  text: "คุณต้องการที่จะลบ {{$part->Partner_Name}} ?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
}).then((willDelete) => {
  if (willDelete) {
    swal("{{$part->Partner_Name}} ลบเสร็จสิ้น ", {
      icon: "success"

    })
    .then(()=>{
        document.getElementById('form_{{$part->Partner_Id}}').submit();
    });
  }
});
    }
        @endforeach
</script>
@endsection


