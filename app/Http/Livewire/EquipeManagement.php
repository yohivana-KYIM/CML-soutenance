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
    public $loading = true;

    public function init()
    {
        sleep(3);
        $this->loading = false;
    }

    public function render()
    {
        if ($this->loading) {
            $data = ['equipes' => []];
            $this->users = [];
            $this->init();
        } else {
            $data = ['equipes' =>  equipe::all()];
            $this->users = User::all();
        }

        return view('livewire.equipe-management', $data);
    }

    public function store()
    {
        $this->loading = true;
        equipe::create([
            'categorie' => $this->categorie,
            'user_id' => $this->user_id,
        ]);

        return redirect(route('equipe-management'))->with('status', 'Equipe successfully created.');
    }

    public function delete($id)
    {
        $this->loading = true;
        Log::error('delete ' . $id);
//        if ($id) {
//            equipe::where('id',$id)->delete();
//        }
    }
}
