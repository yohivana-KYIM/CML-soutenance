<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emploi extends Model
{
    use HasFactory;
    /**
   * The attributes that are mass assignable.
   *
   * @var string[]
   */

  protected $fillable = [
      'user_id',
      'nom_emploi',
      'date_debut',
      'date_fin',
      'legende_id',
      'equipe_id',
      'id',


  ];
     /**
   * Get the comments for the blog post.
   */


  public function legende()
  {
      return $this->belongsTo(legende::class,'legende_id');
  }

  public function user()
  {
      return $this->belongsTo(User::class, 'user_id');
  }
  public function equipe()
  {
      return $this->belongsTo(equipe::class, 'equipe_id');
  }
}
