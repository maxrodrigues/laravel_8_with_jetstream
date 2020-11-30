<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    Meu valor é: <input wire:model="input" type="text" name="" id="">
    <br />
    <button wire:click="limparInput">Clear Input</button>
    <button wire:click="setValue">Set MaxBR</button>

    <form wire:submit.prevent="create" action="" method="post">
        <button type="submit">Enviar</button>
    </form>

    <button wire:click="$set('input', 'Alterar valor sem metodo')"type="button">Trocar</button>
</div>
