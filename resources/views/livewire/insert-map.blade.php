<div>

    <input type="text" wire:model.lazy="name" placeholder="es: ClubHouse"> <br>
    <input type="text" wire:model.lazy="description"> <br>
    <input type="file" wire:model.lazy="image" > <br>
    <button wire:click="save">Invia</button>
    @error('name') {{$message}} @enderror
    @error('description') {{$message}} @enderror
    @error('image') {{$message}} @enderror

</div>
