<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentRequest extends Model
{
    use HasFactory;

    protected $table = 'Payment_Requests';

    protected $fillable = [
        'Full_Name', 'Email', 'Phone_No', 'TRC20_ID', 'Recharge_Amount', 'image','user_id'
    ];
}
