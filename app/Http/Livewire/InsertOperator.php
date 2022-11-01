<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Operator;
use Livewire\WithFileUploads;

class InsertOperator extends Component{
    use WithFileUploads;

    public $name;
    public $speed;
    public $armor;
    public $bio;
    public $type;

    public $image;
    public $badge;

    public $org;          
    public $idAbility;

    public $idPrimary;
    public $idSecondary;
    public $idGadget;

    public $selectedPrimaries=[];
    public $selectedSecondaries=[];
    public $selectedGadgets=[];

    protected $rules = [
        'name' => 'required|unique:operators|min:4',
        'speed' => 'required|integer',
        'armor' => 'required|integer'
    ];

    /*TODO: only char in name */

    public function render()
    {
        return view('livewire.insert-operator');
    }

    public function save(){
        $this -> validate();

        try {
            $o=Operator::create(['name' => $this -> name, 
            'armor_rating' => $this -> armor, 
            'speed_rating' => $this -> speed,
            'bio' => $this->bio,
            'type' => $this->type,
            'organization' => $this->org,
            'image'=>$this->image->storeAs( $this -> name,'public/images_'.$this -> name.'.'.$this->image->getClientOriginalExtension()),
            'badge'=>$this->badge->storeAs($this -> name,'public/badges_'.$this -> name.'.'.$this->image->getClientOriginalExtension()),
            'ability_id'=>$this->idAbility]);

            foreach($this->selectedPrimaries as $primary){
                $o->primaries()->attach(json_decode($primary)->id);
            }

            foreach($this->selectedSecondaries as $secondary){
                $o->secondaries()->attach(json_decode($secondary)->id);
            }
            foreach($this->selectedGadgets as $gadget){
                $o->gadgets()->attach(json_decode($gadget)->id);
            }
        } catch (\Throwable $th) {
            dd($th);
        }

    }

    public function updated($propertyName){
        $this -> validateOnly($propertyName);
    }

    public function addSecondary(){
        array_push($this->selectedSecondaries,$this->idSecondary);         
    }

    public function addPrimary(){
        array_push($this->selectedPrimaries,$this->idPrimary);
    }
    
    public function addGadget(){
        array_push($this->selectedGadgets,$this->idGadget);
    }


    public function deletePrimary($primaryToDelete){
        unset($this->selectedPrimaries[$primaryToDelete]);
    }
    public function deleteSecondary($secondaryToDelete){
        unset($this->selectedSecondaries[$secondaryToDelete]);
    }
    public function deleteGadget($gadgetToDelete){
        unset($this->selectedGadgets[$gadgetToDelete]);
    }
}
