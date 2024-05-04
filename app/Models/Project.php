<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function ServiceOrder()
    {
        return $this->belongsTo(ServiceOrder::class);
    }
    public function User()
    {
        return $this->hasMany(User::class);
    }
    public function PhotoResults()
    {
        return $this->belongsTo(PhotoResults::class);
    }
    public function VideoResults()
    {
        return $this->belongsTo(VideoResults::class);
    }

}
