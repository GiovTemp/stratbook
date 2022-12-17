<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class EditMap extends Component
{
    use WithFileUploads;

    public $map;
    public $temporary_images;
    public $images;
    public $oldImages;


    
    protected $rules = [
        'map.name' => 'required',
        'map.description' => 'required',
        'map.year' => 'required',
        // 'map.images' => 'required',

    ];

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
     * Remove img from old images
     *
     * @param  int key
     * @return null
     */
    public function removeOldImage($key){
        unset($this->oldImages[$key]);
    }

    /**
     * Edit Map
     *
     * @param  null
     * @return Redirect
    */
    
    public function edit(){

        //check if there are differences between the old and the stored images
        
        $imgsToDelete=$this->map->images()->get()->diff($this->oldImages);
        foreach($imgsToDelete as $img){
            Storage::delete($img->path);
            $img->delete();
            
        }

        $newFileName="mapImages/{$this->map->id}";
            
        //store new images
        if(!empty($this->images)){
            if(count($this->images)){
                foreach($this->images as $image){
                    $this->map->images()->create(['path'=>$image->store($newFileName,'public')]);
                }
    
                File::deleteDirectory(storage_path('/app/livewire-tmp'));
    
            }
        }

        $this->map->save();

        session()->flash('status','Mappa modificata correttamente');
        return redirect(route('admin.showMaps'));
    }

    public function mount()
    {
        $this->oldImages= $this->map->images()->get();
        return view('livewire.edit-map');
    }
}
