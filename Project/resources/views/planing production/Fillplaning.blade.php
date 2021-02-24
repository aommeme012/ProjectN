<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Synthetic Stone</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
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
           <!-- /. NAV TOP  -->
           <nav class="navbar-default navbar-side" role="navigation">
            <br>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                    <li>
                        <a><i class="fa fa-sitemap fa-3x"></i> Manage data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/dep">Departments</a>
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
                            <ul class="nav" id="main-menu">
                                <li>
                                    <a  href="/Pur"><i class="fa fa-square-o fa-3x"></i> PurchaseOder</a>
                                </li>
                                <li>
                                    <a  href="/Rec"><i class="fa fa-square-o fa-3x"></i> Receives</a>
                                </li>
                                <li>
                                    <a class="active-menu" href="/Planing"><i class="fa fa-square-o fa-3x"></i> ProductionPlaning</a>
                                </li>
                                <li>
                                    <a  href="/RequiMM"><i class="fa fa-square-o fa-3x"></i> RequisitionMaterial</a>
                                </li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->
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
</body>
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="../assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="../assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>


</body>
</html>
