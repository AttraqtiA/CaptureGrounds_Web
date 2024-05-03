<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PODetail extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Products()
{
    return $this->hasMany(Product::class);
}

public function Order()
{
    return $this->hasMany(Order::class);
}
}
