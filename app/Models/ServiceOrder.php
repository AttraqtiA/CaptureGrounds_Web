<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceOrder extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Service()
    {
        return $this->hasMany(Service::class);
    }
    public function Projects()
    {
        return $this->belongsTo(Project::class);
    }

    public function User()
    {
        return $this->hasMany(User::class);
    }
}
