@extends('layouts.manumanage')
@section('component')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="row">
                        <div style="padding:15px 50px 5px 50px;float:right;font-size:16px;">
                            <a href="/dep" class="btn btn-danger square-btn-adjust"><i class="w3-xxxlarge glyphicon glyphicon-arrow-left"></i></a>
                        </div>
                        <div class="col-md-6">
                            <h3>Add Departments</h3>
                            <form id="addDep" role="form" method="post" action="{{route('dep.store')}}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Dep Name</label>
                                    <input class="form-control" type="text" name="Dep_Name">
                                </div>
                                <div class="form-group">
                                    <button onclick="addDep()" type="button" class="btn btn-primary btn-sm">create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
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
</script>
@endsection
