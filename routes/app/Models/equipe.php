<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use App\Models\User;
use Illuminate\Database\Eloquent\Model;
class equipe extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'categorie',
        'user_id',
    ];
       /**
     * Get the comments for the blog post.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function emploi ()
    {
        return $this->hasMany(emploi ::class);
    }


}
