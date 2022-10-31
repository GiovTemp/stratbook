<div>

    Nome Abilità <input type="text" wire:model.lazy="name" placeholder="es: Jammer"> <br>
    Descrizione <input type="string" wire:model.lazy="description"> <br>
    Quantità (se necessaria) <input type="number" wire:model.lazy="uses"> <br>
    Image <input type="file" wire:model.lazy="image"> <br>
    <button wire:click="save">Invia</button>
    @error('name') {{$message}} @enderror
    @error('description') {{$message}} @enderror
    @error('uses') {{$message}} @enderror
    @error('image') {{$message}} @enderror

</div>