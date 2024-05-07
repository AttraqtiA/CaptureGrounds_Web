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
    // protected $guarded = ['id'];
    protected $fillable = ['name'];

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

    public function isAdmin(): bool
    {
        if ($this->role_id == 1) {
            return true;
        }
        return false;
    }

    public function isWorker(): bool
    {
        if ($this->role_id == 2) {
            return true;
        }
        return false;
    }

    public function isCustomer(): bool
    {
        if ($this->role_id == 3) {
            return true;
        }
        return false;
    }

    public function Projects()
    {
        return $this->hasMany(Project::class, 'user_id', 'id');
    }

    public function ServiceOrders()
    {
        return $this->hasMany(ServiceOrder::class, 'user_id', 'id');
    }

    public function Services()
    {
        return $this->hasMany(Service::class, 'user_id', 'id');
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
