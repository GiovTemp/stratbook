<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditPrimary extends Component
{
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
}
