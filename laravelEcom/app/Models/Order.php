<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'order_status',
        'sub_total',
        'discount',
        'shipping_price',
        'total_price',
        'shipping_address'
    ];
}
