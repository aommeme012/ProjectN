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
<a href="#" class="btn btn-danger square-btn-adjust">Logout</a> @auth
<p>เข้าระบบแล้ว{{ Auth::user()->Fname }}</p>
@endauth
<form action="/logout" method="POST">
    @csrf
</form>
        </nav>
           <!-- /. NAV TOP  -->
           <nav class="navbar-default navbar-side" role="navigation">
            <br>
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                    <li>
                        <a class="active-menu" href="#"><i class="fa fa-sitemap fa-3x"></i> Manage data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('dep.index')}}">Departments</a>
                            </li>
                            <li>
                                <a href="/admin">Admin</a>
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
                                    <a  href="/Planing"><i class="fa fa-square-o fa-3x"></i> ProductionPlaning</a>
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
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <h3>Employees</h3>
                                    <a href="{{ route('emp.create')}}" class="btn btn-primary btn-sm">Add Employees</a>
                                    <thead>
                                        <tr>
                                            <th>Emp_Id</th>
                                            <th>Fname</th>
                                            <th>Lname</th>
                                            <th>Address</th>
                                            <th>Tel</th>
                                            <th>Sex</th>
                                            <th>Username</th>
                                            {{-- <th>Password</th> --}}
                                            <th>Emp_Status</th>
                                            <th>Dep_Id</th>
                                            <th></th>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($emps as $emp)
                                        <tr>
                                            <td>{{$emp->Emp_Id}}</td>
                                            <td>{{$emp->Fname}}</td>
                                            <td>{{$emp->Lname}}</td>
                                            <td>{{$emp->Address}}</td>
                                            <td>{{$emp->Tel}}</td>
                                            <td>{{$emp->Sex}}</td>
                                            <td>{{$emp->Username}}</td>
                                            {{-- <td>{{$emp->Password}}</td> --}}
                                            <td>{{$emp->Emp_Status}}</td>
                                            <td>{{$emp->Dep_Id}}</td>
                                            <td>
                                                <a href="{{ route('emp.edit',[$emp->Emp_Id])}}" class="btn btn-warning btn-sm">Edit</a>
                                            </td>
                                            <td>
                                                <form class="form-inline" method="post" action="{{route('emp.destroy',[$emp->Emp_Id])}}" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
                </div>
            </div>

                    </div>
                </div>
            </div>     <!-- /. ROW  -->
    </div>
    </div>

</body>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
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
