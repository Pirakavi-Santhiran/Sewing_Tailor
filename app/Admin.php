<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['id','name','user_name', 'password','email'];
}
