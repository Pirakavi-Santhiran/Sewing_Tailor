<html>
<head>
    <title>Payments</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel = "stylesheet">

</head>
<body>

<a href="/adminPayments" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Back</a>
<div class="container">

    <div class = "card-panel grey lighten-2"><h3 style="text-align: center ;font-family:century gothic">Add Customers Payment</h3></div>


    <div class = "card-panel center">
        <div class="row">


            <form name= "addForm" class="col s12" method="POST" action="{{url('/adminPayments')}}">

                @csrf
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif

                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="Customer Id" type="number"  placeholder="Enter Customer Id" class="form-control{{ $errors->has('customer_id') ? ' is-invalid' : '' }}" name="customer_id" value="{{ old('customer_id') }}" required autofocus>

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
                        <i class="material-icons prefix">payment</i>
                        <input id="total_amount" type="number"  placeholder="Enter Total Amount" class="form-control{{ $errors->has('total_amount') ? ' is-invalid' : '' }}" name="total_amount" value="{{ old('total_amount') }}" required autofocus>

                        <label for="total_amount">Total Amount</label>
                        @if($errors->has('total_amount'))
                            <span class="form-text invalid-feedback" style="color: red">{{$errors->first('total_amount')}}</span>
                        @endif
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">date_range</i>
                        <input id="payment_date" type="date"  placeholder="Enter Payment Date" class="form-control{{ $errors->has('payment_date') ? ' is-invalid' : '' }}" name="payment_date" value="{{ old('payment_date') }}" required autofocus>

                        <label for="payment_date">Payment Date</label>
                        @if($errors->has('payment_date'))
                            <span class="form-text invalid-feedback" style="color: red">{{$errors->first('payment_date')}}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">payment</i>
                        <input id="amount_paid" type="number"  placeholder="Enter Paid Amount" class="form-control{{ $errors->has('amount_paid') ? ' is-invalid' : '' }}" name="amount_paid" value="{{ old('amount_paid') }}" required autofocus>

                        <label for="amount_paid">Amount Paid</label>
                        @if($errors->has('amount_paid'))
                            <span class="form-text invalid-feedback" style="color: red">{{$errors->first('amount_paid')}}</span>
                        @endif
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">payment</i>
                        <input id="due_amount" type="number"  placeholder="Due Amount" onclick="calculateDue()" class="form-control{{ $errors->has('due_amount') ? ' is-invalid' : '' }}" name="due_amount" value="{{ old('due_amount') }}" required autofocus>

                        <label for="due_amount">Due Amount</label>
                        @if($errors->has('due_amount'))
                            <span class="form-text  invalid-feedback" style="color: red">{{$errors->first('due_amount')}}</span>
                        @endif
                    </div>
                </div>
                <input type="submit" name="submit" class="btn blue right" value="Save">

            </form>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script language="JavaScript">
    <!--
    function calculateDue() {
        var tot = document.addForm.total_amount.value
        var paid = document.addForm.amount_paid.value
        var due = tot-paid;
        document.addForm.due_amount.value = due;

    }
    //-->
</script>
</body>
</html>
