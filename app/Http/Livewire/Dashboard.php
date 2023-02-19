<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Dashboard extends Component
{
    public bool $loading = true;

    public function render(): View
    {
        return view('livewire.dashboard');
    }
}
