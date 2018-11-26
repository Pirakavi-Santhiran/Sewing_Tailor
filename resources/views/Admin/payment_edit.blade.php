<html>
<head>
    <title>Employees</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<a href="/adminPayments" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Back</a>
<div class="container">
    <div class = "card-panel grey lighten-2"><h3 style="text-align: center ;font-family:century gothic">Customers Payment Edit</h3></div>


    <div class = "card-panel center">
        <div class="row">
            <form name="editForm" class="col s12" method="POST" action="{{ route('adminPayments.update',$payments->order_id) }}">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="customer_id " type="number" class="validate" name="name" value="{{ $payments->customer_id }}">
                        <label for="customer_id " >Customer Id</label>
                        @if($errors->has('customer_id '))
                            <span class="form-text invalid-feedback"  style="color: red">{{$errors->first('customer_id ')}}</span>
                        @endif
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="order_id" type="number" class="validate" name="order_id" value="{{ $payments->order_id }}">
                        <label for="order_id">Order Id</label>
                        @if($errors->has('order_id'))
                            <span class="form-text invalid-feedback"  style="color: red">{{$errors->first('order_id')}}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">payment</i>
                        <input id="total_amount" type="number" class="validate" name="total_amount" value="{{ $payments->total_amount }}">
                        <label for="total_amount">Total Amount</label>
                        @if($errors->has('total_amount'))
                            <span class="form-text invalid-feedback"  style="color: red">{{$errors->first('total_amount')}}</span>
                        @endif
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">date_range</i>
                        <input id="payment_date" type="date" class="validate" name="payment_date" value="{{ $payments->payment_date }}">
                        <label for="payment_date">Payment date</label>
                        @if($errors->has('payment_date'))
                            <span class="form-text invalid-feedback"  style="color: red">{{$errors->first('payment_date')}}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">payment</i>
                        <input id="amount_paid " type="number" class="validate" name="amount_paid" value="{{ $payments->amount_paid }}">
                        <label for="amount_paid ">Paid Amount</label>
                        @if($errors->has('amount_paid '))
                            <span class="form-text invalid-feedback"  style="color: red">{{$errors->first('amount_paid ')}}</span>
                        @endif
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">payment</i>
                        <input id="due_amount" type="number" onclick="calcDue()" class="validate" name="due_amount" >
                        <label for="due_amount">Due Amount</label>
                        @if($errors->has('due_amount'))
                            <span class="form-text invalid-feedback"  style="color: red">{{$errors->first('due_amount')}}</span>
                        @endif
                    </div>
                </div>
                <input type="submit" name="submit" class="btn blue right" value="Update">
            </form>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script language="JavaScript">
    <!--
    function calcDue() {
        var tot = document.editForm.total_amount.value
        var paid = document.editForm.amount_paid.value
        var due = tot-paid;
        document.editForm.due_amount.value = due;

    }
    //-->
</script>

</body>
</html>
