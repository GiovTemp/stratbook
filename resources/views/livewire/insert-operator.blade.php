<div>

    Nome <input type="text" wire:model.lazy="name" placeholder="es: Aruni"> <br>
    Speed<input type="integer" wire:model.lazy="speed" placeholder="min 1 - max 3"> <br>
    Armor <input type="integer" wire:model.lazy="armor" placeholder="min 1 - max 3"> <br> 
    bio <textarea name="" id="" cols="30" rows="10"></textarea> <br>
    image -- <br>
    badge -- <br>
    Ability <select  wire:model="idAbility">
                @foreach ($abilities as $ability)
                <option value="{{$ability->id}}">{{$ability->name}}
                @endforeach
            </select>
    <br>

    Primaries 
    <select  wire:model="idPrimary">
        @foreach ($primaries as $primary)
        <option value="{{$primary->id}}">{{$primary->name}}
        @endforeach
    </select>

    <br>
    Lista Primarie :
    @foreach ( $selectedSecondaries as $selectSecondary)
    {{json_decode($selectSecondary)->name}}
    @endforeach
    <br>

    Secondaries 
    <select  wire:model="idSecondary">
        @foreach ($secondaries as $secondary)
        <option value="{{$secondary}}">{{$secondary->name}}
        @endforeach
    </select>
    <button wire:click="addSecondary"> + </button>

    <br>
    Lista Secondarie :
    @foreach ( $selectedSecondaries as $selectSecondary)
    {{json_decode($selectSecondary)->name}}
    @endforeach
    <br>
    
    Gadgets 
    <select  wire:model="idGadget">
        @foreach ($gadgets as $gadget)
        <option value="{{$gadget}}">{{$gadget->name}}
        @endforeach
    </select>

    <br>
    Lista Gadgets :
    @foreach ( $selectedGadgets as $selectGadget)
    {{json_decode($selectSecondary)->name}}
    @endforeach
    <br>

   

    <br> <button wire:click="save">Invia</button> 
    @error('name') {{$message}} @enderror

</div>
