<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceOrder extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Services()
    {
        return $this->belongsTo(Service::class, 'services_id', 'id');
    }

    public function Projects()
    {
        return $this->hasOne(Project::class, 'serviceOrder_id', 'id');
    }

    public function Users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function Reviews(){
        return $this->hasMany(Review::class, 'serveOrder_id', 'id');
    }
}
