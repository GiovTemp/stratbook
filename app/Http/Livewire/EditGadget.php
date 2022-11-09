<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditGadget extends Component
{
    public $gadget;
    public $name;
    public $description;
    public $uses;
    public $image;
    // public $assignment;

    public function mount()
    {
        $this -> name = $this -> gadget -> name;
        $this -> uses = $this -> gadget -> uses;
        $this -> description = $this -> gadget -> description;
        $this -> image = $this -> gadget -> image;
        return view('livewire.edit-gadget');
    }

    public function edit(){
        $this -> gadget -> update([ 'name' => $this -> name,
                                    'image' => $this -> image,
                                    'description' => $this -> description,
                                    'uses' => $this -> uses]);
    }
}
