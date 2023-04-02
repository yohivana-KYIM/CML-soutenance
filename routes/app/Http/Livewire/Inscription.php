<?php

namespace App\Http\Livewire;
use App\Models\User;

use App\Models\pointage;
use Livewire\Component;
//use Illuminate\Support\Facades\Hash;

use Livewire\WithPagination;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Route;
use App\Models\Role ;

class Inscription extends Component
{


    public $updateMode = false;
    public  $pointages ;

    public $roles;
    public $role_id;
    public $nom= '';
    public  $users;
    public $name = '';
    public $fonction = '';
    public $email = '';
    public $password = '';
    use WithPagination;
    public $search = '';

   protected $rules = [
      'name' => 'required|min:3',
        'fonction' => 'required',
        'role_id' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:6'
    ];


   // public function store()
   //// {
//$this->validate([
           // 'name' =>  'required',
           // 'fonction' => 'required',
           // 'email' => 'required|email',
           // 'password' => 'required',
      //  ]);
        //$user = User::create([
         //   'name' => $this->name,
          // 'fonction' => $this->fonction,
         //  'email' => $this->email,
         //  'password'=>$this->password,
           //'password' => Hash::make($this->password),
         //  'rememberToken' => Str::random(10),
      //]);

       //auth()->login($user);

     //   return redirect('/user-management');
   // }
   public function store()
   {

      $this->validate();

      User::create([



         'name' => $this->name,
         'email' => $this->email,
         'fonction' => $this->fonction,
         // 'password' => $this->password,
        'password' => Hash::make($this->password),
        // 'picture' => $this->picture->store('profile', 'public'),

         'role_id' =>$this->role_id,


      ]);

       return redirect('/user-management');

}
    public function render()

    {
         $this->users=User::all();
        $this->pointages=pointage::all();
        $this->roles=Role::all();
        return view('livewire.inscription');
    }



}



