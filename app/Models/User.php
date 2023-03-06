<?php

namespace App\Models;
// use App\Models\pointage;
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

    protected $with = [
        'role'
    ];

    public function emplois()
    {
        return $this->hasMany(emploi::class,'emploi_id');
    }
   
    public function equipes()
    {
        return $this->hasMany(equipe::class, 'equipe_id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
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

    public function isAdmin(): bool
    {
        if ($this->role) {
            return isset($this->role->nom) && $this->role->nom == 'admin';
        }

        return false;
    }
    public function pointages()
    {
        return $this->hasMany(pointages::class) ;
    }
    public function scopeCurrentMonthPointage()
    {
        $total = 0;
        $pointages = $this->pointage()->whereMonth('created_at', now())->get();

        foreach ($pointages as $key => $pointage) {
          
            $total += $pointages->timing;
              dd( $this->$pointages);
            
        }

        return $total;
    }

  
}
