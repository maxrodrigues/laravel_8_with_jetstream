<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class LifeCycleHooks extends Component
{
    public $name = '';
    public $lastName = '';
    public $hydrate = '';
    public $updated = '';
    public $updating = '';
    public $newUpdatedName = '';

    public function mount(Request $name)
    {
        $this->name = 'Maxuel';
        $this->lastName = 'Rodrigues';
    }

    public function hydrate()
    {
        $this->hydrate = now();
    }

    public function updated()
    {
        $this->updated = now();
    }

    public function updating()
    {
        $this->updating = now();
        sleep(2);
    }

    public function updatedName()
    {
        $this->newUpdatedName = 'O nome foi atualizado';
    }

    public function randomName()
    {
        $names = ['Max', 'Ranis', 'Dorothy', 'Merida', 'Kit Cat', 'Pipoca'];
        $this->name = $names[rand(0, 5)];
    }

    public function render()
    {
        return view('livewire.life-cycle-hooks');
    }
}
