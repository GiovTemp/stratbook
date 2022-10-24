<div>
    <input type="text" wire:model.lazy='name'><br>
    <input type="text" wire:model.lazy='badge'><br>
    <input type="text" wire:model.lazy='image'><br>
    <textarea wire:model.lazy='bio'></textarea><br>
    <input type="text" wire:model.lazy='ability'><br>
    <input type="text" wire:model.lazy='armor_rating'><br>
    <input type="text" wire:model.lazy='speed_rating'><br>
    <input type="text" wire:model.lazy='type'><br>
    <input type="text" wire:model.lazy='organization'><br>


    <button wire:click="edit()">Edit</button>

</div>
