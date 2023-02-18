<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\legende;

use Illuminate\Support\Facades\Validator;
class LegendeManagement extends Component
{






    public  $legendes ;
    public $state = [];
    public $description,$libelle;
    public $updateNew=false;

    public $updateMode = false;



    public function render()
    {
        $this->legendes=legende::all();
  return view('livewire.legende-management');

    }




    public function store()
{

    $this->validate();

    legende::create([
        'description' => $this->description,
        'libelle' =>  $this ->libelle,


    ]);

  return redirect(route('legende-management'))->with('status', 'User successfully created.');
}

public function delete($id)
{
    if($id){
        legende::where('id',$id)->delete();
        $this->legendes = legende::all();
    }
}

}
