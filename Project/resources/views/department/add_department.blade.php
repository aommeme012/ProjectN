@extends('layouts.manumanage')
@section('component')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="row">
                        <div style="padding:15px 50px 5px 50px;float:right;font-size:16px;">
                            <a href="/dep" class="btn btn-danger"><i class="w3-xxxlarge glyphicon glyphicon-arrow-left"></i></a>
                        </div>
                        <div class="col-md-4">
                            <h3><i class="w3-xxxlarge glyphicon glyphicon-user">&nbsp;เพิ่มข้อมูลของแผนกงาน </i></h3>
                            <hr>
                            <form id="addDep" role="form" method="post" action="{{route('dep.store')}}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input class="form-control" type="text" name="Dep_Name" placeholder="ชื่อแผนกงาน" required>
                                </div>
                                <div class="form-group">
                                    <button onclick="addDep()" type="submit" class="btn btn-primary btn-sm">ยืนยัน</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    {{-- <script>
        function addDep() {
            swal({
    title: "คุณแน่ใจหรือไม่",
    text: "ที่จะสร้างสูตร",
    icon: "warning",
    buttons: true,
    dangerMode: true,
    }).then((willDelete) => {
    if (willDelete) {
        swal("สร้างสูตรสำเร็จ", {
        icon: "success",
        }).then(()=>{
            document.getElementById('addDep').submit();
        });
            }
        });
    }
    </script> --}}
@endsection
