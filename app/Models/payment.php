<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $fillable = ['paycustomer', 'invoices_id', 'transaction_id', 'payamount', 'method'];
}
