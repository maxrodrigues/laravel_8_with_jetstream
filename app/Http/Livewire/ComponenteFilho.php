<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ComponenteFilho extends Component
{
    // protected $listeners = ['atualizaFilho' => 'atualiza'];
    protected $listeners = ['geral' => '$refresh'];
    public $user = '';

    public function mount($user)
    {
        $this->user = $user;
    }

    public function atualizaPai()
    {
        $this->emitUp('geral');
    }

    public function atualiza($value)
    {
        dd($value);
    }

    public function render()
    {
        return view('livewire.componente-filho');
    }
}
