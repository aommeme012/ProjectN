@extends('layouts.manuproduction')
@section('Prodcution')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div class="table-responsive">
                        <div style="float: right;">
                            <a href="/Ption" class="btn btn-info btn-xs">รายการที่ผลิตเสร็จสิ้น</a>
                        </div>
                        <table class="table table-striped table-bordered table-hover">
                            <div class="a"><h3>ข้อมูลรายการที่ผลิต</h3></div>
                            <hr>
                            <thead>
                                <tr>
                                    <th>รหัสการผลิต</th>
                                    <th>วันที่การผลิต</th>
                                    <th>สถานะการผลิต</th>
                                    <th>วัตถุดิบที่เบิก</th>
                                    <th>จำนวนวัตถุดิบที่เบิก</th>
                                    <th>แผนงานที่ผลิต</th>
                                    <th>ชื่อคนที่สั่งผลิต</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Production as $P)
                                <form  role="form"  method="post" action="/updatesuccess/{{$P->Production_Id}}" >
                                    {{ csrf_field() }}
                                <tr>
                                    <td>{{$P->Production_Id}}</td>
                                    <td>{{$P->Production_Date}}</td>
                                    <td>{{$P->Production_Status}}</td>

                                    <td><?php $matAmount = App\Production::join('requisition_materials','productions.Requismat_Id','=','requisition_materials.Requismat_Id')
                                    ->join('production_plannings','requisition_materials.Plan_Id','=','production_plannings.Plan_Id')
                                    ->join('components','production_plannings.component_Id','=','components.component_Id')
                                    ->join('componentdetails','components.component_Id','=','componentdetails.component_Id')
                                    ->where('requisition_materials.Requismat_Id',$P->Requismat_Id)->get();?>
                                    @foreach ($matAmount as $matAmounts)
                                    <?php $matss = App\Materials::find($matAmounts->Material_Id); ?>

                                    {{$matss ->idmat}}-{{$matss ->Material_Name}}<br>
                                    @endforeach
                                </td>
                                <td>{{App\RequisitionMaterial::find($P->Requismat_Id)->Requismat_Amount}}</td>
                                    <td><?php $plan = App\RequisitionMaterial::join('production_plannings','requisition_materials.Plan_Id','=','production_plannings.Plan_Id')
                                        ->join('products','production_plannings.Product_Id','=','products.Product_Id')
                                        ->where('requisition_materials.Requismat_Id',$P->Requismat_Id)->get(); ?>
                                        @foreach ($plan  as $plans)
                                        <?php $planings = App\Product::find($plans->Plan_Id); ?>
                                        {{$plans ->idplan}}-{{$plans ->Product_Name}}
                                        @endforeach
                                    </td>
                                    <td>{{$P->Fname}}</td>
                                    <td>
                                        <button  type="submit" class="btn btn-warning btn-sm" >ยืนยันการผลิตเสร็จสิ้น</button>
                                    </td>

                                </tr>
                                </form>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
{{-- <script>
    function Production() {
        swal({
  title: "คุณแน่ใจหรือไม่",
  text: "ว่าจะยืนยันการผลิต",
  icon: "warning",
  buttons: true,
  dangerMode: true,
}).then((willDelete) => {
  if (willDelete) {
    swal("ผลิตเสร็จสิ้น", {
      icon: "success",
    }).then(()=>{
        document.getElementById('SubmitProduction').submit();
    });
        }
    });
}
</script> --}}
@endsection


