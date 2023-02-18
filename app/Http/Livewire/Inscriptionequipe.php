<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\equipe;
use App\Models\User;
use App\Models\legende;
use App\Models\emploi;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\Types\This;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
class Inscriptionequipe extends Component
{


    public $categorie;
    public $user_id;
    public $equipes ;
    public $users;
    public $state = [];
    public $equipe;
    public $updateNew=false;

    public $updateMode = false;

//insertion
public function render()

{
    $this->equipes=equipe::all();
         $this->users=User::all();
   return view('livewire.inscriptionequipe');
}

public function store()
{
    $this->validate([
        'categorie' => 'required',
   'user_id'=> 'required',
    ]);
    $equipe = equipe::create([
        'categorie' => $this->categorie,
'user_id' => $this->user_id,

  ]);



    return redirect('/equipe-management');
}



}
