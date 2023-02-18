<?php

namespace App\Http\Livewire;
use App\Models\equipe;
use App\Models\legende;
use Livewire\WithPagination;

use App\Models\User;

use App\Models\emploi;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class EmploiManagement extends Component
{
    public  $emplois;

    public  $users;
    public $legendes;
    public $legende_id;
    public $equipe_id;
    public $user_id;
    public $equipes ;
    public $state = [];
    use WithPagination;
    public $search = '';
    public $searchTerm;



    public $updateNew=false;

    public $updateMode = false;

   // public function render()
   // {
   //  //  dd('search');

      // if($this->search)
      // {

        // $emplois = emploi::where('nom_emploi',  'like',
       // '%' .$this->search .'%')->orderBy('id' ,'ASC')
       // ->orWhere('date_debut', 'like',
        //'%' .$this->search .'%')->paginate(2);

  // }else{
      //      $emplois = emploi::paginate(2);
      // }


    //    return view('livewire.emploi-management',compact('emplois'));
   // }




function mount(){



     $this->emplois=emploi::all();
     $this->equipes=equipe::all();
       $this->legendes=legende::all();
        $this->users=User::all();
       return view('livewire.emploi-management');
        //return view('livewire.emploi-management',compact('emplois'));

}









        public function store()
    {

       $this->validate();

        emploi::create([
           'nom_emploi' =>$this->nom_emploi,
           'date_debut' =>$this->date_debut,
           'date_fin' =>$this->date_fin,
           'legende_id' =>$this->legende_id,
           'equipe_id' =>$this->equipe_id,
          'user_id' =>$this->user_id,




       ]);

      return redirect(route('emploi-management'))->with('status', 'Emploi successfully created.');
    }


public function delete($id)
{
    if($id){
        emploi::where('id',$id)->delete();
        $this->emplois = emploi::all();
   }
}

}
