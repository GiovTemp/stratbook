<?php

namespace App\Http\Livewire;

use App\Models\Gadget;
use Livewire\Component;
use Livewire\WithFileUploads;

class InsertGadget extends Component
{
    use WithFileUploads;
    public $name;
    public $description;
    public $uses;
    public $image;
    // public $assignment;

    protected $rules = [
        'name' => 'required|min:4',
        'description' => 'required',
        'uses' => 'required|integer',
        'image' => 'max:1080',
    ];

    public function render()
    {
        return view('livewire.insert-gadget');
    }

    public function save(){
        $this -> validate();
        Gadget::create(['name' => $this -> name, 
                        'uses' => $this -> uses, 
                        'description' => $this -> description, 
                        'image' => $this->image->storeAs('gadget_images', $this -> name.'.'.$this->image->getClientOriginalExtension())]);
    }
}