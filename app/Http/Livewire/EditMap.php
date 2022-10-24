<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditMap extends Component
{
    public $name;
    public $images;
    public $description;
    public $year;
    public $map;

    public function mount()
    {
        $this -> name = $this -> map -> name;
        $this -> images = $this -> map -> images;
        $this -> description = $this -> map -> description;
        $this -> year = $this -> map -> year;
        return view('livewire.edit-map');
    }

    public function save(){
        $this -> map -> update(['name' => $this -> name, 
                                'images' => $this -> images, 
                                'description' => $this -> description,
                                'year' => $this -> year]);
    }
}
