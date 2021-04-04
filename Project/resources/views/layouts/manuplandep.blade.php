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
                <br>
                <ul class="nav" id="main-menu">
                    <li>
                        <a class="active-menu" href="/PlanEmp"><i class="fa fa-table fa-3x"></i>แผนการผลิต</a>
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
        @yield('depplan')
    </div>
</body>
</html>
