<div>

    Nome <input type="text" wire:model.lazy="operator.name" placeholder="es: Aruni"> <br>
        @error('operator.name') {{$message}} @enderror <br>
    Speed<input type="number" wire:model.lazy="operator.speed_rating" placeholder="min 1 - max 3"> <br>
        @error('operator.speed_rating') {{$message}} @enderror <br>
    Armor <input type="number" wire:model.lazy="operator.armor_rating" placeholder="min 1 - max 3"> <br>
        @error('operator.armor_rating') {{$message}} @enderror <br>
    Organization <input type="text" wire:model.lazy="operator.organization" > <br>
        @error('operator.organization') {{$message}} @enderror <br>
    bio <input type="text" wire:model.lazy="operator.bio"/> <br>
        @error('operator.bio') {{$message}} @enderror <br>
    Type <select  wire:model="operator.type">
        <option value="attack">Attack
        <option value="defense">Defense
    </select>
    <br>
    image <img src="{{url('storage/'.$operator->image)}}"/><input type="file" wire:model="operator.image"> <br>
    @error('operator.image') {{$message}} @enderror <br>
    badge <img src="{{url('storage/'.$operator->badge)}}"/><input type="file" wire:model="operator.badge"> <br>
    @error('operator.badge') {{$message}} @enderror <br>

    Ability <select  wire:model="operator.ability_id">
                @foreach ($abilities as $ability)
                <option value="{{$ability->id}}">{{$ability->name}}
                @endforeach
            </select>
    @error('operator.ability_id') {{$message}} @enderror <br>

    <br>

    Primaries 
    <select  wire:model="idPrimary">
        @foreach ($primaries as $primary)
        <option value="{{$primary}}">{{$primary->name}}
        @endforeach
    </select>
    <button wire:click="addPrimary"> + </button>
    <br>
    Lista Primarie :
    @foreach ( $operator->primaries as $selectPrimary)
        {{json_decode($selectPrimary)->name}}
        <button wire:click="deletePrimary({{$loop->index}})"> - </button>
    @endforeach
    @error('operator.primaries') {{$message}} @enderror 
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
    @foreach ( $operator->secondaries as $selectSecondary)
    {{json_decode($selectSecondary)->name}}
    <button wire:click="deleteSecondary({{$loop->index}})"> - </button>
    @endforeach
    <br>
    @error('operator.secondaries') {{$message}} @enderror 
    <br>
    Gadgets 
    <select  wire:model="idGadget">
        @foreach ($gadgets as $gadget)
        <option value="{{$gadget}}">{{$gadget->name}}
        @endforeach
    </select>
    <button wire:click="addGadget"> + </button>

    <br>
    Lista Gadgets :
    @foreach ( $operator->gadgets as $selectGadget)
        {{json_decode($selectGadget)->name}}
        <button wire:click="deleteGadget({{$loop->index}})"> - </button>
    @endforeach
    <br>
    @error('operator.gadgets') {{$message}} @enderror 
   

    <br> <button wire:click="edit">Edit</button> 

</div>
