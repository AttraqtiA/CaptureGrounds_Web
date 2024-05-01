<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceOrder extends Model
{
    use HasFactory;
    protected $fillable = [
        'so_id',
        serviceType_id,
        'startingDate',
        'endingDate',
        'totalPayment',
        'note',
        'acceptedStatus',
    ];
}
