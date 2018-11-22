<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color:#1B90AD;
            size: B4;
        }

        li {
            float: left;
        }
        li a, .dropbtn {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover, .dropdown:hover .dropbtn {
            background-color: #9b74ff;
        }

        li.dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.08);
            z-index: 1;
        }

        .dropdown-content a {
            color: rgba(46, 73, 201, 0.81);
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {background-color: #f1f1f1}

        .dropdown:hover .dropdown-content {
            display: block;
        }
        .rcorners1 {
            border-radius: 5px;
            width: 100%;
            height: 30px;
            border-color:#BDC7C9;

        }
        .rcorners2 {
            border-radius: 5px;
            width: 40%;
            height: 30px;
            border-color:#BDC7C9;

        }
        .rcorners3 {
            border-radius: 5px;
            width: 20%;
            height: 30px;
            border-color:#BDC7C9;

        }
        .rcorners4 {
            border-radius: 5px;
            width: 35%;
            height: 30px;
            border-color:#BDC7C9;

        }
    </style>
</head>
<body>

<ul>
    <li><a href="Order">Order</a></li>
    <li><a href="Measurments">Measurements</a></li>

    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Designs</a>
        <div class="dropdown-content">
            <a href="#">Saree Jackets</a>
            <a href="#">Frocks</a>
            <a href="#">Blouse</a>
        </div>
    </li>
    <li><a href="state">State of dress</a></li>
    <li><a href="Payments">Payment</a></li>
    <li><a href="Profile" float="right">My Profile</a></li>
</ul>
<div class="container col-sm-12" id="mainform">
    <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-5 col-md-offset-3 col-sm-8 col-sm-offset-2">

        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Create Order</div>
            </div>
            <div class="panel-body" >
                <form class="form-horizontal" role="form" method="post" action="#" onSubmit="return checkblank(this);">

                                    <div class="form-group">
                                        <label for="cus_id" class="col-md-3 control-label">Customer ID</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="cus_id">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="design_id" class="col-md-3 control-label">Design ID</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="design_id">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dress_color" class="col-md-3 control-label">Dress Color</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="dress_color">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="Category" class="col-md-3 control-label">Category</label>
                                        <div class="col-md-6">
                                            <select name ="Category" class="rcorners1">
                                                <option value="Frock">Frock</option>
                                                <option value="Blouse">Blouse</option>
                                                <option value="Saree">Saree</option>
                                                <option value="Saree Jacket">Saree Jacket</option>
                                                <option value="Skirts">Skirts</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="university" class="col-md-3 control-label">Required Date</label>
                                        <div class="col-md-6">
                                            <select name= "fmonth" class="rcorners2">
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September">September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                            </select>
                                            <select name = "fday" class="rcorners3">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                            <select name = "fyear" class="rcorners4">

                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <!-- Button -->
                                        <div class="col-md-offset-4 col-md-9">
                                            <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Submit</button>

                                        </div>
                                    </div>

                                </form>
                             </div>
                        </div>


             </div>
        </div>



</body>
</html>
