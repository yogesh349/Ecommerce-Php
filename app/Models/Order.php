<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'fname',
        'lname',
        'email',
        'phone',
        'address1',
        'address2',
        'country',
        'province',
        'city',
        'pincode',
        'status',
        'message',
        'tracking_no',
    ];
}
