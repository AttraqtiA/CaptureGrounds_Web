<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function ServiceOrders()
    {
        return $this->belongsTo(ServiceOrder::class, 'serviceOrder_id', 'id');
    }

    public function Users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function PhotoResults()
    {
        return $this->hasMany(PhotoResults::class, 'project_id', 'id');
    }

    public function VideoResults()
    {
        return $this->hasMany(VideoResults::class, 'project_id', 'id');
    }
}
