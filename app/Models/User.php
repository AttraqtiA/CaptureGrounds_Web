<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function Projects()
    {
        return $this->belongsTo(Project::class);
    }
    public function ServiceOrder()
    {
        return $this->belongsTo(ServiceOrder::class);
    }
    public function Service()
    {
        return $this->belongsTo(Service::class);
    }
    public function Order()
    {
        return $this->belongsTo(Order::class);
    }
    public function Posts()
    {
        return $this->belongsTo(Post::class);
    }
    public function UserField()
    {
        return $this->belongsTo(UserField::class);
    }
}
