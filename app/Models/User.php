<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * class User
 * @property Role $role
 */
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

    /**
     * @return HasMany
     */
    public function emplois(): HasMany
    {
        return $this->hasMany(emploi::class,'emploi_id');
    }

    /**
     * @return HasMany
     */
    public function equipes(): HasMany
    {
        return $this->hasMany(equipe::class, 'equipe_id');
    }

    /**
     * @return BelongsTo
     */
    public function role(): BelongsTo
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

    protected $appends = [
        'current_month_pointage',
    ];

    public function isAdmin(): bool
    {
        if ($this->role) {
            return isset($this->role->nom) && $this->role->nom == 'admin';
        }

        return false;
    }

    /**
     * @return HasMany
     */
    public function pointages(): HasMany
    {
        return $this->hasMany(pointage::class) ;
    }

    /**
     * @return int
     */
    public function getCurrentMonthPointageAttribute(): int
    {
        $total = 0;
        $pointages = $this->pointages()->whereMonth('created_at', '=', now())->get();

        foreach ($pointages as $pointage) {
            $total += $pointage->timing;
        }

        return $total;
    }
}
