<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

use App\Models\Role ;
class RoleManagement extends Component
{



    public  $roles;
    public  $users;
    public $user_id;
    public  $equipes ;
    public $state = [];

    public $updateNew=false;

    public $updateMode = false;

    public function render()
    {
        $this->roles=Role::all();
        $this->users=User::all();
        return view('livewire.role-management');
    }





        public function store()
    {

       $this->validate();

       Role::create([
           'nom' =>$this->nom,
          'role_id' =>$this->role_id,




       ]);

      return redirect(route('role-management'))->with('status', 'Rolesuccessfully created.');
    }


public function delete($id)
{
    if($id){
        Role::where('id',$id)->delete();
        $this->roles = Role::all();
    }
}


}
