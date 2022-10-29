<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Map;
use Livewire\WithFileUploads;

class InsertMap extends Component{
    use WithFileUploads;

    public $name;
    public $description;
    public $image;
    
    protected $rules = [
        'name' => 'required|unique:maps|min:4',
        'description' => 'required',
        'image' => 'image|max:1080',
    ];

    /*TODO: only char in name */

    public function render()
    {
        return view('livewire.insert-map');
    }

    public function save(){
        $this -> validate();
        Map::create(['name' => $this -> name, 'image' => $this->image->storeAs('map_images', $this -> name.'.'.$this->image->getClientOriginalExtension())]);
    }

    public function updated($propertyName){
        $this -> validateOnly($propertyName);
    }
}
