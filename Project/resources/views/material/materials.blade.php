@extends('layouts.manumanage')
@section('component')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <div class="a"><h3>ข้อมูลวัตถุดิบ</h3></div>
                                    <hr>
                                    <a href="{{ route('mat.create')}}" class="btn btn-primary btn-sm">เพิ่มข้อมูลพนักงาน</a>
                                    <br><br>
                                    <thead>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>รหัสวัตถุดิบ</th>
                                            <th>ชื่อวัตถุดิบ</th>
                                            <th>จำนวนวัตถุดิบ</th>
                                            <th>หน่วยวัตถุดิบ</th>
                                            <th>สถานะวัตถุดิบ</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mats as $mat)
                                        <tr>
                                            <td>{{$mat->Material_Id}}</td>
                                            <td>{{$mat->idmat}}</td>
                                            <td>{{$mat->Material_Name}}</td>
                                            <td>{{$mat->Material_Amount}}</td>
                                            <td>{{$mat->unitmaterial}}</td>
                                            <td>{{$mat->Material_Status}}</td>
                                            <td>
                                                <a href="{{ route('mat.edit',[$mat->Material_Id])}}" class="btn btn-warning btn-sm"><i class="fa fa-edit fa-1x"></i></a>
                                            </td>
                                            <td>
                                                <form id="form_{{$mat->Material_Id}}" class="form-inline" method="post" action="{{route('mat.destroy',[$mat->Material_Id])}}">
                                                    {{ csrf_field() }}
                                                    @method('delete')
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                    onclick = "delete_{{$mat->Material_Id}}()"><i class = "fa fa-trash-o"></i></button>
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
                @foreach ( $mats as $mat )
            function delete_{{$mat->Material_Id}}() {
                swal({
              title: "คุณแน่ใจนะที่จะลบอันนี้",
              text: "คุณต้องการที่จะลบ {{$mat->Material_Name}} ?",
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
                    document.getElementById('form_{{$mat->Material_Id}}').submit();
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

