<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Design patterns</title>
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
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li class="treeview">
                    <a href="/dashboard" class="sidebar" ><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                    <a href="/adminRegister" class=" side-bar"><i class="fa fa-user fa-lg mr-1"></i> Register</a>
                    <a href="/adminOrders" class=" side-bar "><i class="fa fa-users fa-lg mr-1"></i> Orders</a>
                    <a href="/adminPatterns" class=" side-bar active" ><i class="fa fa-paper-plane"></i> <span>Patterns</span></a>
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
            <h1>

            </h1>

        </section>

        <!-- Main content -->
        <section class="content">

            <div id="gallery" class="gallery">
                <div class="tittle-agileinfo">
                    <h3>Design Patterns & Prices</h3>
                </div>

                <div class="w3ls_banner_bottom_grids">
                    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#sarees" id="saree-tab" role="tab" data-toggle="tab" aria-controls="saree" aria-expanded="true">Saree Jackets</a></li>
                            <li role="presentation"><a href="#frocks" role="tab" id="frock-tab" data-toggle="tab" aria-controls="frocks">Frocks</a></li>
                            <li role="presentation"><a href="#blouses" role="tab" id="blouse-tab" data-toggle="tab" aria-controls="blouses">Blouses</a></li>
                            <li role="presentation"><a href="#party" role="tab" id="party-tab" data-toggle="tab" aria-controls="party">Party Frocks</a></li>
                        </ul>

                        <div class="design" >
                            <a href=""><button class="addbtn">Add New Designs</button></a>
                        </div>


                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="sarees" aria-labelledby="home-tab">
                                <div class="col-md-3 w3layouts_gallery_grid">
                                    <a  href="photo/a1.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a1.jpg" alt=" " class="img-responsive" />
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 01</h4>
                                                    <p>Price : Rs 900</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 w3layouts_gallery_grid">
                                    <a  href="photo/a2.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a2.jpg" alt=" " class="img-responsive" />
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 02</h4>
                                                    <p>Price : Rs 800</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 w3layouts_gallery_grid">
                                    <a  href="photo/a3.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a3.jpg" alt=" " class="img-responsive" />
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 03</h4>
                                                    <p>Price : Rs 1200</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 w3layouts_gallery_grid">
                                    <a  href="photo/a4.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a4.jpg"  alt=" " class="img-responsive" />
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 04</h4>
                                                    <p>Price : Rs 1100</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 w3layouts_gallery_grid">
                                    <a  href="photo/a5.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a5.jpg" alt=" " class="img-responsive" />
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 05</h4>
                                                    <p>Price : Rs 1000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 w3layouts_gallery_grid">
                                    <a  href="photo/a6.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a6.jpg" alt=" " class="img-responsive" />
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 06</h4>
                                                    <p>Price : Rs 950</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 w3layouts_gallery_grid">
                                    <a  href="photo/a7.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a7.jpg" alt=" " class="img-responsive" />
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 07</h4>
                                                    <p>Price : Rs 1250</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 w3layouts_gallery_grid">
                                    <a  href="photo/a8.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a8.jpg" alt=" " class="img-responsive" />
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 08</h4>
                                                    <p>Price : Rs 1500</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="frocks" aria-labelledby="Alterations-tab">
                                <div class="col-md-2 w3layouts_gallery_grid">
                                    <a href="photo/a9.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a9.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 09</h4>
                                                    <p>Price : Rs 1500</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2 w3layouts_gallery_grid">
                                    <a  href="photo/a10.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a10.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 10</h4>
                                                    <p>Price : Rs 900</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2 w3layouts_gallery_grid">
                                    <a  href="photo/a11.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a11.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 11</h4>
                                                    <p>Price : Rs 1000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2 w3layouts_gallery_grid">
                                    <a  href="photo/a12.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a12.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 12</h4>
                                                    <p>Price : Rs 1250</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2 w3layouts_gallery_grid">
                                    <a  href="photo/a13.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a13.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 13</h4>
                                                    <p>Price : Rs 2000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2 w3layouts_gallery_grid">
                                    <a href="photo/a14.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a14.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 14</h4>
                                                    <p>Price : Rs 1700</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="blouses" aria-labelledby="Mending-tab">
                                <div class="col-md-2 w3layouts_gallery_grid">
                                    <a href="photo/a15.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a15.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 15</h4>
                                                    <p>Price : Rs 1200</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2 w3layouts_gallery_grid">
                                    <a  href="photo/a16.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a16.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 16</h4>
                                                    <p>Price : Rs 1300</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2 w3layouts_gallery_grid">
                                    <a  href="photo/a17.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a17.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 17</h4>
                                                    <p>Price : Rs 1500</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2 w3layouts_gallery_grid">
                                    <a  href="photo/a18.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a18.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 18</h4>
                                                    <p>Price : Rs 1400</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2 w3layouts_gallery_grid">
                                    <a  href="photo/a19.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a19.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 19</h4>
                                                    <p>Price : Rs 1500</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2 w3layouts_gallery_grid">
                                    <a href="photo/a20.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a20.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 20</h4>
                                                    <p>Price : Rs 1000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2 w3layouts_gallery_grid">
                                    <a href="photo/a21.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a21.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 21</h4>
                                                    <p>Price : Rs 950</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2 w3layouts_gallery_grid">
                                    <a  href="photo/a22.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a22.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 22</h4>
                                                    <p>Price : Rs 1050</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2 w3layouts_gallery_grid">
                                    <a  href="photo/a23.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a23.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 23</h4>
                                                    <p>Price : Rs 1350</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2 w3layouts_gallery_grid">
                                    <a  href="photo/a24.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a24.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 24</h4>
                                                    <p>Price : Rs 950</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2 w3layouts_gallery_grid">
                                    <a  href="photo/a25.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a25.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 25</h4>
                                                    <p>Price : Rs 1300</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2 w3layouts_gallery_grid">
                                    <a href="photo/a26.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a26.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 26</h4>
                                                    <p>Price : Rs 1550</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="party" aria-labelledby="Alterations-tab">
                                <div class="col-md-2 w3layouts_gallery_grid">
                                    <a href="photo/a27.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a27.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 27</h4>
                                                    <p>Price : Rs 3000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2 w3layouts_gallery_grid">
                                    <a  href="photo/a28.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a28.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 28</h4>
                                                    <p>Price : Rs 2900</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2 w3layouts_gallery_grid">
                                    <a  href="photo/a29.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a29.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 29</h4>
                                                    <p>Price : Rs 2800</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2 w3layouts_gallery_grid">
                                    <a  href="photo/a30.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a30.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 30</h4>
                                                    <p>Price : Rs 3300</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2 w3layouts_gallery_grid">
                                    <a  href="photo/a31.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a31.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 31</h4>
                                                    <p>Price : Rs 3500</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-2 w3layouts_gallery_grid">
                                    <a href="photo/a32.jpg">
                                        <div class="w3layouts_team_grid">
                                            <img src="photo/a32.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_team_grid_pos">
                                                <div class="wthree_text">
                                                    <h4>Design Id: 32</h4>
                                                    <p>Price : Rs 4000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">

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
