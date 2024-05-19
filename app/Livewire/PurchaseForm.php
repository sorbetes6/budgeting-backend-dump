<?php

namespace App\Livewire;

use Livewire\Component;

class PurchaseForm extends Component
{
    public $items = [
        ['id' => 1, 'purchase-number' => '', 'purchase-pr' => '', 'purchase-TIN' => '', 'purchase-tel' => '', 'purchase-supplier' => '', 'purchase-date' => '',
        'purchase-address' => '', 'purchase-mode-procurement' => '', 'purchase-price-validity' => '', 'purchase-payment-term' => '', 'purchase-place-delivery' => '', 'purchase-date-delivery' => '',
        'purchase-item-1' => '', 'purchase-quantity-1' => '', 'purchase-unit-1' => '', 'purchase-description-1' => '', 'purchase-unit-cost-1' => '', 'purchase-ammount-1' => '',
        'purchase-item-2' => '', 'purchase-quantity-2' => '', 'purchase-unit-2' => '', 'purchase-description-2' => '', 'purchase-unit-cost-2' => '', 'purchase-ammount-2' => '']
    ];

    public $nextId = 2;

    public function addItem()
    {
        $this->items[] = ['id' => $this->nextId, 'purchase-number' => '', 'purchase-pr' => '', 'purchase-TIN' => '', 'purchase-tel' => '', 'purchase-supplier' => '', 'purchase-date' => '',
        'purchase-address' => '', 'purchase-mode-procurement' => '', 'purchase-price-validity' => '', 'purchase-payment-term' => '', 'purchase-place-delivery' => '', 'purchase-date-delivery' => '',
        'purchase-item-1' => '', 'purchase-quantity-1' => '', 'purchase-unit-1' => '', 'purchase-description-1' => '', 'purchase-unit-cost-1' => '', 'purchase-ammount-1' => '',
        'purchase-item-2' => '', 'purchase-quantity-2' => '', 'purchase-unit-2' => '', 'purchase-description-2' => '', 'purchase-unit-cost-2' => '', 'purchase-ammount-2' => ''];
        $this->nextId++;
    }

    public function render()
    {
        return view('livewire.purchase-form');
    }
}
