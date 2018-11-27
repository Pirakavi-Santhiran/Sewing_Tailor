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
<a href="/adminMeasurements" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Back</a>
<div class="container col-sm-12" id="mainform">
    <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-5 col-md-offset-3 col-sm-8 col-sm-offset-2">

        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title"><h1><center><font face="verdana" color="#00008B">Add Measurements</font></center></h1></div>
            </div>
            <div class="panel-body" >
                <form class="form-horizontal" role="form" method="post" action="/updatemeasures" onSubmit="return checkblank(this);">
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
                        <label for="id" class="col-md-3 control-label">Cutomer ID</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="id" value="{{$taskdata->id}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="height" class="col-md-3 control-label">Height</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="height" value="{{$taskdata->height}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="weight" class="col-md-3 control-label">Weight</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="weight" value="{{$taskdata->weight}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="chest" class="col-md-3 control-label">Chest</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="chest"value="{{$taskdata->chest}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="waist" class="col-md-3 control-label">Waist</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="waist"value="{{$taskdata->waist}}">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="hip" class="col-md-3 control-label" >Hip</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="hip" value="{{$taskdata->hip}}">
                        </div>
                    </div>


                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-md-offset-4 col-md-9">
                            <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Update</button>
                            <button id="btn-signup" type="button" class="btn btn-warning"><i class="icon-hand-left"></i> &nbsp Cancel</button>

                        </div>
                    </div>

                </form>
            </div>
        </div>


    </div>
</div>

</body>
</html>
