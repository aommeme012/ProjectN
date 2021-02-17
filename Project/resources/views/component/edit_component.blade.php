<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Synthetic Stone</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="{{asset('/assets/css/bootstrap.css')}}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{asset('/assets/css/font-awesome.css')}}" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="{{asset('/assets/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{asset('/assets/css/custom.css')}}" rel="stylesheet" />
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
                <a class="navbar-brand" >Synthetic Stone</a>
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
                        <a class="active-menu"> <i class="fa fa-sitemap fa-3x"></i> Manage data<span class="fa arrow"></span></a>
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
                        <div style="color:white;padding:15px 50px 5px 50px;float:right;font-size:16px;">
                            <a href="/Pdet" class="btn btn-danger square-btn-adjust">Detail</a>
                        </div>
                        <div class="panel-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>component</h3>
                                        <form role="form"  method="post" action="{{route('comp.update',[$component->component_Id])}}">
                                            {{ csrf_field() }}
                                            @method("put")
                                            <hr>
                                            <div class="form-group">
                                                <label>component_Name</label>
                                                <input class="form-control" type="text" name="component_Name"value = "{{$component->component_Name}}">
                                            </div>
                                            @if ($component->component_Status == "Enable")
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="component_Status" value="Enable" checked />Enable
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="component_Status" value="Disable"  />Disable
                                                        </label>
                                                    </div>
                                                @else
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="component_Status" value="Enable"  />Enable
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="component_Status" value="Disable" checked />Disable
                                                        </label>
                                                    </div>
                                                @endif
                                            <button  class="btn btn-warning" id="add-more" type="button">AddDetail</button>
                                            <h3>DetailComponent</h3>
                                            <hr>
                                            @foreach ($comde as $comdetail)
                                            <div class="form-group" id="form-line">
                                            <input type="hidden" name='Comde_Id[]' value="{{$comdetail->Comde_Id}}">
                                             <label>Material</label>
                                                    <select class="form-control" name="Material_Id[]" >
                                                        @foreach ($mats as $mat)
                                                        <option value="{{$mat->Material_Id}}"{{($comdetail->Material_Id == $mat->Material_Id?'selected':'')}}>
                                                            {{$mat->Material_Name}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                            <label>Comde_Amount</label>
                                            <input class="form-control" type="Number" name="Comde_Amount[]" value = "{{$comdetail->Comde_Amount}}">
                                            </div>
                                            @endforeach
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-warning btn-sm">edit</button>
                                            </div>
                                        </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{asset('/assets/js/jquery-1.10.2.js')}}"></script>
        <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('/assets/js/jquery.metisMenu.js')}}"></script>
        <script src="{{asset('/assets/js/morris/raphael-2.1.0.min.js')}}"></script>
        <script src="{{asset('/assets/js/morris/morris.js')}}"></script>
        <script src="{{asset('/assets/js/custom.js')}}"></script>
        <script src="/assets/js/jquery-1.10.2.js"></script>
    <script>
        $(document).ready(function(){
            var i = 1;
            $('#add-more').click(function(){
                $('#form-line').append(" <label>Material</label>"+
                "<select class=\"form-control\" name=\"Material_Id["+i+"]\">"+
                "@foreach ($mats as $mat)"+
                "<option value=\"{{$mat->Material_Id}}\">"+
                "{{$mat->Material_Name}}"+
                "</option>"+
                "@endforeach"+
                "</select>"+
                "<label>Comde_Amount</label>"+
                "<input class=\"form-control\" type=\"Number\" name=\"Comde_Amount["+i+"]\">");
                i++;
            });
        });
    </script>
</body>
</html>


