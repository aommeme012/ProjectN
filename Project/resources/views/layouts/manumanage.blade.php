<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Synthetic Stone</title>
        <link href="{{asset('/assets/css/bootstrap.css')}}" rel="stylesheet" />
        <link href="{{asset('/assets/css/font-awesome.css')}}" rel="stylesheet" />
        <link href="{{asset('/assets/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
        <link href="{{asset('/assets/css/custom.css')}}" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='/stylesheet' type='text/css' />
    </head>
<body>
    <style>
        div.a {
            text-align: center;
        }
        </style>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand">Synthetic Stone</a>
            </div>
            <div style="padding: 15px 50px 5px 50px;float: right;">
                <form action="/logout" method="POST">
                    {{ csrf_field() }}
                    <button class="btn btn-danger btn-xs" type="submit">{{ Auth::user()->Fname }}</button>
                </form>
            </div>
        </nav>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a class="active-menu"> <i class="fa fa-sitemap fa-3x"></i> จัดการข้อมูล<span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('dep.index')}}">แผนกงาน</a>
                            </li>
                            <li>
                                <a href="/emp">พนักงาน</a>
                            </li>
                            <li>
                                <a href="/part">บริษัทคู่ค้า</a>
                            </li>
                            <li>
                                <a href="/mat">วัตถุดิบ</a>
                            </li>
                            <li>
                                <a href="/type">ชนิดสินค้า</a>
                            </li>
                            <li>
                                <a href="/Pro">สินค้า</a>
                            </li>
                            <li>
                                <a href="/comp">ส่วนประกอบ</a>
                            </li>
                            <li>
                                <a href="/comde">รายละเอียดส่วนประกอบ</a>
                            </li>
                        </ul>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="/Pur"><i class="fa fa-table fa-3x"></i>สั่งซื้อวัตถุดิบ</a>
                    </li>
                    <li>
                        <a href="/Rec"><i class="fa fa-dashboard fa-3x"></i> รับเข้าวัตถุดิบ</a>
                    </li>
                    <li>
                        <a href="/Planing"><i class="fa fa-bar-chart-o fa-3x"></i>วางแผนการผลิต</a>
                    </li>
                    <li>
                        <a href="/RequiMM"><i class="fa fa-desktop fa-3x"></i> เบิกวัตถุดิบ</a>
                    </li>
                    <li>
                        <a href="/P"><i class="fa fa-bar-chart-o fa-3x"></i> การผลิต</a>
                    </li>
                    <li>
                        <a  href="/RequiPP"><i class="fa fa-flask fa-3x"></i>เบิกสินค้า</a>
                    </li>
                </ul>
            </div>
        </nav>
        <script src="{{asset('assets/js/jquery-1.10.2.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.metisMenu.js')}}"></script>
        <script src="{{asset('assets/js/morris/raphael-2.1.0.min.js')}}"></script>
        <script src="{{asset('assets/js/morris/morris.js')}}"></script>
        <script src="{{asset('assets/js/custom.js')}}"></script>
        <script src="{{asset('assets/js/jquery-1.10.2.js')}}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        @yield('component')
    </div>
</body>
</html>
