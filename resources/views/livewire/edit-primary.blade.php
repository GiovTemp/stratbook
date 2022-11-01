<div>
    Nome primaria <input type="text" wire:model.lazy="name" placeholder="es: P10 RONI"> <br>
    Tipo <input type="text" wire:model.lazy="type"> <br>
    Mirini <input type="text" wire:model.lazy="sights"> <br>
    Grips <input type="text" wire:model.lazy="grips"> <br>
    Firemodes <input type="text" wire:model.lazy="firemodes"> <br>
    Accessori <input type="text" wire:model.lazy="barrels"> <br>
    Underbarrel <input type="text" wire:model.lazy="underbarrel"> <br>
    Image <input type="file" wire:model.lazy="image"> <br>
    <br> <button wire:click="save">Modifica</button>
</div>
