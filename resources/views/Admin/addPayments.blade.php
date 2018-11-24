<html>
<head>
    <title>Payments</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel = "stylesheet">

</head>
<body>

<a href="/admin/receptionist" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Back</a>
<div class="container">

    <div class = "card-panel grey lighten-2"><h3 style="text-align: center ;font-family:century gothic">Add Customers Payment</h3></div>


    <div class = "card-panel center">
        <div class="row">


            <form class="col s12" method="POST" action="{{url('admin/dashboard/receptionist')}}">

                @csrf
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif

                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="Customer Id" type="text"  placeholder="Enter Customer Id" class="form-control{{ $errors->has('customer_id') ? ' is-invalid' : '' }}" name="customer_id" value="{{ old('customer_id') }}" required autofocus>

                        <label for="customer_id">Customer Id</label>
                        @if($errors->has('customer_id'))
                            <span class="form-text invalid-feedback" style="color: red">{{$errors->first('customer_id')}}</span>
                        @endif

                    </div>
                    <div class="input-field col s6 ">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="order_id" type="text"  placeholder="Enter Order Id" class="form-control{{ $errors->has('order_id') ? ' is-invalid' : '' }}" name="order_id" value="{{ old('order_id') }}" required autofocus>

                        <label for="order_id">Order Id</label>
                        @if($errors->has('order_id'))
                            <span class="form-text invalid-feedback" style="color: red">{{$errors->first('order_id')}}</span>
                        @endif

                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">contact_mail</i>
                        <input id="nic" type="text"  placeholder="Enter nic" class="form-control{{ $errors->has('nic') ? ' is-invalid' : '' }}" name="nic" value="{{ old('nic') }}" required autofocus>

                        <label for="nic">Total Amount</label>
                        @if($errors->has('nic'))
                            <span class="form-text invalid-feedback" style="color: red">{{$errors->first('nic')}}</span>
                        @endif
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">date_range</i>
                        <input id="dob" type="date"  placeholder="Enter DOB" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{ old('dob') }}" required autofocus>

                        <label for="dob">Payment Date</label>
                        @if($errors->has('dob'))
                            <span class="form-text invalid-feedback" style="color: red">{{$errors->first('dob')}}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">home</i>
                        <input id="address" type="text"  placeholder="Enter Address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>

                        <label for="address">Amount Paid</label>
                        @if($errors->has('address'))
                            <span class="form-text invalid-feedback" style="color: red">{{$errors->first('address')}}</span>
                        @endif
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">phone</i>
                        <input id="tpno" type="tel"  placeholder="Enter TP no" class="form-control{{ $errors->has('tpno') ? ' is-invalid' : '' }}" name="tpno" value="{{ old('tpno') }}" required autofocus>

                        <label for="tpno">Due Amount</label>
                        @if($errors->has('tpno'))
                            <span class="form-text  invalid-feedback" style="color: red">{{$errors->first('tpno')}}</span>
                        @endif
                    </div>
                </div>
                <input type="submit" name="submit" class="btn blue right" value="Save">

            </form>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
</body>
</html>
