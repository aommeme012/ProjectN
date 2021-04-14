@extends('layouts.manumanage')
@section('component')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-body">
                                <div class="row">
                                    <div style="color:white;padding:15px 50px 5px 50px;float:right;font-size:16px;">
                                    <a href="/emp" class="btn btn-danger"><i class="w3-xxxlarge glyphicon glyphicon-arrow-left"></i></a>
                                    </div>
                                    <div class="col-md-4">
                                        <h3><i class="w3-xxxlarge glyphicon glyphicon-user">&nbsp;เพิ่มข้อมูลพนักงาน</i></h3>
                                        <hr>
                                        <form  role="form"  method="post" action="{{route('emp.store')}}">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                {{-- <input class="form-control" type="text" name="idemp" placeholder="รหัสพนักงาน"required>
                                                <br> --}}
                                                <input class="form-control" type="text" name="Fname" placeholder="ชื่อ"required>
                                                <br>
                                                <input class="form-control" type="text" name="Lname"placeholder="นามสกุล"required>
                                                <div class="form-group">
                                                    <br>
                                                <input class="form-control" type="text" name="Address"placeholder="ที่อยู่"required>
                                                <div class="form-group">
                                                    <br>
                                                <input class="form-control" type="tel" name="Tel"placeholder="เบอร์โทร" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="0812345678" required>
                                                <div class="form-group">
                                                    <br>
                                                    <select class="form-control" name="Sex">
                                                        <option value="ชาย"> ชาย</option>
                                                        <option value="หญิง"> หญิง</option>
                                                    </select>
                                                <div class="form-group">
                                                    <br>
                                                <input class="form-control" type="text" name="Username"placeholder="Username"required>
                                                <div class="form-group">
                                                    <br>
                                                <input class="form-control" type="text" name="Password"placeholder="Password"required>
                                                <div class="form-group">
                                                    <br>
                                            <label>เลือกสิทธิ์</label>
                                            <select class="form-control" name="type">
                                                <option  value="1">แอดมิน </option>
                                                <option  value="0">พนักงาน </option>
                                            </select>
                                            <br>
                                            <label>เลือกแผนกงาน</label>
                                            <select class="form-control" name="Dep_Id">
                                            @foreach ($deps as $dep)
                                                <option value="{{$dep->Dep_Id}}">
                                                {{$dep->Dep_Name}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                            </div>
                                            <div class="form-group">
                                                <button  type="submit" class="btn btn-primary btn-sm">ยืนยัน</button>
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
