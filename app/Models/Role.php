<?php

namespace App\Models;
//use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'nom',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'user_id');
    }
}
