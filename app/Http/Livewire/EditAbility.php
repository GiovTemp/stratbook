<?php

namespace App\Http\Livewire;

use Livewire\Component;


class EditAbility extends Component
{
    public $ability;
    public $name;
    public $description;
    public $images;
    public $uses;

    public function mount()
    {
        $this -> name = $this -> ability -> name;
        $this -> images = $this -> ability -> images;
        $this -> description = $this -> ability -> description;
        $this -> uses = $this -> ability -> uses;
        return view('livewire.edit-ability');
    }

    public function edit(){
        $this -> ability -> update(['name' => $this -> name,
                                    'images' => $this -> images,
                                    'description' => $this -> description,
                                    'uses' => $this -> uses]);
    }
}
