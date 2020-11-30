<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DataBinding extends Component
{
    public $name = 'Max Rodrigues';
    public $age = 33;
    public $show = false;
    public $select = 'PHP';

    public function render()
    {
        return view('livewire.data-binding');
    }
}
