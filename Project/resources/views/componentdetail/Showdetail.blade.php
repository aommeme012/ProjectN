@extends('layouts.manumanage')
@section('component')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="row">
                        <div style="color:white;padding:15px 50px 5px 50px;float:right;font-size:16px;">
                            <a href="/comde" class="btn btn-danger square-btn-adjust">back</a>
                        </div>
                        <div class="col-md-6">
                            <h1>DetailComponent</h1>
                            <hr>
                            @foreach ($comde as $item)
                            <label>componentdetail of {{$item->component_Name}}</label>
                            <label>{{$item->Material_Name}} {{$item->Comde_Amount}} {{$item->component_Value}}</label>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
