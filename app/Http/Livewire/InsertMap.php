<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Map;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class InsertMap extends Component{
    use WithFileUploads;

    public $name;
    public $description;
    public $year;
    public $temporary_images;
    public $images;
    
    protected $rules = [
        'name' => 'required|unique:maps|min:4',
        'description' => 'required',
        // 'image' => 'image|max:1080',
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

    /**
     * Save new Map
     *
     * @param  int key
     * @return Redirect
     */
    public function save(){
        $this->validate();
        
        $map = Map::create([
            'name' => $this -> name,
            'description' =>$this->description,
            'year' => $this -> year,
        ]);

        $newFileName="mapImages/{$map->id}";
            
        //store new images
        if(!empty($this->images)){

            if(count($this->images)){
                
                foreach($this->images as $image){

                    $map->images()->create(['path'=>$image->store($newFileName,'public')]);
                }
    
                File::deleteDirectory(storage_path('/app/livewire-tmp'));
    
            }
        }

        session()->flash('status','Mappa inserita correttamente');
        return redirect(route('admin.showMaps'));

    }

    public function render()
    {
        return view('livewire.insert-map');
    }

    
    


}
