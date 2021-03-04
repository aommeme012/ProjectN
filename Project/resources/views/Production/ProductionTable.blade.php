<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Synthetic Stone</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                <a class="navbar-brand" href="index.html">Synthetic Stone</a>
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
<a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>
           <nav class="navbar-default navbar-side" role="navigation">
            <br>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                    <li>
                        <a  href="#"><i class="fa fa-sitemap fa-3x"></i> Manage data<span class="fa arrow"></span></a>
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
                        <div class="sidebar-collapse">
                            <ul class="nav" id="main-menu">
                                <li>
                                    <a  href="/Pur"><i class="fa fa-square-o fa-3x"></i> PurchaseOder</a>
                                </li>
                                <li>
                                    <a class="active-menu" href="/Rec"><i class="fa fa-square-o fa-3x"></i> Receives</a>
                                </li>
                                <li>
                                    <a  href="/Planing"><i class="fa fa-square-o fa-3x"></i> ProductionPlaning</a>
                                </li>
                </ul>
            </div>
        </nav>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <h3>Production</h3>
                                    <a href="{{ route('P.index')}}" class="btn btn-primary btn-sm">Production</a>
                                    <thead>
                                        <tr>
                                            <th>Production_Id</th>
                                            <th>Production_Date</th>
                                            <th>Production_Status</th>
                                            <th>Requismat_Id</th>
                                            <th>Emp_Id</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Production as $P)
                                        <tr>
                                            <td>{{$P->Production_Id}}</td>
                                            <td>{{$P->Production_Date}}</td>
                                            <td>{{$P->Production_Status}}</td>
                                            <td>{{$P->Requismat_Id}}</td>
                                            <td>{{$P->Emp_Id}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
    <script src="../assets/js/jquery-1.10.2.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.metisMenu.js"></script>
     <script src="../assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="../assets/js/morris/morris.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>
</html>