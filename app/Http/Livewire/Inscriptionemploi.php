<?php

namespace App\Http\Livewire;

use App\Models\equipe;
use App\Models\User;

use App\Models\legende;

use Livewire\WithPagination;
use App\Models\emploi;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\Types\This;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Inscriptionemploi extends Component
{
    use WithPagination;

    public $nom_emploi;
    public $date_debut;
    public $date_fin;
    public $emplois;
    public $users;
    public $legende;
    public $legendes;
    public $legende_id;
    public $legende_libelle;
    public $legende_description;
    public $equipe_id;
    public $user_id;
    public $equipes ;
    public $search = null;

    public function render()
    {
        $this->emplois = emploi::all();
        $this->equipes = equipe::all();
        $this->legendes = legende::all();
        $this->users = User::all();
        return view('livewire.inscriptionemploi');
    }

    public function store()
    {
        $this->validate([
            'nom_emploi' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
//            'equipe_id'=> 'required',
           // 'legende_id' => 'required',
            'user_id'=> 'required',
        ]);

        emploi::create([
            'nom_emploi' => $this->nom_emploi,
            'date_debut' => $this->date_debut,
            'date_fin' => $this->date_fin,
            'equipe_id' => $this->equipe_id,
            'legende_id' => $this->legende_id,
            'user_id' => $this->user_id,
        ]);

        return redirect('/emploi-management');
    }
}
