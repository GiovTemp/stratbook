<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditOperator extends Component
{
    public $operator;

    public $name;
    public $badge;    
    public $image;
    public $bio;
    public $ability;
    public $armor_rating;
    public $speed_rating;
    public $type;
    public $organization;


    public $idAbility;

    public $idPrimary;
    public $idSecondary;
    public $idGadget;

    public $selectedPrimaries=[];
    public $selectedSecondaries=[];
    public $selectedGadgets=[];


    public function edit(){
        dd($this->name);
    }

    public function mount()
    {

        $this->name = $this->operator->name;
        $this->badge = $this->operator->badge;
        $this->image = $this->operator->image;
        $this->bio = $this->operator->bio;
        $this->ability = $this->operator->ability;
        $this->armor_rating = $this->operator->armor_rating;
        $this->speed_rating = $this->operator->speed_rating;
        $this->type = $this->operator->type;
        $this->organization = $this->operator->organization;
        $this->gadgets = $this->operator->gadgets;

        $this->selectedPrimaries = $this->operator->primaries;
        $this->selectedSecondaries = $this->operator->secondaries;
        $this->selectedGadgets = $this->operator->gadgets;

        return view('livewire.edit-operator');
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
