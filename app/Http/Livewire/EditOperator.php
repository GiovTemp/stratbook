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

        return view('livewire.edit-operator');
    }
}
