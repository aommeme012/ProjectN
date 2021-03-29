@extends('layouts.manumanage')
@section('component')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <div class="a"><h3>ข้อมูลของพนักงาน</h3></div>
                                <hr>
                                <a href="{{ route('emp.create')}}" class="btn btn-primary btn-sm">เพิ่มข้อมูลพนักงาน</a><br><br>
                                <thead>
                                    <tr>
                                        <th>ลำดับพนักงาน</th>
                                        <th>รหัสพนักงาน</th>
                                        <th>ชื่อ</th>
                                        <th>นามสกุล</th>
                                        <th>ที่อยู่</th>
                                        <th>เบอร์</th>
                                        <th>เพศ</th>
                                        <th>Username</th>
                                        {{-- <th>Password</th> --}}
                                        <th>สถานะของพนักงาน</th>
                                        <th>ชื่อแผนก</th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($emps as $emp)
                                    <tr>
                                        <td>{{$emp->Emp_Id}}</td>
                                        <td>{{$emp->idemp}}</td>
                                        <td>{{$emp->Fname}}</td>
                                        <td>{{$emp->Lname}}</td>
                                        <td>{{$emp->Address}}</td>
                                        <td>{{$emp->Tel}}</td>
                                        <td>{{$emp->Sex}}</td>
                                        <td>{{$emp->Username}}</td>
                                        {{-- <td>{{$emp->Password}}</td> --}}
                                        <td>{{$emp->Emp_Status}}</td>
                                        <td>{{App\Departments::find($emp->Dep_Id)->Dep_Name}}</td>
                                        <td>
                                            <a href="{{ route('emp.edit',[$emp->Emp_Id])}}" class="btn btn-warning btn-sm"><i class="fa fa-edit fa-1x"></i></a>
                                        </td>
                                        <td>
                                            <form id="form_{{$emp->Emp_Id}}" class="form-inline" method="post" action="{{route('emp.destroy',[$emp->Emp_Id])}}">
                                                {{ csrf_field() }}
                                                @method('delete')
                                                <button type="button" class="btn btn-danger btn-sm"
                                                onclick = "delete_{{$emp->Emp_Id}}()"><i class = "fa fa-trash-o"></i></button>
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
        @foreach ( $emps as $emp )
    function delete_{{$emp->Emp_Id}}() {
        swal({
      title: "คุณแน่ใจนะที่จะลบอันนี้",
      text: "คุณต้องการที่จะลบ {{$emp->Fname}} ?",
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
            document.getElementById('form_{{$emp->Emp_Id}}').submit();
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

