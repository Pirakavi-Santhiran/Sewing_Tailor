<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="fonts/ionicons.min.css">


    <style>
        .navbar-default {
            background-color: #268ece;
            border-color: #5138e7;
        }
    </style>

</head>
<body>

<nav class="navbar navbar-default"  >
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li class="nav-item "><a href="/customerHome" style="color:white"><b>Home</b></a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white"><b>Order</b><span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/customerOrder">Place Order</a></li>
                    <li><a href="/customerAcceptedOrder">Accepted Order</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="/customerMeasurements" style="color:white"><b>Measurements</b></a></li>
            <li class="nav-item active"><a href="/cusDesign" style="color:white"><b>Design Patterns</b></a></li>
            <li class="nav-item"><a href="/customerStateDress" style="color:white"><b>State of dress</b></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/logout"  class="glyphicon glyphicon-log-out" style="color:white"><b>My Profile</b></a></li>
        </ul>
    </div>
</nav>

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


</body>
</html>
