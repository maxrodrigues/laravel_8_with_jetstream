<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ComponentePai extends Component
{
    public $users = ['Max', 'Rani', 'Dorothy', 'Lucky', 'Merida', 'KitCat', 'Pipoca'];
    protected $listeners = ['geral' => '$refresh'];

    // public function geral(){

    // }

    public function mount()
    {
        $this->users = User::all();
    }

    public function atualizaFilho($param)
    {
        $this->emit('atualizaFilho', $param);
    }

    public function removeUser($user_id)
    {
        User::whereId($user_id)->first()->delete();

        $this->users = $this->users->filter(function ($user) use ($user_id) {
            return $user->id != $user_id;
        });
    }

    public function render()
    {
        return view('livewire.componente-pai');
    }
}
