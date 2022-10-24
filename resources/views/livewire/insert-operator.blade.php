<div>

    <input type="text" wire:model.lazy="name" placeholder="es: Aruni"> <br>
    <input type="integer" wire:model.lazy="speed" placeholder="min 1 - max 3"> <br>
    <input type="integer" wire:model.lazy="armor" placeholder="min 1 - max 3"> <br>
    <br> <button wire:click="save">Invia</button> 
    @error('name') {{$message}} @enderror

</div>
