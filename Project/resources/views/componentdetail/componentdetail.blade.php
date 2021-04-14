@extends('layouts.manumanage')
@section('component')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <div class="a"><h3>รายละเอียดส่วนผสม</h3></div>
                            <hr>
                            <a href="{{ route('comp.create')}}" class="btn btn-primary btn-sm">เพิ่มข้อมูลส่วนผสม</a>
<br><br>
                            <thead>
                                <tr>

                                    <th>จำนวนวัตถุดิบ</th>
                                    <th>ส่วนผสม</th>
                                    <th>รหัสวัตถุดิบ</th>
                                    <th>ชื่อสูตรผสม</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comdes as $comde)
                                <tr>
                                    
                                    <td>{{$comde->Comde_Amount}}</td>
                                    <td>{{$comde->component_Value}}</td>
                                    <td>{{App\Materials::find($comde->Material_Id)->idmat}}</td>
                                    <td>{{App\component::find($comde->component_Id)->component_Name}}</td>
                                </form>
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
@endsection

