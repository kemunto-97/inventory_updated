<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoices extends Model
{
    use HasFactory;
    protected $fillable = ['order_id', 'order_receiver_name', 'order_receiver_adress', 'order_total_amount_due', 'order_total_amount_paid'];
}
