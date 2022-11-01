<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class EditPrimary extends Component
{
    use WithFileUploads;
    public $primary;
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
        $this->name = $this->primary->name;
        $this->sights = $this->primary->sights;
        $this->firemodes = $this->primary->firemodes;
        $this->barrels = $this->primary->barrels;
        $this->grips = $this->primary->grips;
        $this->underbarrel = $this->primary->underbarrel;
        $this->type = $this->primary->type;

        return view('livewire.edit-primary');
    }

    public function save()
    {
        $this -> primary -> update(['name' => $this -> name, 
                                    'sights' => $this -> sights, 
                                    'firemodes' => $this -> firemodes,
                                    'barrels' => $this -> barrels,
                                    'grips' => $this -> grips,
                                    'underbarrel' => $this -> underbarrel,
                                    'type' => $this -> type]);
    }
}
