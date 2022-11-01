<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Secondary;
use Livewire\WithFileUploads;

class InsertSecondary extends Component
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
        'barrels'=>'required'
    ];

    public function render()
    {
        return view('livewire.insert-secondary');
    }

    public function save(){
        $this -> validate();
        Secondary::create(['name' => $this -> name, 
                         'type' => $this -> type, 
                         'sights' => $this -> sights,
                         'firemodes' => $this -> firemodes,
                         'underbarrel' => $this -> firemodes,
                         'barrels' => $this -> barrels,
                         'grips' => $this -> grips,
                         'image' => $this->image->storeAs('secondaries_images', $this -> name.'.'.$this->image->getClientOriginalExtension())]);
    } 
}
