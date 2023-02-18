<?php

namespace App\Http\Livewire;
use App\Models\User;

use App\Models\role ;
use Livewire\Component;

class Inscriptionrole extends Component
{
  



    public $nom;
    public $user_id;
    public $roles ;
    public $users;
    public $state = [];
    public $equipe;
    public $updateNew=false;

    public $updateMode = false;

//insertion
public function render()

{
    $this->roles=role::all();
         $this->users=User::all();
         
         return view('livewire.inscriptionrole');
}

public function store()
{
    $this->validate([
        'nom' => 'required',
   'user_id'=> 'required',
    ]);
    $role = role::create([
        'nom' => $this->nom,
'user_id' => $this->user_id,

  ]);



    return redirect('/role-management');
}
}
