<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class pointage extends Model
{

    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'signature',
        'heure_A',
        'heure_D',
    ];

    protected $casts = [
        'heure_D' => 'datetime',
        'heure_A' => 'datetime',
    ];
     /**
     * Get the comments for the blog post.
     */

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function timing()
    {
        return $this->heure_D->diffInHours($this->heure_A);
    }
   

  
}
