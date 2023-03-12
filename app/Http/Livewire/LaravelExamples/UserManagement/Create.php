<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
class Create extends Component
{
    public $users;
    public $state = [];

    public $updateMode = false;


    public function store()
{

    $this->validate();

    User::create([
        'email' => $this->email,
        'name' => $this->name,
        'fonction' => $this->fonction,
        'password' => Hash::make($this->password),
        'picture' => $this->picture->store('profile', 'public'),
        'role_id' => $this->role_id,
    ]);

    return redirect(route('user-management'))->with('status', 'User successfully created.');
}



}
