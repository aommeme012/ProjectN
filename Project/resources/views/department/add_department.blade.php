@extends('layouts.manumanage')
@section('component')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="row">
                        <div style="color:white;padding:15px 50px 5px 50px;float:right;font-size:16px;">
                            <a href="/dep" class="btn btn-danger square-btn-adjust">back</a>
                        </div>
                        <div class="col-md-6">
                            <h3>Add Departments</h3>
                            <form role="form" method="post" action="{{route('dep.store')}}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Dep Name</label>
                                    <input class="form-control" type="text" name="Dep_Name">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-sm">create</button>
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
