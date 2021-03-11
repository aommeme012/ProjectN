<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Synthetic Stone</title>
    <link href="{{asset('/assets/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('/assets/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{asset('/assets/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/assets/css/custom.css')}}" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='/stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Synthetic Stone</a>
            </div>
            <div style="color: white;
                padding: 15px 50px 5px 50px;
                float: right;
                font-size: 16px;">
               <form action="/logout" method="POST">
                {{ csrf_field() }}
                <button class="btn btn-danger square-btn-adjust" type="submit">{{ Auth::user()->Fname }}</button>
               </form>
            </div>
        </nav>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a  > <i class="fa fa-sitemap fa-3x"></i>จัดการข้อมูล<span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('dep.index')}}">Departments</a>
                            </li>
                            <li>
                                <a href="/emp">Employees</a>
                            </li>
                            <li>
                                <a href="/part">Partner</a>
                            </li>
                            <li>
                                <a href="/mat">Materials</a>
                            </li>
                            <li>
                                <a href="/type">TypeProduct</a>
                            </li>
                            <li>
                                <a href="/Pro">Products</a>
                            </li>
                            <li>
                                <a href="/comp">component</a>
                            </li>
                            <li>
                                <a href="/comde">component detail</a>
                            </li>
                        </ul>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="/Pur"><i class="fa fa-square-o fa-3x"></i> PurchaseOder</a>
                    </li>
                    <li>
                        <a href="/Rec"><i class="fa fa-square-o fa-3x"></i> Receives</a>
                    </li>
                    <li>
                        <a class="active-menu" href="/Planing"><i class="fa fa-square-o fa-3x"></i> ProductionPlaning</a>
                    </li>
                    <li>
                        <a  href="/RequiMM"><i class="fa fa-square-o fa-3x"></i> RequisitionMaterial</a>
                    </li>
                    <li>
                        <a  href="/P"><i class="fa fa-square-o fa-3x"></i> Production</a>
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
        @yield('PlaningProduction')
    </div>
</body>
</html>
