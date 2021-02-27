@extends('layouts.manumanage')
@section('component')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <h3>Materials</h3>
                                    <a href="{{ route('mat.create')}}" class="btn btn-primary btn-sm">Add Materials</a>
                                    <thead>
                                        <tr>
                                            <th>Material_Id</th>
                                            <th>Material_Name</th>
                                            <th>Material_Amount</th>
                                            <th>Material_Status</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mats as $mat)
                                        <tr>
                                            <td>{{$mat->Material_Id}}</td>
                                            <td>{{$mat->Material_Name}}</td>
                                            <td>{{$mat->Material_Amount}}</td>
                                            <td>{{$mat->Material_Status}}</td>
                                            <td>
                                                <a href="{{ route('mat.edit',[$mat->Material_Id])}}" class="btn btn-warning btn-sm">Edit</a>
                                            </td>
                                            <td>
                                                <form class="form-inline" method="post" action="{{route('mat.destroy',[$mat->Material_Id])}}" enctype="multipart/form-data">
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

