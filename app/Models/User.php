<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\CanResetPassword;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;



   protected $fillable = [
    'name',
    'email',
     'password',
     'fonction',
     'user_id',
     'role_id'
    ];

    public function emplois()
    {
        return $this->hasMany(emploi::class,'emploi_id');
    }
    public function pointages()
    {
        return $this->hasMany(pointages::class) ;
    }
    public function equipes()
    {
        return $this->hasMany(equipe::class, 'equipe_id');
    }
  
   
    public function role()
    {
        return $this->belongsTo(role::class, 'role_id');
    }
   
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
    ];
}
