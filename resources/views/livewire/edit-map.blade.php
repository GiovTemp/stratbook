<div>
    <input type="text" wire:model.lazy="name" placeholder="es: ClubHouse">
    <br> <input type="text" wire:model.lazy="images"> 
    <br> <textarea rows=5 wire:model.lazy="description"></textarea>
    <br> <input type="text" wire:model.lazy="year">
    <br> <button wire:click="save">Modifica</button>
</div>
