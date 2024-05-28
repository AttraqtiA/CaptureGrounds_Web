<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function ServiceOrders()
    {
        return $this->hasMany(ServiceOrder::class, 'services_id', 'id');
    }
}
