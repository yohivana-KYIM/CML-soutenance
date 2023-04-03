<?php

namespace App\Http\Livewire\Auth;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;
use App\Models\User;
use App\Models\Role;
use App\Models\Pointage;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $roles;
    public $role_id;
    public $nom = '';
    public $name = '';
    public $email = '';
    public $fonction = '';
    public $password = '';
    public $users;
    public $pointages;

    protected array $rules = [
        'name' => 'required|min:3',
        'fonction' => 'required',
        'email' => 'required|email',
        'role_id' => 'required',
        'password' => 'required|min:6'
    ];

    public function register(): RedirectResponse
    {
        $this->validate();
        $user = User::create([
            'name' => $this->name,
            'fonction' => $this->fonction,
            'email' => $this->email,
            'role_id' =>$this->role_id,
            'password' => Hash::make($this->password)
        ]);

        auth()->login($user);
        return redirect('/dashboard');
    }

    public function store(): JsonResponse
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
        return response()->json([
            'message' => 'Success'
        ]);
    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $this->users = User::all();
        $this->pointages = Pointage::all();
        $this->roles = Role::all();
        return view('livewire.auth.register');
    }
}
