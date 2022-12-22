<?php

namespace App\Http\Livewire;

use App\Models\Ability;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;


class InsertAbility extends Component {
    use WithFileUploads;

    public $name;
    public $description;
    public $uses;
    public $temporary_images;
    public $images;
 

    protected $rules = [
        'name' => 'required|unique:abilities|min:5',
        'uses' => 'required|integer',
        //'image' => 'image|max:1080',
    ];

        /*
    TODO: only char in name 
    TODO: validate images
    */

    /**
     * Update temporary images
     *
     * @param  null
     * @return null
     */
    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*'=>'image|max:1024',
        ])){
            foreach ($this->temporary_images as $image){
                $this->images[]=$image;
            }
        }
    }

    /**
     * Remove img from new images
     *
     * @param  int key
     * @return null
     */
    public function removeImage($key){

        if(in_array($key,array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

    /**
     * Real time validation
     *
     * @param  string propertyName
     * @return null
     */
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }


    public function save(){
        $this -> validate();
        try {
            $ability=Ability::create(['name' => $this -> name, 
                'uses' => $this -> uses, 
                'description' => $this -> description, 
            ]);

            $newFileName="abilitiesImages/{$ability->id}";
            
            //store new images
            if(!empty($this->images)){

                if(count($this->images)){
                    
                    foreach($this->images as $image){

                        $ability->images()->create(['path'=>$image->store($newFileName,'public')]);
                    }
        
                    File::deleteDirectory(storage_path('/app/livewire-tmp'));
        
                }
            }

            session()->flash('status','Abilità inserita correttamente');
            return redirect(route('admin.showAbilities'));

        } catch (\Throwable $th) {
           dd($th); //TODO: handle exception
        }
    }

    
    public function render()
    {
        return view('livewire.insert-ability');
    }


}
