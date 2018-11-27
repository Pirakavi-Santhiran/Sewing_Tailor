<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
<a href="/adminOrders" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Back</a>
        <div class="container col-sm-12" id="mainform">
            <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-5 col-md-offset-3 col-sm-8 col-sm-offset-2">

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title"><h1><center><font face="verdana" color="#00008B">Create Order</font></center></h1></div>
                    </div>
                    <div class="panel-body" >
                        <form class="form-horizontal" role="form" method="post" action="/updateorders" onSubmit="return checkblank(this);">
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
                                <div class="col-md-6">
                                    <input type="hidden" class="form-control" name="id" value="{{$taskdata->id}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cus_id" class="col-md-3 control-label">Customer ID</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="reg_id" value="{{$taskdata->reg_id}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="design_id" class="col-md-3 control-label">Design ID</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="design_id" value="{{$taskdata->deisgn_id}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dress_color" class="col-md-3 control-label">Dress Color</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="dress_color"value="{{$taskdata->color}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Category" class="col-md-3 control-label">Category</label>
                                <div class="col-md-6">
                                <input type="text" class="form-control" name="category"value="{{$taskdata->category}}">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="comments" class="col-md-3 control-label" >Comments</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="comment" value="{{$taskdata->comments}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="date" class="col-md-3 control-label" >Date</label>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="date" value="{{$taskdata->date}}">
                                </div>
                            </div>


                            <div class="form-group">
                                <!-- Button -->
                                <div class="col-md-offset-4 col-md-9">
                                    <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Update</button>
                                    <button id="btn-signup" type="button" class="btn btn-warning><i class="icon-hand-left"></i> &nbsp Cancel</button>

                                </div>
                            </div>

                        </form>
                    </div>
                </div>


            </div>
        </div>

    </body>
</html>
