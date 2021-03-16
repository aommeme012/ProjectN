@extends('layouts.manumanage')
@section('component')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <h3>Employees</h3>
                                <a href="{{ route('emp.create')}}" class="btn btn-primary btn-sm">Add Employees</a>
                                <thead>
                                    <tr>
                                        <th>Emp_Id</th>
                                        <th>Fname</th>
                                        <th>Lname</th>
                                        <th>Address</th>
                                        <th>Tel</th>
                                        <th>Sex</th>
                                        <th>Username</th>
                                        {{-- <th>Password</th> --}}
                                        <th>Emp_Status</th>
                                        <th>Dep_Id</th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($emps as $emp)
                                    <tr>
                                        <td>{{$emp->Emp_Id}}</td>
                                        <td>{{$emp->Fname}}</td>
                                        <td>{{$emp->Lname}}</td>
                                        <td>{{$emp->Address}}</td>
                                        <td>{{$emp->Tel}}</td>
                                        <td>{{$emp->Sex}}</td>
                                        <td>{{$emp->Username}}</td>
                                        {{-- <td>{{$emp->Password}}</td> --}}
                                        <td>{{$emp->Emp_Status}}</td>
                                        <td>{{$emp->Dep_Id}}</td>
                                        <td>
                                            <a href="{{ route('emp.edit',[$emp->Emp_Id])}}" class="btn btn-warning btn-sm"><i class = "fa fa-pencil"></i></a>
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
        swal("{{$emp->Fname}} ลบเสร็จสิ้น ", {
          icon: "success"

        })
        .then(()=>{
            document.getElementById('form_{{$emp->Emp_Id}}').submit();
        });
      }
    });
        }
            @endforeach
    </script>
@endsection

