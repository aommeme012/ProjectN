@extends('layouts.manumanage')
@section('component')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                        <div class="row">
                            <div style="color:white;padding:15px 50px 5px 50px;float:right;font-size:16px;">
                                <a href="/Pro" class="btn btn-danger square-btn-adjust">back</a>
                                </div>
                            <div class="col-md-6">
                                <h3>Add Product</h3>
                                <form role="form"  method="post" action="{{route('Pro.store')}}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>Product_Name</label>
                                        <input class="form-control" type="text" name="Product_Name">
                                        <label>Product_Amount</label>
                                        <input class="form-control" type="text" name="Product_Amount">
                                        <div class="form-group">
                                    <label>TypeProduct</label>
                                    <select class="form-control" name="Type_Id">
                                    @foreach ($types as $type)
                                        <option value="{{$type->Type_Id}}">
                                        {{$type->Type_Name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
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
</div>
@endsection

