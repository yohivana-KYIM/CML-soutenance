<?php

namespace App\Http\Livewire\LaravelExamples;

use App\Models\Pointage;
use App\Models\Role;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class UserManagement extends Component
{
    use WithPagination;

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
        //$this->users = User::all();
        //$this->pointages = Pointage::all();
        $this->roles = Role::all();

        $users = User::where('name',  'like',
            '%' .$this->search .'%')->orderBy('id' ,'ASC')
            ->orWhere('fonction', 'like',
                '%' .$this->search .'%')->paginate(5);
        $pointages = Pointage::where('heure_D',  'like',
            '%' .$this->search .'%')->orderBy('id' ,'ASC')
            ->orWhere('heure_A', 'like',
                '%' .$this->search .'%')->paginate(5);
        // return view('livewire.laravel-examples.user-management');
        return view('livewire.laravel-examples.user-management', compact('users','pointages'));
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
     * @return JsonResponse|RedirectResponse
     */
    public function delete($id): JsonResponse|RedirectResponse
    {
        if ($id && User::query()->where('id', $id)->delete()) {
            return redirect(route('user-management'))->with('status', 'user successfully created.');
        }

        return response()->json([
            'error' => 'Error when deleting'
        ]);
    }
}
