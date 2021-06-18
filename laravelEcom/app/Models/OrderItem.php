<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected function product(){
        return $this->belongsTo(product::class);
    }
    protected function order(){
        return $this->belongsTo(order::class);
    }
}
