<div>
    <p>
        Olá, {{ $user->name }} : {{ now() }}
        {{-- <button wire:click='$refresh' type="text" name="" id="">Refesh</button> --}}
        <button wire:click='atualizaPai' type="text" name="" id="">Refesh</button>
    </p>
</div>
