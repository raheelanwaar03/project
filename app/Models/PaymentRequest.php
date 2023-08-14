<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentRequest extends Model
{
    use HasFactory;

    protected $table = 'payment_requests';

    protected $fillable = [
        'name', 'email', 'phone', 'payment_id', 'payment_amount', 'file','user_id'
    ];
}
