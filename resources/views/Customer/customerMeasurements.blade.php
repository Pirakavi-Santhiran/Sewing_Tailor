<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .navbar-default {
            background-color: #268ece;
            border-color: #5138e7;
        }
        .rcorners1 {
            border-radius: 5px;
            width: 100%;
            height: 30px;
            border-color: #ccdae7;

        }
    </style>

</head>
<body>

<nav class="navbar navbar-default"  >
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li class="nav-item"><a href="/customerHome" style="color:white"><b>Home</b></a></li>
            <li class="dropdown  active"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white"><b>Order</b><span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="nav-item active"><a href="/customerOrder">Place Order</a></li>
                    <li><a href="/customerAcceptedOrder">Accepted Order</a></li>
                </ul>
            </li>
            <li><a href="/customerMeasurements" style="color:white"><b>Measurements</b></a></li>
            <li><a href="/cusDesign" style="color:white"><b>Design Patterns</b></a></li>
            <li><a href="/customerStateDress" style="color:white"><b>State of dress</b></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/logout"  class="glyphicon glyphicon-log-out" style="color:white"><b>My Profile</b></a></li>
        </ul>
    </div>
</nav>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
        <div class="col-lg-20 col-md-15 pad40">
            <!-- Website Overview -->
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title" align="center"><h3>Measurements Overview</h3></div>
                </div>
            </div>

            <!--section class="content"-->
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table thread-dark">
                        <thead class="thead-dark">

                        <th>Customer ID</th>
                        <th>Height</th>
                        <th>Weight</th>
                        <th>Chest</th>
                        <th>Waist</th>
                        <th>Hip</th>

                        </thead>
                        @foreach($tasks as $task)
                            <tr>
                                <td>{{$task->id}}</td>
                                <td>{{$task->height}}</td>
                                <td>{{$task->weight}}</td>
                                <td>{{$task->chest}}</td>
                                <td>{{$task->waist}}</td>
                                <td>{{$task->hip}}</td>


                            </tr>

                        @endforeach
                    </table>

                </div>
            </div>
        </div>


    </section>


    <!-- /.content -->
</div>

</body>
</html>