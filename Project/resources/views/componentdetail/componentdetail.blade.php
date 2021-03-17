@extends('layouts.manumanage')
@section('component')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <h3>component detail</h3>
                            <a href="{{ route('comp.create')}}" class="btn btn-primary btn-sm">Add component detail</a>

                            <thead>
                                <tr>
                                    <th>Comde_Id</th>
                                    <th>Comde_Amount</th>
                                    <th>component_Value</th>
                                    <th>Material_Id</th>
                                    <th>component_Id</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comdes as $comde)
                                <tr>
                                    <td>{{$comde->Comde_Id}}</td>
                                    <td>{{$comde->Comde_Amount}}</td>
                                    <td>{{$comde->component_Value}}</td>
                                    <td>{{App\Materials::find($comde->Material_Id)->Material_Name}}</td>
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

