<?php

namespace App\Http\Livewire;
use App\Models\User;

use App\Models\role ;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
class Editrole extends Component
{
   


    
    public  $roles ;
    public $state = [];

    public $updateMode = false;

    public function render()
    {
        return view('livewire.editrole');
    }

    public function mount($id)
    {
        $this->updateMode = true;

        $roles = role::find($id);

        $this->state = [
            'id' =>$roles ->id,
            'nom' =>$roles ->nom,
           



        ];
    }


    public function update()
    {
        $validator = Validator::make($this->state, [
            'nom' => 'required',
          

        ])->validate();


        if ($this->state['id']) {
            $roles = role::find($this->state['id']);
            $roles->update([
                'id' => $this->state['id'],
                'nom' => $this->state['nom'],
              


            ]);
            $this->updateMode = false;
            $this->reset('state');

            $this->roles=role::all();
            redirect()->intended('role-management');
        }
    }


    
}
