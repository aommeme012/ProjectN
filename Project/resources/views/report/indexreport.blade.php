@extends('layouts.manureport')
@section('report')
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <div style="float: right;">
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <div class="a"><h3>MANUREPORT</h3></div>
                            <hr>
                            <a href="{{ route('report.index')}}">
                            <div  class="row">
                                <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="panel panel-back noti-box">
                                <span class="icon-box bg-color-red set-icon">
                                    <i class="fa fa-print fa-1x"></i>
                                </span>
                                <div class="text-box" >
                                    <p class="main-text">Report</p>
                                    <p class="text-muted">รายงานวัตถุดิบ</p>
                                </a>
                                </div>
                             </div>
                             </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="panel panel-back noti-box">
                                <span class="icon-box bg-color-green set-icon">
                                    <i class="fa fa-bars"></i>
                                </span>
                                <div class="text-box" >
                                    <p class="main-text">Report</p>
                                    <p class="text-muted">รายงานการผลิต</p>
                                </div>
                             </div>
                             </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="panel panel-back noti-box">
                                <span class="icon-box bg-color-blue set-icon">
                                    <i class="fa fa-bell-o"></i>
                                </span>
                                <div class="text-box" >
                                    <p class="main-text">Report</p>
                                    <p class="text-muted">รายงานการเบิกสินค้า</p>
                                </div>
                             </div>
                             </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="panel panel-back noti-box">
                                <span class="icon-box bg-color-brown set-icon">
                                    <i class="fa fa-rocket"></i>
                                </span>
                                <div class="text-box" >
                                    <p class="main-text">Report</p>
                                    <p class="text-muted">ยอดสินค้าคงเหลือ</p>
                                </div>
                             </div>
                             </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

