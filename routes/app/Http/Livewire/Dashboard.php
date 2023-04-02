<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Dashboard extends Component
{
    public bool $loading = true;

    public function changeLoading()
    {
        sleep(3);
        $this->loading = false;
    }

    public function render(): View
    {
        return view('livewire.dashboard');
    }
}
