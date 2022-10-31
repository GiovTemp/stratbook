<?php

namespace App\Http\Livewire;

use App\Models\Ability;
use Livewire\Component;
use Livewire\WithFileUploads;


class InsertAbility extends Component {
    use WithFileUploads;

    public $name;
    public $description;
    public $uses;
    public $image;
    public $idAbility;

    protected $rules = [
        'name' => 'required|unique:abilities|min:5',
        'uses' => 'required|integer',
        'image' => 'image|max:1080',
    ];

    public function render()
    {
        return view('livewire.insert-ability');
    }

    public function save(){
        $this -> validate();
        try {
            Ability::create(['name' => $this -> name, 'uses' => $this -> uses, 'description' => $this -> description, $this->image->storeAs('ability_images', $this -> name.'.'.$this->image->getClientOriginalExtension())]);
        } catch (\Throwable $th) {
           dd($th);
        }
    }

    public function updated($propertyName){
        $this -> validateOnly($propertyName);
    }
}
