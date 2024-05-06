<?php

namespace App\Livewire;

use Livewire\Component;


class SearchBar extends Component
{
    public $search = '';

    public function update()
    {
        $this->dispatch('search', search: $this->search);
    }

    public function render()
    {
        return view('livewire.search-bar');
    }
}
