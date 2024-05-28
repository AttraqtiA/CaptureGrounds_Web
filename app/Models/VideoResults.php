<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VideoResults extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $table = 'videoresults';

    public function Projects() {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }
}
