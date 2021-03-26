@extends('layouts.manumanage')
@section('component')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <div class="a"><h3>ข้อมูลบริษัทคู่ค้า</h3></div>
                            <hr>
                            <a href="{{ route('part.create')}}" class="btn btn-primary btn-sm">เพิ่มข้อมูลบริษัทคู่ค้า</a>
                            <br> <br>
                            <thead>
                                <tr>
                                    <th>รหัสบริษัทคู่ค้า</th>
                                    <th>ชื่อบริษัทคู่ค้า</th>
                                    <th>ที่อยู่บริษัทคู่ค้า</th>
                                    <th>เบอร์โทรบริษัทคู่ค้า</th>
                                    <th>สถานะบริษัทคู่ค้า</th>
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
                                        <a href="{{ route('part.edit',[$part->Partner_Id])}}" class="btn btn-warning btn-sm"><i class="fa fa-edit fa-1x"></i></a>
                                    </td>
                                    <td>
                                        <form id="form_{{$part->Partner_Id}}" class="form-inline" method="post" action="{{route('part.destroy',[$part->Partner_Id])}}">
                                            {{ csrf_field() }}
                                            @method('delete')
                                            <button type="button" class="btn btn-danger btn-sm"
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
    swal("กำลังดำเนินการ..........", {
        icon: false,
      button: false,
    timer:1000

    })
    .then(()=>{
        document.getElementById('form_{{$part->Partner_Id}}').submit();
    });
  }
});
    }
        @endforeach

        @if(session('fail'))
            swal({
                title:"{{session('fail')}}",
                icon: "error",
                button: "OK",
            });
            @endif
            @if(session('success'))
            swal({
                title:"{{session('success')}}",
                icon: "success",
                button:"OK",
            });
            @endif
</script>
@endsection


