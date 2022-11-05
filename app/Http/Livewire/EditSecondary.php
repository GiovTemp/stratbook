<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class EditSecondary extends Component
{
    use WithFileUploads;
    public $secondary;
    public $name;
    public $sights;
    public $firemodes;
    public $barrels;
    public $grips;
    public $underbarrel;
    public $type;
    public $image;

    public function mount()
    {
        $this->name = $this->secondary->name;
        $this->sights = $this->secondary->sights;
        $this->firemodes = $this->secondary->firemodes;
        $this->barrels = $this->secondary->barrels;
        $this->grips = $this->secondary->grips;
        $this->underbarrel = $this->secondary->underbarrel;
        $this->type = $this->secondary->type;

        return view('livewire.edit-secondary');
    }

    public function save(){
        $this -> secondary -> update(['name' => $this -> name, 
                                      'sights' => $this -> sights, 
                                      'firemodes' => $this -> firemodes,
                                      'barrels' => $this -> barrels,
                                      'grips' => $this -> grips,
                                      'underbarrel' => $this -> underbarrel,
                                      'type' => $this -> type]);
    }
}
