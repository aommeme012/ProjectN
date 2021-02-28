@extends('layouts.manuproductionplaning')
@section('Planing')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                        <div class="row">
                            <div style="color:white;padding:15px 50px 5px 50px;float:right;font-size:16px;">
                            <a href="/Plan" class="btn btn-danger square-btn-adjust">back</a>
                            </div>
                            <div class="col-md-6">
                                <h3>ProductionPlaning</h3>
                                <form role="form"  method="post" action="{{route('Plan.store')}}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>Plan_Date</label>
                                        <input class="form-control" type="Date" name="Plan_Date">
                                        <label>Amount</label>
                                        <input class="form-control" type="number" name="Amount">
                                    <label>component</label>
                                    <select class="form-control" name="component_Id">
                                    @foreach ($comps as $comp)
                                        <option value="{{$comp->component_Id}}">
                                        {{$comp->component_Name}}
                                        </option>
                                        @endforeach
                                    </select>
                                    <label>Product</label>
                                    <select class="form-control" name="Product_Id">
                                    @foreach ($pros as $Pro)
                                        <option value="{{$Pro->Product_Id}}">
                                        {{$Pro->Product_Name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-sm">Planing</button>
                                    </div>
                                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

