<div>

    Nome <input type="text" wire:model.lazy="name" placeholder="es: Aruni"> <br>
    Speed<input type="integer" wire:model.lazy="speed" placeholder="min 1 - max 3"> <br>
    Armor <input type="integer" wire:model.lazy="armor" placeholder="min 1 - max 3"> <br>
    image -- <br>
    badge -- <br>
    Ability <select  wire:model="idAbility">
                @foreach ($abilities as $ability)
                <option value="{{$ability->id}}">{{$ability->name}}
                @endforeach
            </select>

    bio <textarea name="" id="" cols="30" rows="10"></textarea>

    <br> <button wire:click="save">Invia</button> 
    @error('name') {{$message}} @enderror

</div>
