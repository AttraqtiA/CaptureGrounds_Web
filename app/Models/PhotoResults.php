<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PhotoResults extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'PhotoResult';

    public function Projects() {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }
}
