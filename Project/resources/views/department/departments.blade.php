@extends('layouts.manumanage')
@section('component')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <h3>Departments</h3>
                            <a href="{{ route('dep.create')}}" class="btn btn-primary btn-sm">Add
                                Departments</a>
                            <thead>
                                <tr>
                                    <th>Dep_Id</th>
                                    <th>Dep_Name</th>
                                    <th>Dep_Status</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($deps as $dep)
                                <tr>
                                    <td>{{$dep->Dep_Id}}</td>
                                    <td>{{$dep->Dep_Name}}</td>
                                    <td>{{$dep->Dep_Status}}</td>
                                    <td>
                                        <a href="{{ route('dep.edit',[$dep->Dep_Id])}}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <form class="form-inline" method="post"
                                            action="{{route('dep.destroy',[$dep->Dep_Id])}}"
                                            enctype="multipart/form-data">
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
        </div>
    </div>
</div>
@endsection
