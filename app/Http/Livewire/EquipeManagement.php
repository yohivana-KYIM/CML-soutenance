<?php

namespace App\Http\Livewire;

use App\Models\equipe;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class EquipeManagement extends Component
{
    use WithPagination;

    public $users;
    public $user_id;
    public $search = null;
    public $loading = true;
    private $data = [];

    public function init()
    {
        $this->loading = false;
    }

    public function render()
    {
        // Initialisation ici parce que je nai pas cree de function a executer apres l'evenement livewire:load
        // comme dans la vue du composant emploi management
        $this->init();
        if ($this->loading) {
            $this->data = ['equipes' => []];
            $this->users = [];
        }

            else {
    // $query = equipe::query();
    // if ($this->search) {
    //     $query = $query->where('categorie', 'like', '%' . $this->search . '%')
    //         ->orWhere('categorie', 'like', '%' . $this->search . '%')
    //         ->orderBy('id', 'ASC');
    // }

    $this->data = ['equipes' =>  equipe::query()->paginate(1)];
    $this->users = User::all();
}

        return view('livewire.equipe-management', $this->data);
    }

    public function store()
    {
        // cette fonction n'est pas appelle
//        $this->loading = true;
        equipe::create([
            'categorie' => $this->categorie,
            'user_id' => $this->user_id,
        ]);

        return redirect(route('equipe-management'))->with('status', 'Equipe successfully created.');
    }

    public function delete($id)
    {
//        $this->loading = true;
        if ($id) {
            equipe::where('id',$id)->delete();

            // J'ai transforme $this->data en private parce que je veux faire recharger le render
            // a chaque foi que $this->data va changer
            // J'aurai pu cree un ecouteur a un event que j'allais emettre ici, et qui allait recharger le render,
            // mais il faut toujours une variable qui va changer
            // Et on a besoin du javascript pour faire un setTimeout qui va s'executer apres un nombre de temps
            $this->data = ['equipes' => equipe::query()->paginate(10)];
        }
    }
}
