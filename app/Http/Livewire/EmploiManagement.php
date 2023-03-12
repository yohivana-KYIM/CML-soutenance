<?php

namespace App\Http\Livewire;
use App\Models\equipe;
use App\Models\legende;
use Livewire\WithPagination;

use App\Models\User;

use App\Models\emploi;
use Livewire\Component;

class EmploiManagement extends Component
{
    use WithPagination;

    public $users;
    public $legendes;
    public $legende_id;
    public $equipe_id;
    public $user_id;
    public $equipes ;
    
    public $search = null;
    public $loading = true;

    public function init()
    {
        $this->loading=false;
    }

    public function render()
    {
        if ($this->loading) {
            $data=['emplois'=>[]];
            $this->users =[];
        } else {
            $query=emploi::query();
            if ($this->search) {
                $query=$query->where('nom_emploi', 'like', '%' . $this->search . '%')
                    ->orWhere('date_debut', 'like', '%' . $this->search . '%')
                    ->orderBy('id', 'ASC');
            }

            $data=['emplois'=>$query->paginate(1)];
            $this->updateData();
        }

        return view('livewire.emploi-management', $data);
    }

    public function mount()
    {
        $this->updateData();
    }

    public function updateData()
    {
        $this->equipes=equipe::all();
        $this->legendes =legende::all();
        $this->users=User::all();
    }

    public function store()
    {
        $this->validate();
        emploi::create([
            'nom_emploi'=>$this->nom_emploi,
            'date_debut'=>$this->date_debut,
            'date_fin'=>$this->date_fin,
            'legende_id'=>$this->legende_id,
            'equipe_id'=>$this->equipe_id,
            'user_id'=>$this->user_id,
        ]);

        return redirect(route('emploi-management'))->with('status', 'Emploi successfully created.');
    }

    public function delete($id)
    {
        $this->loading=true;
        $this->emit('loading');
        if ($id) {
          emploi::where('id', $id)->delete();
          //  $this->emplois = emploi::all();
        }
    }
}
