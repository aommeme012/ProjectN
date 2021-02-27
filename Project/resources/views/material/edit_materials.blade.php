@extends('layouts.manumanage')
@section('component')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                        <div class="row">
                            <div style="color:white;padding:15px 50px 5px 50px;float:right;font-size:16px;">
                                <a href="/mat" class="btn btn-danger square-btn-adjust">back</a>
                                </div>
                            <div class="col-md-6">
                                <h3>Materials</h3>
                                <form role="form"  method="post" action="{{route('mat.update',[$mat->Material_Id])}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    @method('put')
                                    <div class="form-group">
                                        <label>Material Name</label>
                                    <input class="form-control" type="text" name="Material_Name" value="{{$mat->Material_Name}}">
                                    <label>Material Amount</label>
                                    <input class="form-control" type="text" name="Material_Amount" value="{{$mat->Material_Amount}}">
                                    </div>
                                    @if ($mat->Material_Status == "Enable")
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="Material_Status" value="Enable" checked />Enable
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="Material_Status" value="Disable"  />Disable
                                                    </label>
                                                </div>
                                            @else
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="Material_Status" value="Enable"  />Enable
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="Material_Status" value="Disable" checked />Disable
                                                    </label>
                                                </div>
                                            @endif
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-warning btn-sm">edit</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

