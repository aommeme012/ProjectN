@extends('layouts.manumanage')
@section('component')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <h3>TypeProduct</h3>
                            <a href="{{ route('type.create')}}" class="btn btn-primary btn-sm">Add TypeProduct</a>

                            <thead>
                                <tr>
                                    <th>Type_Id</th>
                                    <th>Type_Name</th>
                                    <th>Type_Status</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($types as $type)
                                <tr>
                                    <td>{{$type->Type_Id}}</td>
                                    <td>{{$type->Type_Name}}</td>
                                    <td>{{$type->Type_Status}}</td>
                                    <td>
                                        <a href="{{ route('type.edit',[$type->Type_Id])}}" class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <form class="form-inline" method="post" action="{{route('type.destroy',[$type->Type_Id])}}">
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
