<?php

namespace App\Http\Livewire;

use App\Models\Ability;
use Livewire\Component;

class InsertAbility extends Component {
    public $name;
    public $description;
    public $uses;
    public $image;
    public $idAbility;

    protected $rules = [
        'name' => 'required|unique:abilities|min:5',
        'uses' => 'required|integer',
    ];

    public function render()
    {
        return view('livewire.insert-ability');
    }

    public function save(){
        $this -> validate();
              
        Ability::create(['name' => $this -> name, 'uses' => $this -> uses, 'description' => $this -> description, 'image' => $this -> image]);
    }

    public function updated($propertyName){
        $this -> validateOnly($propertyName);
    }
}
