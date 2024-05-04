<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function User()
    {
        return $this->hasMany(User::class);
    }
    public function ProductOrderDetails()
    {
        return $this->belongsTo(PODetail::class);
    }
}
