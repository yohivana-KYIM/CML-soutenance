<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class legende extends Model
{
    use HasFactory;
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [

        'description',
        'libelle',


    ];
    public function emploi ()
    {
        return $this->hasMany(emploi ::class);
    }


}
