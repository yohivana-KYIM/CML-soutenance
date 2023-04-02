<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\pointage;
use DateTime;

class PointagePerso extends Component
{


    public pointage $pointage;




    protected $rules = [
        'pointage.name' => 'max:40|min:3',
        'pointage.email' => 'email:rfc,dns',
        'pointage.phone' => 'max:10',
        'pointage.about' => 'max:200',
        'pointage.location' => 'min:3'
    ];
    public function mount()
    {
        $this->pointage = auth()->pointage();
    }

    public function save()
    {
        $this->validate();

        if (env('IS_DEMO') && auth()->pointage()->id == 1) {
            if (auth()->pointage()->heure_A == $this->pointage->heure_A) {
                $this->pointage->save();
                return back()->with('status', "Your profile information have been successfuly saved!");
            }

            return back()->with('demo', "You are in a demo version. You are not allowed to change the email for default users.");
        }

        $this->pointage->save();

        return back()->with('status', "Your profile information have been successfully saved!");
    }
    public function render()
    {
        return view('livewire.pointage-perso');
    }
}
