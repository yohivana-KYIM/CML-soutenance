<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;
use App\Models\equipe;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\emploi;
class Editequipe extends Component
{

      public $users ;
    public $updateMode = false;
    public  $equipes;
    public $categorie;
    public $user_id;

    public $state = [];


    public function render()
    {
        $this->equipes=equipe::all();
         $this->users=User::all();

        return view('livewire.editequipe');
    }



    public function mount($id)
    {
        $this->updateMode = true;

        $equipes = equipe::find($id);

        $this->state =[
            'id' =>$equipes->id,
            'categorie' =>$equipes->categorie,
            'user_id' =>$equipes->user_id,

        ];
    }


    public function update()
    {
        $validator = Validator::make($this->state, [
            'categorie' => 'required',
            'user_id' => 'required',

        ])->validate();


        if ($this->state['id']) {
            $equipes = equipe::find($this->state['id']);
            $equipes->update([
                'id' => $this->state['id'],
                'categorie' =>$this->state['categorie'],
                'user_id' => $this->state['user_id'],


            ]);
            $this->updateMode = false;
            $this->reset('state');
            $this->equipes = equipe::all();
            redirect()->intended('/equipe-management');
        }
    }

}

