<?php

namespace App\Http\Livewire;
use App\Models\User;
use App\Models\pointage;
use App\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;
class PaginateUser extends Component
{


    use WithPagination;
    public $search = '';
    public $roles;
    public  $nom ;

    public  $users ;
    public $state = [];
   // public $pointages;
    public $name,$fonction,$email,$signature,$heure_A,$heure_D;
    public function render()
    {

       $this->users=User::all();
     //  $this->pointages=pointage::all();
        $this->roles=Role::all();


        return view('livewire.pointages');
  //  return redirect(route('user-management'));
       // return view('livewire.paginate-user');
    }



    //paginate

    public function mount()
    {
     //  dd('search');

       if($this->search)
       {


       $pointages= pointage::where('name',  'like',
        '%' .$this->search .'%')->orderBy('id' ,'ASC')
        ->orWhere('heure_A', 'like',
        '%' .$this->search .'%')->paginate(1);


  }else{
           $pointages =  pointage::paginate(1);
     }


      return view('livewire.pointages',compact('pointages'));
   }
}
