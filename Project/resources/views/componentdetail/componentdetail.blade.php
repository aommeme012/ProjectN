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
                                    <th>Material_Id</th>
                                    <th>component_Id</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comdes as $comde)
                                <tr>
                                    <td>{{$comde->Comde_Id}}</td>
                                    <td>{{$comde->Comde_Amount}}</td>
                                    <td>{{$comde->Material_Id}}</td>
                                    <td>{{$comde->component_Id}}</td>
                                    <td>
                                        <a href="{{ route('comde.edit',[$comde->Comde_Id])}}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <form class="form-inline" method="post"
                                            action="{{route('comde.destroy',[$comde->Comde_Id])}}">
                                            {{ csrf_field() }}
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End  Kitchen Sink -->
        </div>
    </div>
</div>
@endsection

