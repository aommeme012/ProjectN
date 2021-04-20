@extends('layouts.manumanage')
@section('component')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="row">
                        <div style="color:white;padding:15px 50px 5px 50px;float:right;font-size:16px;">
                            <a href="/comde" class="btn btn-danger"><i class="w3-xxxlarge glyphicon glyphicon-arrow-left"></i></a>
                        </div>
                        <table class="table table-striped table-bordered table-hover">
                        <div class="col-md-12">
                            <div class="a"><h1>รายละเอียดของสูตรตัวนี้</h1>

                            @foreach ($comde as $item)
                            <tbody>
                            <tr>
                            <br>
                            <td><div class="a"><label><h3>ชื่อสูตร || {{$item->component_Name}}</h3></label><br></div></td>

                            <td><div class="a"><label> <h3>ชื่อวัตถุดิบ ||{{$item->idmat}} {{$item->Material_Name}}</h3> </label><br></div></td>

                            <td><div class="a"><label><h3>จำนวนวัตถุดิบ || {{$item->Comde_Amount}} </h3></label><br></div></td>

                            <td><div class="a"><label><h3> อุปกรณ์ที่ใช้ || {{$item->component_Value}}</h3></label></div></td>

                            @endforeach
                        </tbody>
                    </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
