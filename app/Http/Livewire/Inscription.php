<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Pointage;
use App\Models\Role ;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class Inscription extends Component
{
    use WithPagination;

    public $pointages ;
    public $users;
    public $roles;
    public $role_id;
    public $nom = '';
    public $name = '';
    public $fonction = '';
    public $email = '';
    public $password = '';
    public $search = '';

    protected array $rules = [
        'name' => 'required|min:3',
        'fonction' => 'required',
        'role_id' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:6'
    ];

    // public function store()
    // {
    //$this->validate([
    //   'name' =>  'required',
    //   'fonction' => 'required',
    //   'email' => 'required|email',
    //   'password' => 'required',
    //]);
    //$user = User::create([
    //    'name' => $this->name,
    //    'fonction' => $this->fonction,
    //    'email' => $this->email,
    //    'password'=>$this->password,
    //    'password' => Hash::make($this->password),
    //    'rememberToken' => Str::random(10),
    //]);

    //    auth()->login($user);
    //    return redirect('/user-management');
    // }

    public function store(): RedirectResponse
    {
        $this->validate();
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'fonction' => $this->fonction,
            'password' => Hash::make($this->password),
            // 'picture' => $this->picture->store('profile', 'public'),
            'role_id' =>$this->role_id,
        ]);

        return redirect('/user-management');
    }

    public function render(): View
    {
        $this->users = User::all();
        $this->pointages = Pointage::all();
        $this->roles = Role::all();
        return view('livewire.inscription');
    }
}



