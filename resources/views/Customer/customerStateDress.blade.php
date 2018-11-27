<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/css/table2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
            <li class="nav-item"><a href="/customerHome" style="color:white"><b>Home</b></a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white"><b>Order</b><span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/customerOrder">Place Order</a></li>
                    <li><a href="/customerAcceptedOrder">Accepted Order</a></li>
                </ul>
            </li>
            <li><a href="/customerMeasurements" style="color:white"><b>Measurements</b></a></li>
            <li><a href="/cusDesign" style="color:white"><b>Design Patterns</b></a></li>
            <li  class="nav-item active"><a href="/customerStateDress" style="color:white"><b>State of dress</b></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/logout"  class="glyphicon glyphicon-log-out" style="color:white"><b>My Profile</b></a></li>
        </ul>
    </div>
</nav>

<section class="content">
    <div class="col-lg-20 col-md-15 pad40">
        <!-- Website Overview -->
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title" align="center"><h3> Progress of Orders</h3></div>
            </div>
        </div>

        <!--section class="content"-->
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="blueTable">
                    <thead>

        <th>Order ID</th>
        <th>Customer ID</th>
        <th>Design ID</th>
        <th>Color</th>
        <th>Category</th>
        <th>Comments</th>
        <th>Date</th>
        <th>State</th>
                    </thead>
                    <tbody>
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
                    @if($task->is_completed)
                        <button class="btn btn-success">Completed</button>
                    @else
                        <button class="btn btn-warning">Not Completed</button>
                    @endif
                </td>

            </tr>
        @endforeach
                    </tbody>
    </table>
            </div>
        </div>
    </div>

</section>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b><a href="http://www.fb.com/softsed">Peiris Fashion House</a></b>
    </div>
</footer>
</body>
</html>
