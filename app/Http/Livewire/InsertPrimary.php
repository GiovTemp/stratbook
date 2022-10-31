<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class InsertPrimary extends Component
{
    use WithFileUploads;
    public $name;
    public $sights;
    public $firemodes;
    public $barrels;
    public $grips;
    public $underbarrel;
    public $type;
    public $image;

    protected $rules = [
        'name' => 'required|unique:primaries|min:4',
        'type' => 'required',
        'sights' => 'required',
        'grips' => 'required',
        'firemodes' => 'required',
        'image' => 'required',
        'underbarrel' => 'required',
    ];

    public function render()
    {
        return view('livewire.insert-primary');
    }

    public function save(){
        $this -> validate();
        Primary::create(['name' => $this -> name, 
                         'type' => $this -> type, 
                         'sights' => $this -> sights,
                         'firemodes' => $this -> firemodes,
                         'underbarrel' => $this -> firemodes,
                         'barrels' => $this -> barrels,
                         'grips' => $this -> grips,
                         'image' => $this->image->storeAs('primaries_images', $this -> name.'.'.$this->image->getClientOriginalExtension())]);
    } 
}
