<?php

namespace App\Http\Livewire;
use App\Models\legende;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Inscriptionlegende extends Component
{

    public $description,$libelle;




    public function store()
    {
        $this->validate([
            'description' => 'required',
            'libelle' => 'required',


        ]);
        $legende =legende::create([
            'description' => $this->description,
            'libelle' => $this->libelle,

      ]);



        return redirect('legende-management');
    }

    public function render()
    {
        return view('livewire.inscriptionlegende');
    }
}
