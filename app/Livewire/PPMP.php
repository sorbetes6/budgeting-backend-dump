<?php

namespace App\Livewire;

use Livewire\Component;

class PPMP extends Component
{
    public $collegeOffice;
    public $items = [];

    public function mount()
    {
        // Initialize items with default values if necessary
        $this->items = [
            // Sample data
            ['type' => '', 'account_title' => '', 'account_code' => '', 'item_name' => '', 'description' => '', 'qty' => '', 'unit' => '', 'unit_price' => '', 'estimated_budget' => '', 'schedule' => [], 'procurement_method' => ''],
        ];
    }
    
    public function render()
    {
        return view('livewire.p-p-m-p');
    }
}
