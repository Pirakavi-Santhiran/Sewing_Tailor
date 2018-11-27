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
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white"><b>Order</b><span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/customerOrder">Place Order</a></li>
                    <li><a href="/customerAcceptedOrder">Accepted Order</a></li>
                </ul>
            </li>
            <li><a href="#" style="color:white"><b>Measurements</b></a></li>
            <li><a href="/cusDesign" style="color:white"><b>Design Patterns</b></a></li>
            <li><a href="/customerStateDress" style="color:white"><b>State of dress</b></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/logout"  class="glyphicon glyphicon-log-out" style="color:white"><b>My Profile</b></a></li>
        </ul>
    </div>
</nav>
<div class="container col-sm-12" id="mainform">
    <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-5 col-md-offset-3 col-sm-8 col-sm-offset-2">

        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title"><h1><center><font face="verdana" color="#00008B">Create Order</font></center></h1></div>
            </div>
            <div class="panel-body" >
                <form class="form-horizontal" role="form" method="post" action="/saveorder" onSubmit="return checkblank(this);">
                {{csrf_field()}}
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{$error}}
                        </div>

                    @endforeach
                    @if(session()->has('notif'))
                        <div class="row">
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>Notification</strong>{{session()->get('notif')}}
                            </div>
                        </div>
                    @endif
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
                                                <option value="Frock">Frocks</option>
                                                <option value="Blouse">Blouses</option>
                                                <option value="Saree">Party frocks</option>
                                                <option value="Saree Jacket">Saree Jackets</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="comments" class="col-md-3 control-label" >Comments</label>
                                            <div class="col-md-6">
                                        <input type="text" class="form-control" name="comment">
                                            </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="date" class="col-md-3 control-label" >Date</label>
                                        <div class="col-md-6">
                                            <input type="date" class="form-control" name="date">
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
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b><a href="http://www.fb.com/softsed">Peiris Fashion House</a></b>
    </div>
</footer>


</body>
</html>
