<?php

namespace App\Livewire;

use Livewire\Component;

class DonutChart extends Component
{
    public $budgets = [
        'Salaries & Wages - Regular' => 10000,
        'Salaries & Wages - Casual' => 8000,
        'Personnel Economic Relief Allowance (PERA)' => 4800000,
        'Representation Allowance (RA)' => 600000,
        'Transportation Allowance (TA)' => 600000,
        'Clothing/Uniform Allowance' => 1200000,
        'Subsistence Allowance' => 1200000,
        'Laundry Allowance' => 600000,
        'Honoria' => 2400000,
        'Hazard Pay' => 1200000,
        'Longevity Pay' => 1800000,
        'Overtime & Night Pay' => 2400000,
        'Year-End Bonus' => 6000000,
        'Cash Gift' => 1000000,
        'Retirement & Life Insurance Contributions' => 7200000, 
        'Pag-IBIG Contributions' => 240000,
        'PHILHEALTH Contributions' => 1200000, 
        'ECC Contributions' => 240000,
        'Terminal Leave Benefits' => 750000, 
        'Other Personnel Benefits' => 1500000, 
    ];

    public function render()
    {
        return view('livewire.donut-chart', [
            'budgets' => $this->budgets,
        ]);
    }
}