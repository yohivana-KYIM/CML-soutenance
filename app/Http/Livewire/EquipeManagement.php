<?php

namespace App\Http\Livewire;
use App\Models\equipe;
use Livewire\Component;
use App\Models\User;



use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
class EquipeManagement extends Component
{



    public  $users;
    public $user_id;
    public  $equipes ;
    public $state = [];
   
    public $updateNew=false;

    public $updateMode = false;

    public function render()

    {
         $this->equipes=equipe::all();
         $this->users=User::all();
         return view('livewire.equipe-management');


        }





        public function store()
    {

       $this->validate();

        equipe::create([
           'categorie' =>$this->categorie,
          'user_id' =>$this->user_id,




       ]);

      return redirect(route('equipe-management'))->with('status', 'Equipe successfully created.');
    }


public function delete($id)
{
    if($id){
        equipe::where('id',$id)->delete();
        $this->equipes = equipe::all();
    }
}





}
