<?php

namespace App\Http\Livewire\Auth;


use Livewire\Component;
use App\Models\User;
use App\Models\Role;
use App\Models\pointage;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $roles;
    public $role_id;
    public $nom= '';
    public  $users;

    public  $pointages;

    public $name = '';
    public $email = '';
    public $fonction = '';
    public $password = '';

    protected $rules = [
        'name' => 'required|min:3',
        'fonction' => 'required',
        'email' => 'required|email',
        'role_id' => 'required',
        'password' => 'required|min:6'

    ];

    public function register()
    {
        $this->validate();
        $user = User::create([
            'name' => $this->name,
           'fonction' => $this->fonction,
            'email' => $this->email,
            'role_id' =>$this->role_id,
            'password' => $this->password


         //   'password' => Hash::make($this->password)
        ]);

        auth()->login($user);

        return redirect('/dashboard');
    }



    public function store()
    {

       $this->validate();

       User::create([



          'name' => $this->name,
          'email' => $this->email,
          'fonction' => $this->fonction,
          'password' => $this->password,
         // 'password' => Hash::make($this->password),
         // 'picture' => $this->picture->store('profile', 'public'),

          'role_id' =>$this->role_id,


       ]);

 

 }
    public function render()
    {
        $this->users=User::all();
        $this->pointages=pointage::all();
        $this->roles=Role::all();
        return view('livewire.auth.register');
    }
}
