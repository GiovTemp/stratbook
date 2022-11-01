<div>
    Nome secondaria <input type="text" wire:model.lazy="name" placeholder="es: Bearing 9"> <br>
    Tipo <input type="text" wire:model.lazy="type"> <br>
    Mirini <input type="text" wire:model.lazy="sights"> <br>
    Grips <input type="text" wire:model.lazy="grips"> <br>
    Firemodes <input type="text" wire:model.lazy="firemodes"> <br>
    Accessori <input type="text" wire:model.lazy="barrels"> <br>
    UnderBarrel <input type="text" wire:model.lazy="underbarrel"> <br>
    Image <input type="file" wire:model.lazy="image"> <br>
    <button wire:click="save">Invia</button>
    @error('name') {{$message}} @enderror
    @error('type') {{$message}} @enderror
    @error('sights') {{$message}} @enderror
    @error('grips') {{$message}} @enderror
    @error('firemodes') {{$message}} @enderror
    @error('barrels') {{$message}} @enderror
    @error('underbarrel') {{$message}} @enderror
    @error('image') {{$message}} @enderror
</div>
