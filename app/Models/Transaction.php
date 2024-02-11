<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable =[
        'time',
        'fromAccountId',
        'toAccountId',
        'fromIBAN',
        'toIBAN',
        'fromName',
        'toName',
        'amount',
        'currency',
    ];
}
