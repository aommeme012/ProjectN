@extends('layouts.manumanage')
@section('component')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div style="color:white;padding:15px 50px 5px 50px;float:right;font-size:16px;">
                    <a href="/comp" class="btn btn-danger"><i class="w3-xxxlarge glyphicon glyphicon-arrow-left"></i></a>
                </div>
                <div class="panel-body">

                    <div class="row">
                        <div class="col-md-6">
                            <h3>แก้ไขสูตรผสม</h3>
                            <form role="form" method="post" id="editcomponant"
                                action="{{route('comp.update',[$component->component_Id])}}">
                                {{ csrf_field() }}
                                @method("put")
                                <hr>
                                <div class="form-group">
                                    <label>ชื่อสูตรผสม</label>
                                    <input class="form-control" type="text" name="component_Name"
                                        value="{{$component->component_Name}}">
                                </div>
                                @if ($component->component_Status == "Enable")
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="component_Status" value="Enable" checked />Enable
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="component_Status" value="Disable" />Disable
                                    </label>
                                </div>
                                @else
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="component_Status" value="Enable" />Enable
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="component_Status" value="Disable" checked />Disable
                                    </label>
                                </div>
                                @endif
                                <button class="btn btn-warning" id="add-more" type="button">AddDetail</button>
                                <h3>รายละเอียดของสูตร</h3>
                                <hr>
                                @foreach ($comde as $comdetail)
                                <div class="form-group" id="form-line">
                                    <label>ส่วนผสมของสูตร</label>
                                    <input class="form-control" type="text" name="component_Value"
                                        value="{{$comdetail->component_Value}}">
                                    <input type="hidden" name='Comde_Id[]' value="{{$comdetail->Comde_Id}}">
                                    <label>เลือกวัตถุดิบ</label>
                                    <select class="form-control" name="Material_Id[]">
                                        @foreach ($mats as $mat)
                                        <option value="{{$mat->Material_Id}}"
                                            {{($comdetail->Material_Id == $mat->Material_Id?'selected':'')}}>
                                            {{$mat->Material_Name}}
                                        </option>
                                        @endforeach
                                    </select>
                                    <label>จำนวนวัตถุดิบ</label>
                                    <input class="form-control" type="Number" name="Comde_Amount[]"
                                        value="{{$comdetail->Comde_Amount}}">
                                </div>
                                @endforeach
                                <div class="form-group">
                                    <button onclick="checkEdit()" type="button" class="btn btn-warning btn-sm">แก้ไข</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            var i = 1;
            $('#add-more').click(function(){
                $('#form-line').append(" <label>เลือกวัตถุดิบ</label>"+
                "<select class=\"form-control\" name=\"Material_Id["+i+"]\">"+
                "@foreach ($mats as $mat)"+
                "<option value=\"{{$mat->Material_Id}}\">"+
                "{{$mat->Material_Name}}"+
                "</option>"+
                "@endforeach"+
                "</select>"+
                "<label>จำนวนวัตถุดิบ</label>"+
                "<input class=\"form-control\" type=\"Number\" name=\"Comde_Amount["+i+"]\">");
                i++;
            });
        });
    </script>

    <script>
        function checkEdit() {
            swal({
      title: "คุณแน่ใจหรือไม่",
      text: "จะแก้ไข {{$component->component_Name}} ?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((willDelete) => {
      if (willDelete) {
        swal("{{$component->component_Name}} แก้ไขเรียบร้อย", {
          icon: "success",
        }).then(()=>{
            document.getElementById('editcomponant').submit();
        });
            }
        });
    }
    </script>
</div>
@endsection
