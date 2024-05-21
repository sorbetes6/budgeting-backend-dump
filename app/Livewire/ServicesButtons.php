<?php

namespace App\Livewire;

use Livewire\Component;

class ServicesButtons extends Component
{
    public function export()
    {
        return Storage::disk('exports')->download('export.csv');
    }
    
    public function render()
    {
        return view('livewire.services-buttons');
    }
}
