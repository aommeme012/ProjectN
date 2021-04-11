@extends('layouts.manureport')
@section('report')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <form action="/reportmat">
                        <div class="form-group">
                            <i class="w3-xxxlarge glyphicon glyphicon-user">&nbsp;<label>ออกรายงานการเบิกวัตถุดิบ</label></i>
                            <hr>
                            <div class="col-md-4">

                                <label for="StartDate">ตั้งแต่</label><input class="form-control" type="Date" name="StartDate" required>
                            </div>
                            <div class="col-md-4">
                                <label for="EndDate">จนถึง</label><input class="form-control" type="Date" name="EndDate" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">ออกรายงาน</button>
                        </div>
                    </form>
                    <br>
                    <br>
                    <br>
                    <form action="/reportproduction">
                        <div class="form-group">
                            <i class="w3-xxxlarge glyphicon glyphicon-user">&nbsp;<label>ออกรายงานการผลิต</label></i>
                            <hr>
                            <div class="col-md-4">

                                <label for="StartDate">ตั้งแต่</label><input class="form-control" type="Date" name="StartDate" required>
                            </div>
                            <div class="col-md-4">
                                <label for="EndDate">จนถึง</label><input class="form-control" type="Date" name="EndDate" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">ออกรายงาน</button>
                        </div>
                    </form>
                    <br>
                    <br>
                    <br>
                    <form action="/reportreproduct">
                        <div class="form-group">
                            <i class="w3-xxxlarge glyphicon glyphicon-user">&nbsp;<label>ออกรายงานการเบิกสินค้า</label></i>
                            <hr>
                            <div class="col-md-4">

                                <label for="StartDate">ตั้งแต่</label><input class="form-control" type="Date" name="StartDate" required>
                            </div>
                            <div class="col-md-4">
                                <label for="EndDate">จนถึง</label><input class="form-control" type="Date" name="EndDate" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">ออกรายงาน</button>
                        </div>
                    </form>
                    <br>
                    <hr>
                    <form action="/reportproduct">
                        <div class="form-group">
                            <div class="a">
                                <h1>สินค้าคงเหลือ</h1>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="a"> <button type="submit" class="btn btn-primary btn-sm">ออกรายงาน</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
