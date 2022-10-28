<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Operator;

class InsertOperator extends Component{
    public $name;
    public $speed;
    public $armor;
    public $idAbility;

    public $idPrimary;
    public $idSecondary;
    public $idGadget;

    public $selectedSecondaries=[];

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
        Operator::create(['name' => $this -> name, 'armor' => $this -> armor, 'speed' => $this -> speed]);
    }

    public function updated($propertyName){
        $this -> validateOnly($propertyName);
    }

    public function addSecondary(){
        array_push($this->selectedSecondaries,$this->idSecondary);
    }
}
