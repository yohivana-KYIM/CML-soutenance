<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

use Livewire\Component;

class EditUser extends Component
{
    public  $users ;
    public $state = [];

    public $updateMode = false;





   public function render()
   {

       return view('livewire.edit-user');
    }

    public function mount($id)
    {
        $this->updateMode = true;

        $users = User::find($id);

        $this->state =[
            'id' => $users->id,
            'name' => $users->name,
            'fonction' => $users->fonction,

        ];
    }


    public function update()
    {
        $validator = Validator::make($this->state, [
            'name' => 'required',
            'fonction' => 'required',

        ])->validate();


        if ($this->state['id']) {
            $users = User::find($this->state['id']);
            $users->update([
                'id' => $this->state['id'],
                'name' => $this->state['name'],
                'fonction' => $this->state['fonction'],


            ]);
            $this->updateMode = false;
            $this->reset('state');
            $this->users = User::all();
            redirect()->intended('/user-management');
        }
    }


}
