<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Map;

class InsertMap extends Component{
    public $name;
    protected $rules = [
        'name' => 'required|unique:maps|min:4'
    ];

    /*TODO: only char in name */

    public function render()
    {
        return view('livewire.insert-map');
    }

    public function save(){
        $this -> validate();
        Map::create(['name' => $this -> name]);
    }

    public function updated($propertyName){
        $this -> validateOnly($propertyName);
    }
}
