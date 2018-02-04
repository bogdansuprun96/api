<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplyOrder extends Model
{
    protected $fillable = [ 'order_id', 'user_id', 'money', 'volume'];
}