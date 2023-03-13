<?php

namespace App\Http\Livewire\LaravelExamples;

use App\Models\pointage;
use App\Models\Role;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
<<<<<<< HEAD
// use Livewire\WithPagination;
=======
>>>>>>> origin/main
use Livewire\WithPagination;

class UserManagement extends Component
{
    use WithPagination;
<<<<<<< HEAD

    // public $users ;
    public $nom ;
    public $role_id;
    public $roles ;
    public $state = [];
    public $name, $fonction, $email, $signature, $heure_A, $heure_D;
    public $search = '';

    /**
     * @return View
     */
    public function render(): View
    {
        // $this->users = User::all();
      //  $this->pointages = pointage::all();
        $this->roles = Role::all();

        $users = User::where('name',  'like',
        '%' .$this->search .'%')->orderBy('id' ,'ASC')
        ->orWhere('fonction', 'like',
        '%' .$this->search .'%')->paginate(5);
        $pointages = pointage::where('heure_D',  'like',
        '%' .$this->search .'%')->orderBy('id' ,'ASC')
        ->orWhere('heure_A', 'like',
        '%' .$this->search .'%')->paginate(5);
        return view('livewire.laravel-examples.user-management',compact('users','pointages'));
        // return view('livewire.laravel-examples.user-management');
=======

    public $users ;
    public $nom ;
    public $role_id;
    public $roles ;
    public $state = [];
    public $name, $fonction, $email, $pointages, $signature, $heure_A, $heure_D;
    public $search = '';

    /**
     * @return View
     */
    public function render(): View
    {
        $this->users = User::all();
        $this->pointages = pointage::all();
        $this->roles = Role::all();

        return view('livewire.laravel-examples.user-management');
>>>>>>> origin/main
    }

    /**
     * @return RedirectResponse
     */
    public function store(): RedirectResponse
    {
        $this->validate();
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'fonction' => $this->fonction,
            'password' => Hash::make($this->password),
            //'picture' => $this->picture->store('profile', 'public'),
            'role_id' =>$this->role_id,
        ]);

        return redirect(route('user-management'))->with('status', 'user successfully created.');
    }

    /**
     * @param $id
     * @return void
     */
    public function delete($id): void
    {
        if ($id) {
            User::where('id', $id)->delete();
<<<<<<< HEAD
            // $this->users = User::all();
=======
            $this->users = User::all();
>>>>>>> origin/main
        }
    }
}
