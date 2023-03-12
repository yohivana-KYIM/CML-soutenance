<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\equipe;
use App\Models\User;

class Inscriptionequipe extends Component
{
    public $categorie;
    public $user_id;
    public $equipes ;
    public $users;
    public $equipe;

    public function render()
    {
        $this->users = User::all();
        return view('livewire.inscriptionequipe');
    }

    public function store()
    {
        $this->validate([
            'categorie' => 'required',
            'user_id'=> 'required',
        ]);

        equipe::create([
            'categorie' => $this->categorie,
            'user_id' => $this->user_id,
        ]);

        return redirect('/equipe-management');
    }
}
