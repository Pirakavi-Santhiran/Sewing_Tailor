<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/new.css">

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
            <li class="nav-item active"><a href="customerHome" style="color:white"><b>Home</b></a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white"><b>Order</b><span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/customerOrder">Place Order</a></li>
                    <li><a href="/customerAcceptedOrder">Accepted Order</a></li>
                </ul>
            </li>
            <li class="nav-item "><a href="#" style="color:white"><b>Measurements</b></a></li>
            <li class="nav-item "><a href="/cusDesign" style="color:white"><b>Design Patterns</b></a></li>
            <li class="nav-item"><a href="/customerStateDress" style="color:white"><b>State of dress</b></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/logout"  class="glyphicon glyphicon-log-out" style="color:white"><b>My Profile</b></a></li>
        </ul>
    </div>
</nav>



<img src="images/c1.jpg" />
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b><a href="http://www.fb.com/softsed">Peiris Fashion House</a></b>
    </div>
</footer>

</body>
</html>
