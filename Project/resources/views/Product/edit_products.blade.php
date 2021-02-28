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
                                        <h3>Products</h3>
                                        <form  method="post" action="{{route('Pro.update',[$Pro->Product_Id])}}" >
                                            {{ csrf_field() }}
                                        @method('put')
                                            <div class="form-group">
                                            <label>Product_Name</label>
                                                <input class="form-control" type="text" name="Product_Name"value="{{$Pro->Product_Name}}">
                                            <label>Product_Amount</label>
                                                <input class="form-control" type="text" name="Product_Amount"value="{{$Pro->Product_Amount}}">
                                                <label>TypeProduct</label>
                                                <select class="form-control" name="Type_Id">
                                                    @foreach ($types as $type)
                                                        <option value="{{$type->Type_Id}}">
                                                        {{$type->Type_Name}}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                                @if ($Pro->Product_Status == "Enable")
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="Product_Status" value="Enable" checked />Enable
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="Product_Status" value="Disable"  />Disable
                                                        </label>
                                                    </div>
                                                @else
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="Product_Status" value="Enable"  />Enable
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="Product_Status" value="Disable" checked />Disable
                                                        </label>
                                                    </div>
                                                @endif
                                        </label>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-warning btn-sm">edit</button>
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
