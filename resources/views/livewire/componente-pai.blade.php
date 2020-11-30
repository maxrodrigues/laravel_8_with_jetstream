<div>
    <h2>Componente Pai</h2>
    @foreach($users as $user)
        <div>
            @livewire('componente-filho', [$user], key($user->id))
            {{-- <button wire:click="removeUser({{ $user->id }})">Remove</button> --}}
        </div>
    @endforeach
    <hr>
    Refresh componete pai<br />
    <button wire:click='$refresh'>Refesh</button> : {{ now() }}
    <br />
    <button wire:click='atualizaFilho("meu valor")'>Refesh Filho</button> : {{ now() }}
</div>
