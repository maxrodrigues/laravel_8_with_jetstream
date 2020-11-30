<div>
    {{-- <input wire:model.debounce.3000ms='name' type="text" name="name" id=""> --}}
    {{-- <input wire:model.lazy='name' type="text" name="name" id=""> --}}
    <input wire:model.lazy='name' type="text" name="name" id="">
    <p>Meu nome é {{ $name }}</p> 
    <br />
    Mostrar idade
    <input wire:model.debounce.150ms="show" type="checkbox" name="show" id="">
    <br />
    @if($show)
        Minha idade é {{ $age }}
    @endif

    <hr>
    <select wire:model="select" name="" id="">
        <option value="">PHP</option>
        <option value="">LIVEWIRE</option>
        <option value="">LARAVEL</option>
    </select>

</div>
