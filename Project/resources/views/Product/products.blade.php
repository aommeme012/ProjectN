@extends('layouts.manumanage')
@section('component')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <h3>Product</h3>
                            <a href="{{ route('Pro.create')}}" class="btn btn-primary btn-sm">Add Product</a>
                            <thead>
                                <tr>
                                    <th>Product_Id</th>
                                    <th>Product_Name</th>
                                    <th>Product_Amount</th>
                                    <th>Product_Status</th>
                                    <th>Type_Id</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pros as $Pro)
                                <tr>
                                    <td>{{$Pro->Product_Id}}</td>
                                    <td>{{$Pro->Product_Name}}</td>
                                    <td>{{$Pro->Product_Amount}}</td>
                                    <td>{{$Pro->Product_Status}}</td>
                                    <td>{{$Pro->Type_Id}}</td>
                                    <td>
                                        <a href="{{ route('Pro.edit',[$Pro->Product_Id])}}" class="btn btn-warning btn-sm"><i class = "fa fa-pencil"></i></a>
                                    </td>
                                    <td>
                                        <form id="form_{{$Pro->Product_Id}}" class="form-inline" method="post" action="{{route('Pro.destroy',[$Pro->Product_Id])}}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            @method('delete')
                                            <button type="button" class="btn btn-danger btn-sm"
                                            onclick = "delete_{{$Pro->Product_Id}}()"><i class = "fa fa-trash-o"></i></button>
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
        @foreach ( $pros as $Pro )
    function delete_{{$Pro->Product_Id}}() {
        swal({
      title: "คุณแน่ใจนะที่จะลบอันนี้",
      text: "คุณต้องการที่จะลบ {{$Pro->Product_Name}} ?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((willDelete) => {
      if (willDelete) {
        swal("{{$Pro->Product_Name}} ลบเสร็จสิ้น ", {
          icon: "success"

        })
        .then(()=>{
            document.getElementById('form_{{$Pro->Product_Id}}').submit();
        });
      }
    });
        }
            @endforeach
    </script>
@endsection


