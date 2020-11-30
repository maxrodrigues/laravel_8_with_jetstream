<div>
    The name is {{ $name }}<br />
    The last name is {{ $lastName }}<br />
    <input wire:model='name' type="text" name="" id="">
    <input wire:model='lastName' type="text" name="" id=""><br />

    <button wire:click='randomName'>Atualizar Nome</button><br />
    <p>
        @if($hydrate) hidrate - {{ $hydrate }}@endif<br /><br />
        @if($updated) updated - {{ $updated }}@endif<br /><br />
        @if($updating) updating - {{ $updating }}@endif<br /><br />
        @if($newUpdatedName) property name - {{ $newUpdatedName }}@endif<br /><br />
    </p>

</div>
