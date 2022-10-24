<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Operator;

class InsertOperator extends Component{
    public $name;
    public $speed;
    public $armor;

    protected $rules = [
        'name' => 'required|unique:maps|min:4',
        'speed' => 'required|unique:maps|min:4',
        'armor' => 'required|unique:maps|min:4'
    ];

    /*TODO: only char in name */

    public function render()
    {
        return view('livewire.insert-operator');
    }

    public function save(){
        $this -> validate();
        Operator::create(['name' => $this -> name]);
    }

    public function updated($propertyName){
        $this -> validateOnly($propertyName);
    }
}
