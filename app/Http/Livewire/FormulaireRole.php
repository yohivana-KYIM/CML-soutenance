<?php

namespace App\Http\Livewire;
use App\Models\User;

use App\Models\role ;
use Livewire\Component;

class FormulaireRole extends Component
{



  
    public $user_id;
    public $roles ;
    public $users;
    public $state = [];

    public $updateNew=false;

    public $updateMode = false;
    public $nom = '';
//insertion






public function render()
{

    
$this->roles=role::all();
$this->users=User::all();
    return view('livewire.formulaire-role');
}
//public function store()
//{
   // $this->validate([
      //  'nom' => 'required',
   //'user_id'=> 'required',
   // ]);
   // $role = role::create([
   //     'nom' => $this->categorie,
//'user_id' => $this->user_id,

 // ]);



  //  return redirect('/role-management');
//}












protected $rules = [
    'nom' => 'required|min:2',

 ];

public function store()
{
    $this->validate([
        'nom' =>  'required',
       
    ]);
    $role= role::create([
        'nom' => $this->nom,
       
  ]);

   //auth()->login($user);

    
   return redirect('/role-management');
}


}
