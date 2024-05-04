<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserField extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Field()
{
    return $this->hasMany(Field::class);
}

public function User()
{
    return $this->hasMany(Field::class);
}

}

