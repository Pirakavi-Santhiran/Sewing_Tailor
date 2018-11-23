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
    </style>
</head>
<body>

<ul>
    <li><a href="/customerOrder">Order</a></li>
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



</body>
</html>
