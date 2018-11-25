<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $primaryKey = 'order_id';
    protected $fillable = ['customer_id','order_id','total_amount','payment_date','amount_paid','due_amount'];
}
