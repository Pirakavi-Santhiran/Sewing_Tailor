<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Orders</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="fonts/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-purple sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">Simple<b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">Mrs H.N.A.Pieris</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    Mrs H.N.A.Pieris - Owner of the Tailor Shop

                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Mrs H.N.A.Pieris</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li class="treeview">
                    <a href="/dashboard" class="sidebar" ><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                    <a href="/adminRegister" class=" side-bar"><i class="fa fa-user fa-lg mr-1"></i> Register</a>
                    <a href="/adminOrders" class="list-group-item side-bar active"><i class="fa fa-users fa-lg mr-1"></i> Orders</a>
                    <a href="/adminPatterns" class=" side-bar" ><i class="fa fa-paper-plane"></i> <span>Patterns</span></a>
                    <a href="/adminMeasurements" class=" side-bar"><i class="fa fa-paperclip fa-lg mr-1"></i>Mesurements</a>
                    <a href="/adminStates" class=" side-bar"><i class="fa fa-signal fa-lg mr-1"></i> States</a>
                    <a href="/adminPayments" class=" side-bar"><i class="fa fa-paypal fa-lg mr-1"></i> Payments</a>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

        </section>

        <!-- Main content -->
        <section class="content">
            <div class="col-lg-20 col-md-15 pad40">
                <div class="tittle-agileinfo">
                    <h3>CUSTOMERS ORDERS </h3>
                </div>
                <!-- Website Overview -->
                <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title" align="center"><h3>Customers Orders Overview</h3></div>
                    </div>
                </div>

                <div style="float: right;"  class="design" >
                    <a href="{{url('/adminAddOrder')}}"><button class="addbtn ">Add Orders</button></a>
                </div>

                <!--section class="content"-->
                <div class="panel panel-default">
                    <div class="panel-body">
                <table class="table thread-dark">
                    <thead class="thead-dark">

                    <th>Order ID</th>
                    <th>Customer ID</th>
                    <th>Design ID</th>
                    <th>Color</th>
                    <th>Category</th>
                    <th>Comments</th>
                    <th>Date</th>
                    <th>State</th>
                    <th>Action</th>
                    <th>Delete</th>
                    <th>Update</th>
                    </thead>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->reg_id}}</td>
                            <td>{{$task->deisgn_id}}</td>
                            <td>{{$task->color}}</td>
                            <td>{{$task->category}}</td>
                            <td>{{$task->comments}}</td>
                            <td>{{$task->date}}</td>

                            <td>
                                @if($task->is_accepted)
                                    <button class="btn btn-success">Accepted</button>
                                @else
                                    <button class="btn btn-danger">Not accepted</button>
                                @endif
                            </td>
                            <td>
                                @if(!$task->is_accepted)
                                    <a href="/markasaccepted/{{$task->id}}" class="btn btn-primary">Mark as accepted</a>
                                @else
                                    <a href="/markasnotaccepted/{{$task->id}}" class="btn btn-warning">Mark as not accepted</a>
                                @endif

                            </td>
                            <td>
                                <a href="/deleteorder/{{$task->id}}" class="btn btn-danger">Delete</a>
                            </td>
                            <td>
                                <a href="/updateorder/{{$task->id}}" class="btn btn-info">Update</a>
                            </td>
                        </tr>

                    @endforeach
                </table>

                    </div>
                </div>
            </div>


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b><a href="http://www.fb.com/softsed">Peiris Fashion House</a></b>
        </div>
    </footer>


    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
