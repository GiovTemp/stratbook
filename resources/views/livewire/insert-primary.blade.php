<div>
    Nome primaria <input type="text" wire:model.lazy="name" placeholder="es: P10 RONI"> <br>
    Accessori <input type="text" wire:model.lazy="barrels"> <br>
    Mirini <input type="text" wire:model.lazy="sights"> <br>
    Tipo <input type="text" wire:model.lazy="type"> <br>
    Image <input type="file" wire:model.lazy="image"> <br>
    <button wire:click="save">Invia</button>
    @error('name') {{$message}} @enderror
    @error('description') {{$message}} @enderror
    @error('uses') {{$message}} @enderror
    @error('image') {{$message}} @enderror
</div>
