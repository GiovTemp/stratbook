<div>
    
    <input type="text" wire:model.lazy='name'><br>
    <input type="string" wire:model.lazy='description'><br>
    <input type="text" wire:model.lazy='image'><br>
    <input type="number" wire:model.lazy='uses'><br>

    <button wire:click="edit()">Modifica</button>
</div>
