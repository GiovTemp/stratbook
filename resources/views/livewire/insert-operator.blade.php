<div>

    <input type="text" wire:model.lazy="name" placeholder="es: Aruni">
    <button wire:click="save">Invia</button>
    @error('name') {{$message}} @enderror

</div>
