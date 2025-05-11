<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'order_id',
        'payment_method',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

}
    