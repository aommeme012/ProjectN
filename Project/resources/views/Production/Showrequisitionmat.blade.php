@extends('layouts.manuproduction')
@section('Prodcution')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div style="float: right;">
                    <a href="/Protion" class="btn btn-info btn-xs" >รายการที่กำลังผลิตอยู่</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <div class="a"><h3>เลือกรายการที่จะผลิต</h3></div>
                            <hr>
                            <thead>
                                <tr>
                                    <th>รหัสการเบิก</th>
                                    <th>วันที่การเบิก</th>
                                    <th>จำนวนวัตถุดิบที่เบิก</th>
                                    <th>วัตถุดิบที่เบิก</th>
                                    <th>รหัสแผนงาน</th>
                                    <th></th>
                                </tr>
                            </thead>
                            @foreach ($Requimat as $P)
                            <form  role="form"  method="post" action="{{route('P.update',[$P->Requismat_Id])}}" >
                                {{ csrf_field() }}
                                @method('put')
                            <tbody>

                                <tr>
                                    <td>{{$P->Requismat_Id}}</td>
                                    <td>{{$P->Requismat_Date}}</td>
                                    <td>{{$P->Requismat_Amount}}</td>
                                    <td><?php $requsitionmat = App\RequisitionMaterial::join('production_plannings','requisition_materials.Plan_Id','=','production_plannings.Plan_Id')
                                        ->join('components','production_plannings.component_Id','=','components.component_Id')
                                        ->join('componentdetails','components.component_Id','=','componentdetails.component_Id')
                                        ->where('requisition_materials.Requismat_Id',$P->Requismat_Id)->get();?>
                                        @foreach ($requsitionmat as $requsitionmats)
                                        <?php $mats1 = App\Materials::find($requsitionmats->Material_Id); ?>

                                        {{$mats1 ->idmat}}-{{$mats1 ->Material_Name}}<br>
                                        @endforeach
                                    </td>

                                    <td><?php $plan = App\RequisitionMaterial::join('production_plannings','requisition_materials.Plan_Id','=','production_plannings.Plan_Id')
                                    ->join('products','production_plannings.Product_Id','=','products.Product_Id')
                                    ->where('requisition_materials.Requismat_Id',$P->Requismat_Id)->get(); ?>
                                    @foreach ($plan  as $plans)
                                    <?php $planings = App\Product::find($plans->Plan_Id); ?>
                                    {{$plans ->idplan}}-{{$plans ->Product_Name}}
                                    @endforeach
                                </td>
                                <td>
                                    <button  type="submit" class="btn btn-warning btn-sm">ยืนยันการผลิต</button>
                                </td>
                            </tbody>
                            </form>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script>
    function CheckProduction() {
        swal({
  title: "คุณแน่ใจหรือไม่",
  text: "ที่จะทำการผลิตรายการนี้",
  icon: "warning",
  buttons: true,
  dangerMode: true,
}).then((willDelete) => {
  if (willDelete) {
    swal("เริ่มทำรายการผลิต", {
      icon: "success",
    }).then(()=>{
        document.getElementById('Production').submit();
    });
        }
    });
}
</script> --}}
@endsection

