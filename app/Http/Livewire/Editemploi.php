<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\legende;
use App\Models\equipe;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\emploi;
class Editemploi extends Component
{
    public $users ;
    public $updateMode = false;
    public  $equipes;
    public $categorie;
    public $user_id;
    
    public $state = [];
    public  $emplois;
    public  $emploi;
    public $legendes;
    public $legende_id;
    public $equipe_id;
    public $legende;
    public function render()
    {
        
        $this->users=User::all();
        $this->emplois=emploi::all();
        $this->equipes=equipe::all();
        $this->legendes=legende::all();
        
        return view('livewire.editemploi');
    }
  
 

   

   
    public function mount($id)
    {
        $this->updateMode = true;

        $emplois = emploi::find($id);

        $this->state =[
            'id' =>$emplois->id,
            'nom_emploi' =>$emplois->nom_emploi,
            'date_debut' =>$emplois->date_debut,
            'date_fin' =>$emplois->date_fin,
            'legende_id' =>$emplois->legende_id,
            'equipe_id' =>$emplois->equipe_id,
           'user_id' =>$emplois->user_id,
 
        ];
    }


    public function update()
    {
        $validator = Validator::make($this->state, [
          
            'nom_emploi' => 'required',
        'date_debut' => 'required',
        'date_fin' => 'required',
        'equipe_id'=> 'required',
        'legende_id'=> 'required',
   'user_id'=> 'required',

        ])->validate();


        if ($this->state['id']) {
            $emplois = emploi::find($this->state['id']);
            $emplois->update([
                'id' => $this->state['id'],
                'nom_emploi' =>$this->state['nom_emploi'],
                
                'date_debut' => $this->state['date_debut'],
                'date_fin' => $this->state['date_fin'],
                'equipe_id' => $this->state['equipe_id'],
               
                'legende_id' => $this->state['legende_id'],
                'user_id' => $this->state['user_id'],
            ]);
            $this->updateMode = false;
            $this->reset('state');
            $this->emplois = emploi::all();
            redirect()->intended('/emploi-management');
        }
    }
}
