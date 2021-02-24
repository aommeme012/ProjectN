@extends('layouts.manumanage')
@section('component')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <h3>component</h3>
                            <a href="{{ route('comp.create')}}" class="btn btn-primary btn-sm">Add component</a>

                            <thead>
                                <tr>
                                    <th>component_Id</th>
                                    <th>component_Name</th>
                                    <th>component_Status</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comps as $comp)
                                <tr>
                                    <td>{{$comp->component_Id}}</td>
                                    <td>{{$comp->component_Name}}</td></a>
                                    <td>{{$comp->component_Status}}</td>
                                    <td>
                                        <a href="{{ route('comp.edit',[$comp->component_Id])}}" class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <form class="form-inline" method="post" action="{{route('comp.destroy',[$comp->component_Id])}}" >
                                            {{ csrf_field() }}
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                    <td>
                                        <a href="{{ route('comde.show',[$comp->component_Id])}}" class="btn btn-default btn-sm">Detail</a>
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
@endsection
