<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Actions extends Component
{
    public $input = "First";

    public function limparInput()
    {
        $this->input = "";
    }

    public function setValue()
    {
        $this->input = "MaxBR";
    }

    public function create()
    {
        $this->input = "Enviado";
    }

    public function render()
    {
        return view('livewire.actions');
    }
}
