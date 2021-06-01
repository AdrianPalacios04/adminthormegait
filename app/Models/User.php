<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $connection = 'mysql';
    protected $table= "users";
    protected $fillable = [
        'username',
        'name',
        'lastname',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeClient($query)
    {
        return $query->where('role','acertijero');
    }
    public function Acertijo()
    {
        return $this->hasMany(Acertijo::class,'user_id');
    }
    public function Paga()
    {
        return $this->hasMany(ThorPaga::class);
    }
    public function Ticket()
    {
        return $this->hasMany(ThorTicket::class);
    }
}